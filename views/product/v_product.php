<!-- -==================product======== -->
<div class="container container-product">
    <div class="card">
        <div class="form">
            <div class="left-side">
                <div class="fashion">
                    <h3>Chi tiết sản phẩm</h3>
                </div>
                <div class="woman">
                    <h5><?php echo $name_lh->ten_loai;?></h5>
                    <i class='bx bx-chevron-right'></i>
                    <p><?php echo $product->ten_hh;?></p>
                </div>
                <div class="images">
                    <span><img src="public/layout1/img_products/<?php echo $product->hinh; ?>"></span>
                </div>



            </div>
            <div class="right-side">
                <div class="top_div">
                    <span><a href="">Giỏ hàng</a><i class="fa fa-shopping-bag"></i></span>
                </div>
                <h3><?php echo $product->ten_hh;?></h3>
                <h4><?php echo $product->don_gia;?> &nbsp;₫</h4>
                <div class="designer">
                    <h5>Loại hàng : </h5>
                    <p><?php echo $name_lh->ten_loai;?></p>
                </div>
                <div class="designer">
                    <h5>Phiên bản : </h5>
                    <p>Chính hãng</p>
                </div>
                <div class="color">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="options">
                    <div class="size">
                        <select>
                            <option>256 Gb</option>
                            <option>512GB</option>
                            <option>1T</option>
                        </select>
                    </div>
                    <div class="quantity">
                        <i class="fa fa-minus"></i>
                        <span class="qty">1</span>
                        <i class="fa fa-plus"></i>
                    </div>
                    <button>Add to cart</button>
                </div>
                <div class="open_wish">
                    <p>Open sizes guide</p>
                    <div class="wishlist">
                        <i class="fa fa-heart-o"></i>
                        <p>Add to Wishlist</p>
                    </div>
                </div>
                <div class="description">
                    <h4>Mô Tả</h4>
                    <p><?php echo $product->ten_hh;?> :</p>
                    <ul class="features">
                        <li><?php echo $product->mo_ta;?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- =============comment============= -->
<div class="container">
    <div class="be-comment-block">
        <h1 class="comments-title">Bình luận (<?php echo $views_commets->views;?>)</h1>
        <?php foreach ($commets as $value){?>
        <div class="be-comment">
            <div class="be-img-comment">
                <a href="">
                    <img src="public/layout1/avatar_us/<?php echo $users["$value->id"][0]->hinh;?>" alt="" class="be-ava-comment">
                </a>
            </div>
            <div class="be-comment-content">

                        <span class="be-comment-name">
                            <a href="blog-detail-2.html"><?php echo $users["$value->id"][0]->ho_ten;?></a>
                        </span>
                <span class="be-comment-time">
                            <i class="fa fa-clock-o"></i>
                            <?php echo $value->ngay_bl;?>
                        </span>

                <p class="be-comment-text">
                   <?php echo $value->noi_dung;?>
                </p>
            </div>

        </div>
        <?php }?>
        <?php if(isset($_SESSION["info"])){?>
        <form class="form-block" action="" method="POST">
            <div class="row">
                <div class="col-xs-12">
                    <div class="form-group">
                        <textarea class="form-input" name="commets" required="" placeholder="Your text"></textarea>
                    </div>
                </div>
                <button type="submit" class="submit_product" name="commets_sub" >Gửi</button>
            </div>
        </form>
        <?php }else {?>
            <a href="sign_in.php" class="signup-image-link h5 my-5 text-danger text-center d-block">Bạn phải đăng nhập để bình luận</a>
        <?php }?>
    </div>
</div>

<!-- ===========sản phẩm khác============ -->
<div class="container">
    <div class="new_arrivals">
        <h3>Có thể bạn quan tâm </h3>
        <div class="content_arr">
            <?php foreach ($related as $value){?>
            <div class="item_new_arrivals">
                <img width="100%" src="public/layout1/img_products/<?php echo $value->hinh;?>" alt="">
                <p><?php echo $value->ten_hh;?></p>
                <p><span style="color: red;"><?php echo $value->don_gia * $value->sale / 100; ?> đ</span><del><?php echo $value->don_gia;?>đ</del></p>
                <p><i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i> <span>(<?php echo $review["$value->id"]["0"]->review;?> Reviews)</span>
                </p>
            </div>
           <?php }?>
        </div>
    </div>
</div>