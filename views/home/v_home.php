<body>
<div class="banner">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="public/layout1/src/img/banner-PTong.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="public/layout1/src/img/iPhone-14-Pro-Max-Everything-We-Know-Till-Now.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="public/layout1/src/img/bannerip14promaxvip.jpg" alt="First slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<div class="content">
    <h3>Sản phẩm yêu thích</h3>

    <div class="container">
        <div >
            <div class="content_arr">
                <?php foreach ($like_products as $value){?>
                <div class="item_new_arrivals">
                    <a href="product.php?id=<?php echo $value->id;?>&type_product=<?php echo $value->id_loai; ?>"> <img src="public/layout1/img_products/<?php echo $value->hinh;?>" alt=""></a>
                    <p><?php echo $value->ten_hh;?></p>
                    <p><span style="color: red;"><?php echo $value->don_gia * $value->sale / 100; ?> đ</span><del><?php echo $value->don_gia;?></del></p>
                    <p><i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i> <span>(<?php echo $view_arr["$value->id"]->view_products; ?> Reviews)</span>
                    </p>
                </div>
                <?php }?>
            </div>
        </div>
    </div>
    <!-- ------top product favourite------ -->
    <div class="wrapper">
        <div class="container">

            <div class="row g-1">
                <div class="top_product_titel">
                    <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h2 class="gallery-title">TOP SẢN PHẨM BÁN CHẠY THÁNG 10-2022</h2>
                    </div>

                    <div align="right">
                        <button class="btn btn-default filter-button" data-filter="all">All</button>
                        <?php foreach($loai_hang as $value){?>
                        <button class="btn btn-default filter-button" data-filter="<?php echo $value->id; ?>"><?php echo $value->ten_loai; ?></button>
                        <?php }?>
                    </div>
                </div>
                <?php foreach($product as $value){?>
                <div class="col-md-3 gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter <?php echo $value->id_loai;?>">

                    <div class="card p-3">

                        <div class="text-center">

                            <a href="product.php?id=<?php echo $value->id;?>&type_product=<?php echo $value->id_loai; ?>"><img src="public/layout1/img_products/<?php echo $value->hinh;?>" width="100%" alt=""></a>

                        </div>

                        <div class="product-details">


                            <span class="font-weight-bold d-block"><?php echo $value->don_gia;?> đ</span>
                            <span><?php echo $value->ten_hh;?></span>


                            <div class="buttons d-flex flex-row">
                                <div class="cart"><i class='bx bx-cart-add'></i></div>
                                <button class="btn btn-success cart-button btn-block"><span class="dot">1</span>Add to cart </button>
                            </div>


                        </div>



                    </div>


                </div>
                <?php }?>
            </div>

        </div>


    </div>

    <!-- -------- option----------->


    <div class="style"></div>
    <div class="container text-center mb-4">
        <div class="row row-cols-auto">
            <div class="col grid-option">
                <div><i class='bx bxs-rocket'></i></div>
                <div>
                    <p>Free Shipping</p>
                    Orders $50 or more
                </div>
            </div>
            <div class="col grid-option">
                <div><i class='bx bx-rotate-left'></i></div>
                <div>
                    <p>Free Returns</p>
                    Within 30 days
                </div>
            </div>
            <div class="col grid-option">
                <div><i class='bx bx-info-circle'></i></div>
                <div>
                    <p>Get 20% Off 1 Items</p>
                    When you sign up
                </div>
            </div>
            <div class="col grid-option">
                <div><i class='bx bx-support'></i></div>
                <div>
                    <p>We Support</p>
                    24/7 amazing services
                </div>
            </div>
        </div>
    </div>
</div>