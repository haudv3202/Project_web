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
    <h3>Explore Popular Categories</h3>
    <div class="container text-center item">
        <div class="row">
            <div class="col">
                <img src="public/layout1/src/img/laptop.png" alt="">
                <p>LAPTOP</p>
            </div>
            <div class="col">
                <img src="public/layout1/src/img/cam.png" alt="">
                <p>Digital Cameras</p>
            </div>
            <div class="col">
                <img src="public/layout1/src/img/tele.png" alt="">
                <p>Telephone</p>
            </div>
            <div class="col">
                <img src="public/layout1/src/img/TV.png" alt="">
                <p>TELEVISION</p>
            </div>
            <div class="col">
                <img src="public/layout1/src/img/audio.png" alt="">
                <p>AUDIO</p>
            </div>
            <div class="col">
                <img src="public/layout1/src/img/watch.png" alt="">
                <p>Smart Watch</p>
            </div>
        </div>
    </div>
    <!-- -banner quảng cáo------ -->
    <div class="ads_content">
        <div class="container text-center">
            <div class="row">
                <div class="col grid_col col1">
                    <div class="text">
                        <p>Smart Offer</p>
                        <p><span style="color: #8d8e94;">Save $150</span> on Samsung Galaxy Note 9</p>
                        <p><a href="">Shop Now</a><i class='bx bx-right-arrow-alt'></i> </p>
                    </div>
                    <div></div>
                </div>
                <div class="col grid_col col2">
                    <div class="text">
                        <p>Smart Offer</p>
                        <p><span style="color: #8d8e94;">Save $150</span> on Samsung Galaxy Note 9</p>
                        <p><a href="">Shop Now</a><i class='bx bx-right-arrow-alt'></i> </p>
                    </div>
                    <div></div>
                </div>
                <div class="col grid_col col3">
                    <div class="text">
                        <p>Smart Offer</p>
                        <p><span style="color: #8d8e94;">Save $150</span> on Samsung Galaxy Note 9</p>
                        <p><a href="">Shop Now</a><i class='bx bx-right-arrow-alt'></i> </p>
                    </div>
                    <div></div>
                </div>
            </div>
        </div>
    </div>
    <!-- --new arrial-------- -->
    <div class="container">
        <div class="new_arrivals">
            <h3>Sản phẩm yêu thích</h3>
            <div class="content_arr">
                <?php foreach ($like_products as $value){?>
                <div class="item_new_arrivals">
                    <img src="public/layout1/img_products/<?php echo $value->hinh;?>" alt="">
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
    <!-- --------deal----------- -->
    <div class="container">
        <div class="deal">
            <h3>Deals & Outlet</h3>
            <p>today’s deal and more</p>
            <div class="container text-center">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="text_deal deal1">
                            <div class="item-text-deal">
                                <h3>
                                    Deal of the day
                                </h3>
                                <p>Limited quantities.</p>
                                <p><a href="">Brown faux fur longline coat</a></p>
                                <p>$310.00 <span style="color:#8d8e94 ;"> was $190.00</span></p>
                                <p>Shop Now <i class='bx bx-right-arrow-alt'></i></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="text_deal deal2">
                            <div class="item-text-deal">
                                <h3>
                                    Deal of the day
                                </h3>
                                <p>Limited quantities.</p>
                                <p><a href="">Brown faux fur longline coat</a></p>
                                <p>$310.00 <span style="color:#8d8e94 ;"> was $190.00</span></p>
                                <p>Shop Now <i class='bx bx-right-arrow-alt'></i></p>
                            </div>
                        </div>
                    </div>

                </div>

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

                            <div class="weight">

                                <small><?php echo $value->don_gia;?> đ</small>

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
    <div class="container text-center">
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