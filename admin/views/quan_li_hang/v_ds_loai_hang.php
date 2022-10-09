<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
            <div class="content-header-left col-md-4 col-12 mb-2">
                <h3 class="content-header-title">Danh sách Loại hàng</h3>
            </div>
            <div class="content-header-right col-md-8 col-12">
                <div class="breadcrumbs-top float-md-right">
                    <div class="breadcrumb-wrapper mr-1">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="home.php">Products</a>
                            </li>
                            <li class="breadcrumb-item active">Tất cả Loại hàng
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
                            <table class="table align-middle mb-0 bg-white">
                                <thead class="bg-light">
                                <tr>
                                    <th></th>
                                    <th>Id</th>
                                    <th>Name Products</th>
                                    <th>Status</th>
                                    <th>Settings</th>
                                </tr>
                                </thead>
                                <tbody>

                                <tr >
                                    <td class="text-center">
                                        <input class="form-check-input" type="checkbox" class="" value="" id="flexCheckDefault">
                                    </td>
                                    <td>
                                        <p class="fw-bold m-0">#1</p>
                                    </td>
                                    <td>
                                        <p class="fw-bold m-0">Máy tính bảng</p>
                                    </td>
                                    <td>
                                        <span class="badge badge-success rounded-pill d-inline">Active</span>
                                    </td>
                                    <td>
                                        <button type="button" onclick="location.href='edit_loai_hang.php'" class="btn btn-sm btn-rounded ">
                                            Edit
                                        </button>
                                        <button type="button" class="btn btn-sm btn-rounded ">
                                            Delete
                                        </button>
                                    </td>
                                </tr>

                                </tbody>
                            </table>

                            <div class="mt-2">
                                <button type="button" class="btn btn-primary">Select All</button>
                                <button type="button"  class="btn btn-danger">Deselect all</button>
                                <button type="button"  class="btn btn-success">Delete selected items</button>
                                <button type="button" onclick="location.href='quan_li_loai_hang.php'" class="btn btn-danger">Add more</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </section>
            <!-- // Pie charts section end -->

        </div>
    </div>
</div>