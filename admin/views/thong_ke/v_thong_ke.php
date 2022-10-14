<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
            <div class="content-header-left col-md-4 col-12 mb-2">
                <h3 class="content-header-title">Thống kê</h3>
            </div>
            <div class="content-header-right col-md-8 col-12">
                <div class="breadcrumbs-top float-md-right">
                    <div class="breadcrumb-wrapper mr-1">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="home.php">Comments</a>
                            </li>
                            <li class="breadcrumb-item active">Thống kê theo từng loại
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
                                    <th>Loại hàng</th>
                                    <th class="text-center">Số lượng</th>
                                    <th>Giá cao nhất</th>
                                    <th>Giá thấp nhất</th>
                                    <th>Trung bình giá</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($loais as $value){?>
                                <tr >
                                    <td>
                                        <p class="fw-bold m-0">#<?php echo $value->id;?></p>
                                    </td>
                                    <td>
                                        <p class="fw-bold m-0"><?php echo $value->ten_loai;?></p>
                                    </td>
                                    <td>
                                        <p class="fw-bold m-0 text-center"><?php echo isset($price_max_min_total["$value->id"]->so_luong) ? $price_max_min_total["$value->id"]->so_luong : "Không có sản phẩm nào";?></p>
                                    </td>
                                    <td>
                                        <p class="fw-bold m-0"><?php echo isset($price_max_min_total["$value->id"]->gia_max) ? $price_max_min_total["$value->id"]->gia_max : "0";?> đ</p>
                                    </td>
                                    <td>
                                        <p class="fw-bold m-0"><?php echo isset($price_max_min_total["$value->id"]->gia_min) ? $price_max_min_total["$value->id"]->gia_min : "0";?> đ</p>
                                    </td>
                                    <td>
                                        <p class="fw-bold m-0"><?php echo isset($price_max_min_total["$value->id"]->trung_binh) ? $price_max_min_total["$value->id"]->trung_binh : "0";?> đ</p>
                                    </td>
                                </tr>
                                <?php }?>


                                </tbody>
                            </table>

                            <button type="button" onclick="location.href='bieu_do.php'" class="btn btn-success mt-2">
                                Xem biểu đồ
                            </button>

                        </div>
                    </div>
                </div>
            </div>
            </section>
            <!-- // Pie charts section end -->

        </div>
    </div>
</div>