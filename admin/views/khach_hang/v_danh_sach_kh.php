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
                                    <th class="text-center"><input onclick="toggle(this);" type="checkbox"></th>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Service</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody >
                                <?php foreach($ds_kh as $value){?>
                                <tr>
                                    <td class="text-center align-middle">
                                        <input type="checkbox">
                                    </td>
                                    <td class="align-middle">
                                        <p class="fw-bold m-0">#<?php echo $value->id;?></p>
                                    </td>
                                    <td class="align-middle">
                                        <div class="d-flex align-items-center">
                                            <img
                                                    src="<?php echo strtolower($value->vai_tro)  == "cUser" ? "../public/layout1/avatar_us/" :  "public/theme-assets/avatar_admin/"; ?><?php echo $value->hinh;?>"
                                                    alt=""
                                                    style="width: 45px; height: 45px"
                                                    class="rounded-circle"
                                            />
                                            <div class="ms-3 ml-2">
                                                <p class="fw-bold mb-1"><?php echo $value->ho_ten?></p>
                                                <p class="text-muted mb-0"><?php echo $value->email?></p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-middle">
                                        <p class="fw-normal mb-1"><?php echo $value->vai_tro?></p>
                                    </td>
                                    <td class="align-middle">
                                        <span class="badge badge-<?php echo $value->kich_hoat == 0 ? "danger" : "success"; ?> rounded-pill d-inline"><?php echo $value->kich_hoat == 0 ? "Not Active" : "Active"; ?></span>
                                    </td>
                                    <td class="px-0 align-middle">
                                        <button type="button" onclick="location.href='edit_kh.php?id=<?php echo $value->id;?>'" class="btn btn-sm btn-rounded">
                                            Edit
                                        </button>
                                        <button type="button" onclick="confirm('Bạn có chắc chắn xóa không ?') ? location.href='delete_khach_hang.php?id=<?php echo $value->id;?>' : '';" class="btn btn-sm btn-rounded ">
                                            Delete
                                        </button>
                                    </td>
                                </tr>
                                <?php }?>
                                </tbody>
                            </table>

                            <div class="mt-2">
                                <button type="button" class="btn-selectALl btn btn-primary">Select All</button>
                                <button type="button"  class="btn-de-selectALl btn btn-danger">Deselect all</button>
                                <button type="button" onclick="confirm('Bạn có chắc chắn xóa không ?') ? location.href='deletes_khach_hang.php?id='+checkdata()+'' : '';" class="btn btn-success">Delete selected items</button>
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