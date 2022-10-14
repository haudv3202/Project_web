<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
            <div class="content-header-left col-md-4 col-12 mb-2">
                <h3 class="content-header-title">Khách hàng</h3>
            </div>
            <div class="content-header-right col-md-8 col-12">
                <div class="breadcrumbs-top float-md-right">
                    <div class="breadcrumb-wrapper mr-1">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="home.php">User</a>
                            </li>
                            <li class="breadcrumb-item active">Cập nhật khách hàng
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
                                    <label for="exampleInputEmail1" class="form-label">Mã Khách hàng</label>
                                    <input type="text" disabled placeholder="<?php echo $khach_hang->id;?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    <div id="emailHelp" class="form-text">Mã Hàng hóa sẽ tự động tăng</div>
                                </div>
                                <div class="mb-3">
                                    <label for="name_usr" class="form-label">Họ và Tên</label>
                                    <input type="text" name="name_usr_up" id="name_usr" class="form-control" value="<?php echo $khach_hang->ho_ten;?>" >
                                </div>
                                <div class="mb-3">
                                    <label for="pass" class="form-label">Password</label>
                                    <input type="password" name="pass_usr_up" id="pass" class="form-control"  >
                                </div>
                                <div class="mb-3">
                                    <label for="new_pass" class="form-label">New Password</label>
                                    <input type="password" name="pass_usr_up" id="new_pass" class="form-control" >
                                </div>
                                <div class="mb-3">
                                    <label for="re_pass" class="form-label">Enter the password</label>
                                    <input type="password" name="re_pass_up" id="re_pass" class="form-control" >
                                </div>
                                <div class="mb-3">
                                    <label for="email_user" class="form-label">Email</label>
                                    <input type="email" name="email_usr_up" id="email_user" value="<?php echo $khach_hang->email;?>" class="form-control" >
                                </div>
                                <div class="mb-3">
                                    <label for="image_user" class="form-label">Hình ảnh</label>
                                    <input type="file" name="image_user_up" id="image_user" class="form-control" >
                                </div>
                                <div class="mb-3">
                                    <label for="image_product" class="form-label">Kích hoạt</label>
                                    <div class="form-control d-flex">
                                        <div class="mx-2">
                                            <input class="form-check-input" type="radio" name="kich_hoat_up" value="0" <?php echo $khach_hang->kich_hoat == 0 ? "checked='checked'" : ""; ?> id="chua_kich_hoat">
                                            <label class="form-check-label" for="chua_kich_hoat">
                                                Chưa kích hoạt
                                            </label>
                                        </div>
                                        <div class="mx-2">
                                            <input class="form-check-input" type="radio" name="kich_hoat_up" value="1"  <?php echo $khach_hang->kich_hoat == 1 ? "checked='checked'" : ""; ?> id="kich_hoat">
                                            <label class="form-check-label" for="kich_hoat">
                                                Kích hoạt
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="image_product" class="form-label">Vai trò</label>
                                    <div class="form-control d-flex">
                                        <?php foreach ($ds_vai_tro as $value){?>
                                            <div class="mx-2">
                                                <input class="form-check-input" type="radio" value="<?php echo $value->name;?>" <?php echo  strtolower($value->name) == strtolower($khach_hang->vai_tro) ? "checked='checked'" : ""; ?> name="vai_tro_up" id="<?php echo $value->name;?>">
                                                <label class="form-check-label" for="<?php echo $value->name;?>">
                                                    <?php echo $value->name;?>
                                                </label>
                                            </div>
                                        <?php }?>
                                    </div>
                                </div>
                                <button type="submit" name="update_kh" class="btn btn-primary">Update</button>
                                <button type="button"  class="btn btn-danger">Rest Data</button>
                                <button type="button" onclick="location.href='ds_khach_hang.php'" class="btn btn-success">List</button>
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