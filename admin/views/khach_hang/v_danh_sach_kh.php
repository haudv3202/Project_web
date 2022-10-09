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
                            <li class="breadcrumb-item active">Danh sách khách hàng
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
                                    <th>Name</th>
                                    <th>Service</th>
                                    <th>Status</th>
                                    <th>Position</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img
                                                    src="https://mdbootstrap.com/img/new/avatars/8.jpg"
                                                    alt=""
                                                    style="width: 45px; height: 45px"
                                                    class="rounded-circle"
                                            />
                                            <div class="ms-3">
                                                <p class="fw-bold mb-1">John Doe</p>
                                                <p class="text-muted mb-0">john.doe@gmail.com</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="fw-normal mb-1">Admin</p>
                                    </td>
                                    <td>
                                        <span class="badge badge-success rounded-pill d-inline">Active</span>
                                    </td>
                                    <td>Senior</td>
                                    <td>
                                        <button type="button" onclick="location.href='edit_kh.php'" class="btn btn-sm btn-rounded">
                                            Edit
                                        </button>
                                        <button type="button" class="btn btn-sm btn-rounded">
                                            Delete
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img
                                                    src="https://mdbootstrap.com/img/new/avatars/6.jpg"
                                                    class="rounded-circle"
                                                    alt=""
                                                    style="width: 45px; height: 45px"
                                            />
                                            <div class="ms-3">
                                                <p class="fw-bold mb-1">Alex Ray</p>
                                                <p class="text-muted mb-0">alex.ray@gmail.com</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="fw-normal mb-1">User</p>
                                    </td>
                                    <td>
        <span class="badge badge-primary rounded-pill d-inline"
        >Onboarding</span
        >
                                    </td>
                                    <td>Junior</td>
                                    <td>
                                        <button type="button"
                                                onclick="location.href='edit_kh.php'"
                                                class="btn btn-rounded btn-sm fw-bold"
                                                data-mdb-ripple-color="dark">
                                            Edit
                                        </button>
                                        <button type="button" class="btn btn-sm btn-rounded">
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
                                <button type="button" onclick="location.href='khach_hang.php'" class="btn btn-danger">Add more</button>
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