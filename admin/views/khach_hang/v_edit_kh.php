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
                            <form>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Mã Khách hàng</label>
                                    <input type="text" disabled placeholder="Auto" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    <div id="emailHelp" class="form-text">Mã Hàng hóa sẽ tự động tăng</div>
                                </div>
                                <div class="mb-3">
                                    <label for="name_product" class="form-label">Họ và Tên</label>
                                    <input type="text" name="name_product" id="name_product" class="form-control" >
                                </div>
                                <div class="mb-3">
                                    <label for="Price" class="form-label">Password</label>
                                    <input type="password" name="Price" id="Price" class="form-control" >
                                </div>
                                <div class="mb-3">
                                    <label for="sale" class="form-label">Enter the password</label>
                                    <input type="password" name="sale" id="sale" class="form-control" >
                                </div>
                                <div class="mb-3">
                                    <label for="email_user" class="form-label">Email</label>
                                    <input type="email" name="email" id="email_user" class="form-control" >
                                </div>
                                <div class="mb-3">
                                    <label for="image_user" class="form-label">Hình ảnh</label>
                                    <input type="file" name="image_user" id="image_user" class="form-control" >
                                </div>
                                <div class="mb-3">
                                    <label for="image_product" class="form-label">Kích hoạt</label>
                                    <div class="form-control d-flex">
                                        <div class="mx-2">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Chưa kích hoạt
                                            </label>
                                        </div>
                                        <div class="mx-2">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Kích hoạt
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="image_product" class="form-label">Vai trò</label>
                                    <div class="form-control d-flex">
                                        <div class="mx-2">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Khách hàng
                                            </label>
                                        </div>
                                        <div class="mx-2">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Nhân viên
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Update</button>
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