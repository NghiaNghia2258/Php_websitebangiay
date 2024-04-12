<?php

namespace App\Http\Controllers;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

use App\Models\ctdhmodels;
use Illuminate\Http\Request;
use App\Models\donhangmodels;
use App\Models\loaisanphammodels;
use App\Models\sanphammodels;

class CartController extends Controller
{
    public function cartList()
    {
        $loaisp=loaisanphammodels::all();
        $cartItems = \Cart::getContent();
        // dd($cartItems);
        return view('home/cart', ['cartItems' => $cartItems,'loaisp' => $loaisp]);
    }


    public function addToCart(Request $request)
    {
        \Cart::add([
            'id' => $request->id,   
            'name' => $request->Tensanpham,
            'price' => $request->Gia,
            'quantity' => $request->Soluong,
            'attributes' => array(
            'image' => $request->Anh,
            )
        ]);
        session()->flash('success', 'Product is Added to Cart Successfully !');

        return redirect()->route('cart.list');
    }
    public function updateCart(Request $request)
    {
        \Cart::update(
            $request->id,
            [
                    'quantity' => [
                    'relative' => false,
                    'value' => $request->Soluong
                ],
            ]
        );

        session()->flash('success', 'Item Cart is Updated Successfully !');

        return redirect()->route('cart.list');
    }

    public function removeCart(Request $request)
    {
        \Cart::remove($request->id);
        session()->flash('success', 'Item Cart Remove Successfully !');

        return redirect()->route('cart.list');
    }

    public function clearAllCart()
    {
        \Cart::clear();

        session()->flash('success', 'All Item Cart Clear Successfully !');

        return redirect()->route('cart.list');
    }

    public function checkoutget()
    { 
        $cartItems = \Cart::getContent();
        $loaisp = loaisanphammodels::all();
        // dd($cartItems);
        return view('home/checkout', compact('cartItems'), ['loaisp' => $loaisp]);
        
    }
    public function checkoutpost(Request $request)
    { 
        $dh = new donhangmodels;
        $dh->Hoten = $request->Hoten;
        $dh->Diachi = $request->Diachi;
        $dh->Email = $request->Email;
        $dh->Sdt = $request->Sdt;
        $dh->Ngaydat = date('Y-m-d');
        $dh->Tongtien = \Cart::getTotal();
        $dh->save();
        $kq = donhangmodels::latest()->first();
        // $kq = donhangmodels::oldest()->first();
        $cartItems = \Cart::getContent();
        foreach($cartItems as $sp){
            $sp1 = new ctdhmodels();
        //     'iddonhang',
        // 'idproduct',
        // 'soluong',
        // 'thanhtien',  
            // $sp1 ->Donhang_id = $kq->id;
            $sp1 ->Donhang_id = $kq->id;
            $sp1 ->Sanpham_id = $sp->id;
            $sp1 ->Tensanpham = $sp->name;
            $sp1->Anh = $sp->attributes->get('image');
            $sp1 ->Gia = $sp->price;
            $sp1 ->Soluong = $sp->quantity;
            $sp1 ->Tongtien = $sp->quantity * $sp->price;
            $sp1->save();
 
                // Cập nhật số lượng sản phẩm sau khi thanh toán
                $sanpham = sanphammodels::find($sp->id);
                $sanpham->Soluong -= $sp->quantity;
                $sanpham->save();

           
                // $sanpham = sanphammodels::find($sp->id);
                // if($sanpham->Soluong == 0) {
                //     echo "Sản phẩm đã hết hàng";
                //     return redirect()->back(); // hoặc chuyển hướng đến trang khác
                // } elseif($sanpham->Soluong < $sp->quantity) {
                //     echo "Số lượng sản phẩm trong kho không đủ";
                //     return redirect()->back();
                // } else {
                //     $sanpham->Soluong -= $sp->quantity;
                //     $sanpham->save();
                    
                // }
                // $dh->save();

            
            
            
        }
       
        \Cart::clear();

        session()->flash('success', 'Đặt hàng thành công');
        $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';  // SMTP server của Gmail
        $mail->SMTPAuth   = true;
        $mail->Username   = 'dientuxuananh68@gmail.com'; // Địa chỉ email của bạn
        $mail->Password   = 'iqiv ymgq epqe zhxx';         // Mật khẩu email của bạn
        $mail->SMTPSecure = 'tls';               // Enable TLS encryption
        $mail->Port       = 587;                 // TCP port to connect to

        //Recipients
        $mail->setFrom('dientuxuananh68@gmail.com', 'Your Name');
        $mail->addAddress($request->Email, $request->Hoten); // Add a recipient

        // Content
        $mail->isHTML(true);  // Set email format to HTML
        $mail->Subject = 'Order Success';
        $mail->Body    = 'Cảm ơn bạn đã đặt hàng. Đơn hàng của bạn đã được xác nhận.';

        $mail->send();
        echo 'Email đã được gửi thành công';
    } catch (Exception $e) {
        echo "Không thể gửi email. Lỗi: {$mail->ErrorInfo}";
    }

        return redirect()->route('cart.list');
    }
}
