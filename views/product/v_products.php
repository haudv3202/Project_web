<div class="container-fluid">
    <div class="container">
        <div id="content" class="my-5">



            <!-- ============tất cả sản phẩm=============== -->
            <div class="wrapper">


                <div class="containershop">

                    <div class="row allproduct g-1">
                        <div class="top_product_titel">
                            <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <h2 class="gallery-title"> SẢN PHẨM</h2>
                            </div>
                        </div>
                        <?php if(!empty($product)){ ?>
                        <?php foreach ($product as $value){?>
                        <div class="col-md-3 gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter dienthoai" data-aos="fade-down">

                            <div class="card p-3">

                                <div class="text-center">

                                    <a href="product.php?id=<?php echo $value->id;?>&type_product=<?php echo $value->id_loai; ?>"> <img width="100%" src="public/layout1/img_products/<?php echo $value->hinh; ?>" alt=""></a>

                                </div>

                                <div class="product-details">


                                    <span class="font-weight-bold d-block"><?php echo $value->don_gia; ?>đ</span>
                                    <span><?php echo $value->ten_hh; ?></span>


                                    <div class="buttons d-flex flex-row">
                                        <div class="cart"><i class='bx bx-cart-add'></i></div>
                                        <button class="btn btn-success cart-button btn-block"><span
                                                class="dot">1</span>Add to cart </button>
                                    </div>

                                </div>



                            </div>


                        </div>
                        <?php }?>
                        <?php }else if(!empty($All_product)) {?>
                            <?php foreach ($All_product as $value){?>
                                <div class="col-md-3 gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter dienthoai" data-aos="fade-down">

                                    <div class="card p-3">

                                        <div class="text-center">

                                            <a href="product.php?id=<?php echo $value->id;?>&type_product=<?php echo $value->id_loai; ?>"> <img width="100%" src="public/layout1/img_products/<?php echo $value->hinh; ?>" alt=""></a>

                                        </div>

                                        <div class="product-details">


                                            <span class="font-weight-bold d-block"><?php echo $value->don_gia; ?>đ</span>
                                            <span><?php echo $value->ten_hh; ?></span>


                                            <div class="buttons d-flex flex-row">
                                                <div class="cart"><i class='bx bx-cart-add'></i></div>
                                                <button class="btn btn-success cart-button btn-block"><span
                                                            class="dot">1</span>Add to cart </button>
                                            </div>

                                        </div>



                                    </div>


                                </div>

                            <?php }?>
                        <?php }else {?>
                                    <h1 class="text-danger text-center">Không có sản phẩm loại hàng này</h1>
                        <?php }?>
                    </div>

                </div>


            </div>
        </div>
    </div>

    <div class="style"></div>
    <!-- =========option============ -->
    <div class="container text-center mb-4">
        <div class="row row-cols-auto">
            <div class="col grid-option" data-aos="fade-down">
                <div><i class='bx bxs-rocket'></i></div>
                <div>
                    <p>Free Shipping</p>
                    Orders $50 or more
                </div>
            </div>
            <div class="col grid-option" data-aos="fade-down">
                <div><i class='bx bx-rotate-left'></i></div>
                <div>
                    <p>Free Returns</p>
                    Within 30 days
                </div>
            </div>
            <div class="col grid-option" data-aos="fade-down">
                <div><i class='bx bx-info-circle'></i></div>
                <div>
                    <p>Get 20% Off 1 Items</p>
                    When you sign up
                </div>
            </div>
            <div class="col grid-option" data-aos="fade-down">
                <div><i class='bx bx-support'></i></div>
                <div>
                    <p>We Support</p>
                    24/7 amazing services
                </div>
            </div>
        </div>
    </div>