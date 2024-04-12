<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Quản trị</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/dist/css/bootstrap.css">

    <link rel="stylesheet" href="/dist/vendors/simple-datatables/style.css">

    <link rel="stylesheet" href="/dist/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="/dist/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="/dist/css/app.css">
    <link rel="shortcut icon" href="/dist/images/favicon.svg" type="image/x-icon">
</head>

<body>
    <div id="app">
        @include('admin/menuleft')
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            @yield('admin/content')

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2021 &copy; Mazer</p>
                    </div>
                    <div class="float-end">
                        <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                                href="http://ahmadsaugi.com">A. Saugi</a></p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="/dist/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="/dist/js/bootstrap.bundle.min.js"></script>

    <script src="/dist/vendors/simple-datatables/simple-datatables.js"></script>
    <script>
        // Simple Datatable
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>

    <script src="/dist/js/main.js"></script>
</body>

</html>