<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
            <div class="content-header-left col-md-4 col-12 mb-2">
                <h3 class="content-header-title">Cập nhật loại hàng</h3>
            </div>
            <div class="content-header-right col-md-8 col-12">
                <div class="breadcrumbs-top float-md-right">
                    <div class="breadcrumb-wrapper mr-1">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="home.php">Products</a>
                            </li>
                            <li class="breadcrumb-item active">Cập nhật loại hàng
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
                            <form action="" method="POST">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Mã Loại</label>
                                    <input type="text" disabled placeholder="<?php echo $loai_hang->id;?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    <div id="emailHelp" class="form-text">Mã Loại của bạn</div>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Tên Loại</label>
                                    <input type="text" name="update_name_loai" class="form-control" value="<?php echo $loai_hang->ten_loai;?>">
                                </div>
                                <button type="submit" name="update_loai" class="btn btn-primary">Update</button>
                                <button type="button" onclick="location.href='ds_loai_hang.php'" class="btn btn-success">Back</button>
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