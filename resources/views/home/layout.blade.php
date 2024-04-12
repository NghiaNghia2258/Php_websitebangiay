<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Bán cây cảnh</title>

    <!-- Favicon  -->
    <link rel="icon" href="/karlmaster/img/core-img/icon.png">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="/karlmaster/css/core-style.css">
    <link rel="stylesheet" href="/karlmaster/style.css">

    <!-- Responsive CSS -->
    <link href="/karlmaster/css/responsive.css" rel="stylesheet">

    <link href="/karlmaster/css/font-awesome.min.css" rel="stylesheet">
    <link href="/karlmaster/css/jquery-ui.min.css" rel="stylesheet">
    
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/font-awesome.min.css" rel="stylesheet">
   
	<link href="/assets/css/main.css" rel="stylesheet">
	
         
    <link rel="shortcut icon" href="/assets/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/assets/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/assets/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/assets/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="/assets/images/ico/apple-touch-icon-57-precomposed.png">
</head>

<body>
@include('home/menuleft')

    <div id="wrapper">

        @include('home/header')
        <!-- ****** Header Area End ****** -->
        
       
        <!-- ****** Top Discount Area End ****** -->

        <!-- ****** Welcome Slides Area Start ****** -->
        @yield('home/content')
        <!-- ****** Popular Brands Area End ****** -->

        @include('home/footer')
        <!-- ****** Footer Area End ****** -->
    </div>
    <!-- /.wrapper end -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="/karlmaster/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="/karlmaster/js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="/karlmaster/js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="/karlmaster/js/plugins.js"></script>
    <!-- Active js -->
    <script src="/karlmaster/js/active.js"></script>

</body>

</html>