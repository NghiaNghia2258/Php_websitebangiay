<div class="catagories-side-menu">
        <!-- Close Icon -->
        <div id="sideMenuClose">
            <i class="ti-close"></i>
        </div>
        <!--  Side Nav  -->
        <div class="nav-side-menu">
            <div class="menu-list">
                <h6>Loại cây</h6>
                @foreach($loaisp as $lsp)
                <ul id="menu-content" class="menu-content collapse out">
                    <!-- Single Item -->
                   
                    <li data-toggle="collapse" data-target="#women" class="collapsed active">
                       
                        <a href="/shop/{{$lsp-> id}}">{{$lsp-> Tenloai}}</a>
                    </li>

                  
                  
                </ul>
                @endforeach
            </div>
        </div>
    </div>