<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
            <div class="content-header-left col-md-4 col-12 mb-2">
                <h3 class="content-header-title">Thêm Hàng hóa</h3>
            </div>
            <div class="content-header-right col-md-8 col-12">
                <div class="breadcrumbs-top float-md-right">
                    <div class="breadcrumb-wrapper mr-1">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="home.php">Products</a>
                            </li>
                            <li class="breadcrumb-item active">Thêm Hàng hóa
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body"><!-- Bar charts section start -->
            <!-- line chart section start -->
            <div class="row">
                <!-- Simple Pie Chart -->
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <form action="" method="POST" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Mã Hàng Hóa</label>
                                    <input type="text" disabled placeholder="Auto" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    <div id="emailHelp" class="form-text">Mã Hàng hóa sẽ tự động tăng</div>
                                </div>
                                <div class="mb-3">
                                    <label for="name_product" class="form-label">Tên Hàng Hóa</label>
                                    <input type="text" name="name_hang_hoa" id="name_product" class="form-control" >
                                </div>
                                <div class="mb-3">
                                    <label for="Price" class="form-label">Đơn Giá</label>
                                    <input type="number" name="Price" id="Price" class="form-control" >
                                </div>
                                <div class="mb-3">
                                    <label for="sale" class="form-label">Giảm giá</label>
                                    <input type="number" name="sale" id="sale" class="form-control" >
                                </div>
                                <div class="mb-3">
                                    <label for="image_product" class="form-label">Hình Ảnh</label>
                                    <input type="file" name="image_hang_hoa" id="image_product" class="form-control" >
                                </div>
                                <div class="mb-3">
                                    <label for="type_products" class="form-label">Loại Hàng</label>
                                    <select class="form-control" name="type_products" id="type_products" aria-label="Default select example">
                                        <?php foreach ($loai_hang as $value){?>
                                        <option value="<?php echo $value->id;?>"><?php echo $value->ten_loai;?></option>
                                        <?php }?>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="dac_biet" class="form-label">Hàng đặc biệt</label>
                                    <select class="form-control" name="dac_biet" id="dac_biet" aria-label="Default select example">
                                        <option value="0">Bình thường</option>
                                        <option value="1">Đặc biệt</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="date" class="form-label">Ngày nhập</label>
                                    <input type="date" name="date" id="date" class="form-control" >
                                </div>
                                <div class="mb-3">
                                    <label for="live" class="form-label">Số lượt xem</label>
                                    <input type="number" name="live" id="live" placeholder="0" class="form-control" >
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Mô tả</label>
                                    <textarea class="form-control" name="mo_ta" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                                <button type="submit" name="add_hang_hoa" class="btn btn-primary">Add New</button>
                                <button type="reset"  class="btn btn-danger">Rest Data</button>
                                <button type="button" onclick="location.href='ds_hang.php'" class="btn btn-success">List</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            </section>
            <!-- // Pie charts section end -->

        </div>
    </div>
</div>