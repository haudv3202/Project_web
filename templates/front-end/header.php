<body>
<div class="container-fluid">
    <div class="header">

        <!-- header phần top -->
        <div class="header_top">
            <!-- bên trái menu -->
            <div class="header_top_right">
                <nav class="navbar navbar-expand-sm navbar-dark">

                    <!-- Toggler/collapsibe Button -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#collapsibleNavbar">
                        <span>Links<i class='bx bxs-down-arrow'></i></span>
                    </button>

                    <!-- Navbar links -->
                    <div class="collapse navbar-collapse" id="collapsibleNavbar">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="color-a dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                   aria-expanded="false">
                                    USD
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">EUR</a></li>
                                    <li><a class="dropdown-item" href="#">USD</a></li>
                                    <li><a class="dropdown-item" href="#">VND</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="color-a dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                   aria-expanded="false">
                                    English
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">France</a></li>
                                    <li><a class="dropdown-item" href="#">English</a></li>
                                    <li><a class="dropdown-item" href="#">VietNamese</a></li>
                                </ul>
                            </li>


                            <?php if(isset($_SESSION["info"])){ ?>
                                <li class="nav-item dropdown UserNew">
                                    <p class="color-a" href="">
                                        <img src="public/layout1/src/img/cuong.jpg" alt="">
                                    </p>
                                    <div class="account">
                                        <p> <i class='bx bx-loader-alt'></i> <a href="">Đổi pass</a></p>
                                        <p> <i class='bx bxs-cloud-upload'></i> <a href="">Update</a></p>
                                        <p><i class='bx bx-log-out-circle bx-rotate-90' ></i> <a href="log_out.php">Logout</a></p>
                                    </div>
                                </li>
                            <?php }else {?>
                                <li class="nav-item dropdown">
                                    <a class="color-a" href="sign_in.php">
                                        Sing In / Sing Up
                                    </a>
                                </li>
                            <?php }?>
                        </ul>
                    </div>
                </nav>
            </div>
            <!-- bên phải menu -->
            <div class="header_top_left">
                <p><i class='bx bx-phone'></i>0123.456.789</p>
            </div>
        </div>




        <!-- header-mid -->
        <div class="header_mid">
            <div class="logo_header">

                <img src="public/layout1/src/img/logoHC.png" width="100px" alt="">

            </div>
            <div class="icon_header_mid">
                <div class="compare center">
                    <i class='bx bx-git-compare bx-rotate-90'></i>
                    <p>Compare</p>
                </div>
                <div class="heart center">
                    <i class='bx bx-heart'></i>
                    <p>Heart</p>
                    <div class="hover_heart">
                        <div class="item_heart">
                            <div class="text_item_heart">
                                <p>Máy ảnh Cannon EOS 5D</p>
                                <p>1 x $130.00</p>
                            </div>
                            <div class="image_item_heart">
                                <img src="src/img/cam.png" width="50%" alt="">
                            </div>
                        </div>
                        <div class="item_heart">
                            <div class="text_item_heart">
                                <p>Máy ảnh Cannon EOS 5D</p>
                                <p>1 x $130.00</p>
                            </div>
                            <div class="image_item_heart">
                                <img src="src/img/cam.png" width="50%" alt="">
                            </div>
                        </div>
                        <div class="item_heart">
                            <div class="text_item_heart">
                                <p>Máy ảnh Cannon EOS 5D</p>
                                <p>1 x $130.00</p>
                            </div>
                            <div class="image_item_heart">
                                <img src="src/img/cam.png" width="50%" alt="">
                            </div>
                        </div>
                        <div class="style item-heart"></div>
                        <p class="viewall"><a href="">VIEW ALL</a></p>
                    </div>
                </div>
                <div class="cartnew center">
                    <a href="cart.html"> <i class='bx bx-cart'></i></a>
                    <p>Cart</p>
                    <div class="hover_heart">
                        <div class="item_heart">
                            <div class="text_item_heart">
                                <p>Máy ảnh Cannon EOS 5D</p>
                                <p>1 x $130.00</p>
                            </div>
                            <div class="image_item_heart">
                                <img src="src/img/cam.png" width="50%" alt="">
                            </div>
                        </div>
                        <div class="item_heart">
                            <div class="text_item_heart">
                                <p>Máy ảnh Cannon EOS 5D</p>
                                <p>1 x $130.00</p>
                            </div>
                            <div class="image_item_heart">
                                <img src="src/img/cam.png" width="50%" alt="">
                            </div>
                        </div>
                        <div class="item_heart">
                            <div class="text_item_heart">
                                <p>Máy ảnh Cannon EOS 5D</p>
                                <p>1 x $130.00</p>
                            </div>
                            <div class="image_item_heart">
                                <img src="src/img/cam.png" width="50%" alt="">
                            </div>

                        </div>
                        <div class="style item-heart"></div>
                        <div class="total">
                            <p>TOTAL</p>
                            <p>$130.00</p>
                        </div>
                        <p class="viewall view_cart"><a href="cart.html">VIEW CART</a></p>
                    </div>
                </div>
            </div>
        </div>


        <div class="header_bottom">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">

                    <a class="navbar-brand" href="#">TẤT CẢ</a>
                    <button class="navbar-toggler btn" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false"
                            aria-label="Toggle navigation">
                        <span><i class='bx bx-menu-alt-left'></i></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarScroll">
                        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll"
                            style="--bs-scroll-height: 100px;">
                            <?php foreach ($loai_hang as $value){?>
                            <li class="nav-item ">
                                <a class="nav-link" href="#" role="button"
                                   aria-expanded="false">
                                    <?php echo $value->ten_loai;?>
                                </a>
                            </li>
                            <?php }?>
                        </ul>
                        <form class="d-flex" role="search">
                            <input class="search_input" type="search" placeholder="Search product..."
                                   aria-label="Search" required>
                            <button class="btn_search" type="submit">Search <i
                                        class='bx bx-right-arrow-alt'></i></button>
                        </form>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>