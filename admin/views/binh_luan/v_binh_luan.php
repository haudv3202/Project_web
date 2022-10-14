<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
            <div class="content-header-left col-md-4 col-12 mb-2">
                <h3 class="content-header-title">Bình Luận</h3>
            </div>
            <div class="content-header-right col-md-8 col-12">
                <div class="breadcrumbs-top float-md-right">
                    <div class="breadcrumb-wrapper mr-1">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="home.php">Comments</a>
                            </li>
                            <li class="breadcrumb-item active">Tổng hợp bình luận
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
                                    <th>Id</th>
                                    <th>Tên sản phẩm</th>
                                    <th class="px-0" >Lượt comments</th>
                                    <th>Comments mới nhất</th>
                                    <th>Comments cũ nhất</th>
                                    <th>Settings</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($data_bls as $value){?>
                                <tr >
                                    <td>
                                        <p class="fw-bold m-0">#<?php echo $value->id; ?></p>
                                    </td>
                                    <td>
                                        <p class="fw-bold m-0"><?php echo $value->ten_hh; ?></p>
                                    </td>
                                    <td>
                                        <p class="fw-bold m-0 text-center"><?php echo $date_total_comment["$value->id"]->so_luot; ?></p>
                                    </td>
                                    <td>
                                        <p class="fw-bold m-0"><?php  echo isset($date_total_comment["$value->id"]->new_date) ? $date_total_comment["$value->id"]->new_date : "Không có bình luận"; ?></p>
                                    </td>
                                    <td>
                                        <p class="fw-bold m-0"><?php  echo isset($date_total_comment["$value->id"]->old_date) ? $date_total_comment["$value->id"]->old_date : "Không có bình luận"; ?></p>
                                    </td>
                                    <td>
                                        <button type="button" onclick="location.href='chi_tiet_bl.php?id=<?php echo $value->id; ?>'" class="btn btn-sm btn-rounded ">
                                            Detail
                                        </button>
                                    </td>
                                </tr>
                                <?php }?>

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
            </section>
            <!-- // Pie charts section end -->

        </div>
    </div>
</div>