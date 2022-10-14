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
        <h1 class="comments-title">Bình luận (3)</h1>
        <div class="be-comment">
            <div class="be-img-comment">
                <a href="">
                    <img src="public/layout1/src/img/cuong.jpg" alt="" class="be-ava-comment">
                </a>
            </div>
            <div class="be-comment-content">

                        <span class="be-comment-name">
                            <a href="blog-detail-2.html">Cường Em ti vi</a>
                        </span>
                <span class="be-comment-time">
                            <i class="fa fa-clock-o"></i>
                            12/10/2022 at 3:14am
                        </span>

                <p class="be-comment-text">
                    Khi gặp bug hãy đội máy tính lên đầu ! Đó là cách giải quyết của tôi
                </p>
            </div>
        </div>
        <div class="be-comment">
            <div class="be-img-comment">
                <a href="">
                    <img src="public/layout1/src/img/hau.jpg" alt="" class="be-ava-comment">
                </a>
            </div>
            <div class="be-comment-content">
                        <span class="be-comment-name">
                            <a href="blog-detail-2.html">Hậu Gaming</a>
                        </span>
                <span class="be-comment-time">
                            <i class="fa fa-clock-o"></i>
                            12/10/2022 at 3:14am
                        </span>
                <p class="be-comment-text">
                    Nếu đẹp là cái tội thì bài dự án mẫu của bạn xứng đáng tử hình
                </p>
            </div>
        </div>
        <div class="be-comment">
            <div class="be-img-comment">
                <a href="">
                    <img src="public/layout1/src/img/hai.jpg" alt="" class="be-ava-comment">
                </a>
            </div>
            <div class="be-comment-content">
                        <span class="be-comment-name">
                            <a href="">Hải dớ</a>
                        </span>
                <span class="be-comment-time">
                            <i class="fa fa-clock-o"></i>
                            12/10/2022 at 3:14am
                        </span>
                <p class="be-comment-text">
                    Đừng khen tôi đẹp trai, vì tôi có đẹp cỡ mấy cũng bị lép vế bởi dự án mẫu của bạn!
                </p>
            </div>
        </div>
        <form class="form-block">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <div class="form-group fl_icon">
                        <div class="icon"><i class="fa fa-user"></i></div>
                        <input class="form-input" id="name_product" type="text" placeholder="Your name"
                               required>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 fl_icon">
                    <div class="form-group fl_icon">
                        <div class="icon"><i class="fa fa-envelope-o"></i></div>
                        <input class="form-input" id="email_product" type="text" placeholder="Your email"
                               required>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="form-group">
                        <textarea class="form-input" required="" placeholder="Your text"></textarea>
                    </div>
                </div>
                <input class="submit_product" type="submit"></input>
            </div>
        </form>
    </div>
</div>

<!-- ===========sản phẩm khác============ -->
<div class="container">
    <div class="new_arrivals">
        <h3>Có thể bạn quan tâm </h3>
        <div class="content_arr">
            <div class="item_new_arrivals">
                <img width="100%" src="public/layout1/src/img/arr1.jpg" alt="">
                <p>Canon EOS 5D Mark IV DSLR Camera</p>
                <p><span style="color: red;">$130</span><del>$360.99</del></p>
                <p><i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i> <span>(2 Reviews)</span>
                </p>
            </div>
            <div class="item_new_arrivals">
                <img src="public/layout1/src/img/arr2.jpg" alt="">
                <p>Máy Ảnh Canon EOS 5D Mark IV DSLR Camera</p>
                <p><span style="color: red;">$130</span><del>$360.99</del></p>
                <p><i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i> <span>(2 Reviews)</span>
                </p>
            </div>
            <div class="item_new_arrivals">
                <img src="public/layout1/src/img/arr3.jpg" alt="">
                <p>Máy Ảnh Canon EOS 5D Mark IV DSLR Camera</p>
                <p><span style="color: red;">$130</span><del>$360.99</del></p>
                <p><i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i> <span>(2 Reviews)</span>
                </p>
            </div>
            <div class="item_new_arrivals">
                <img src="public/layout1/src/img/arr4.jpg" alt="">
                <p>Máy Ảnh Canon EOS 5D Mark IV DSLR Camera</p>
                <p><span style="color: red;">$130</span><del>$360.99</del></p>
                <p><i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i> <span>(2 Reviews)</span>
                </p>
            </div>
            <div class="item_new_arrivals">
                <img src="public/layout1/src/img/arr5.jpg" alt="">
                <p>Máy Ảnh Canon EOS 5D Mark IV DSLR Camera</p>
                <p><span style="color: red;">$130</span><del>$360.99</del></p>
                <p><i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i> <span>(2 Reviews)</span>
                </p>
            </div>
            <div class="item_new_arrivals">
                <img src="public/layout1/src/img/arr6.jpg" alt="">
                <p>Máy Ảnh Canon EOS 5D Mark IV DSLR Camera</p>
                <p><span style="color: red;">$130</span><del>$360.99</del></p>
                <p><i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i> <span>(2 Reviews)</span>
                </p>
            </div>
        </div>
    </div>
</div>