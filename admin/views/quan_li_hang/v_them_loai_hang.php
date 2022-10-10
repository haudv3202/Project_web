<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
            <div class="content-header-left col-md-4 col-12 mb-2">
                <h3 class="content-header-title">Quản Lí Loại hàng</h3>
            </div>
            <div class="content-header-right col-md-8 col-12">
                <div class="breadcrumbs-top float-md-right">
                    <div class="breadcrumb-wrapper mr-1">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="home.php">Products</a>
                            </li>
                            <li class="breadcrumb-item active">Quản Lí Loại hàng
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
                                        <label for="exampleInputEmail1" class="form-label">Mã Loại</label>
                                        <input type="text" disabled placeholder="Auto" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                        <div id="emailHelp" class="form-text">Mã Loại sẽ tự động tăng</div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Tên Loại</label>
                                        <input type="text" class="form-control" >
                                    </div>
                                    <button type="submit" class="btn btn-primary">Add New</button>
                                    <button type="button"  class="btn btn-danger">Rest Data</button>
                                    <button type="button" onclick="location.href='ds_loai_hang.php'" class="btn btn-success">List</button>
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