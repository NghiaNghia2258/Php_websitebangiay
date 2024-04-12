import { ChiTietHoaDonBan } from "../../DTO/chitiethoadonban.js";
import { HoaDonban } from "../../DTO/hoadonban.js";
import { CayCanh } from "../../DTO/caycanh.js";

const element_CayCanh = (obj) => {
  const element = document.createElement("div");
  element.className = "caycanh";
  element.innerHTML = `
    <div class="img">
        <img
        src="../../HinhAnh/${obj.img}"
        alt=""
        />
    </div>
    <div>
        <p class="tencaycanh">
        ${obj.ten}
        </p>
        <button class="gia"><span>${obj.gia}</span> VND</button>
    </div>
    `;
  element.addEventListener("click", async () => {
    if (!confirm("Thêm sản phẩm vào giỏ hàng ?")) {
      return;
    }
    const userstring = localStorage.getItem("nguoidungdangnhap");
    if (!userstring) {
      alert("Vui lòng đăng nhập");
      return;
    }
    const user = JSON.parse(userstring);
    let hoaDon = await HoaDonban.FindByCustomer(user.taikhoan);
    if (!hoaDon) {
      await HoaDonban.Them({
        id: 0,
        ngayban: new Date(),
        taikhoan: user.taikhoan,
        trangthai: "Unpaid",
      });
      hoaDon = await HoaDonban.FindByCustomer(user.taikhoan);
    }
    const chitiet = {
      id: 0,
      idhd: hoaDon.id,
      idcay: obj.id,
      soluong: 1,
    };
    await ChiTietHoaDonBan.Them(chitiet);
    alert("Thêm thành công");
  });
  return element;
};
const load_danhsach = async () => {
  const element_danhsachbanchay = document.querySelector(
    "#danhsachbanchay .danhsach"
  );
  const element_danhsachtheotuoi = document.querySelector(
    "#danhsachtheotuoi .danhsach"
  );
  const element_danhsachmoi = document.querySelector("#danhsachmoi .danhsach");
  const res = await CayCanh.LayCayCanhTheoTrang(1, 8);
  res.data.forEach((caycanh) => {
    element_danhsachbanchay.appendChild(element_CayCanh(caycanh));
    element_danhsachtheotuoi.appendChild(element_CayCanh(caycanh));
    element_danhsachmoi.appendChild(element_CayCanh(caycanh));
  });
};
async function main() {
  await load_danhsach();
}
main();
