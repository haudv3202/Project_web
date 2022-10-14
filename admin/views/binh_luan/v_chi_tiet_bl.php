<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
            <div class="content-header-left col-md-8 col-12 mb-2">
                <h3 class="content-header-title">Bình luận - <?php echo $hh->ten_hh;?></h3>
            </div>
            <div class="content-header-right col-md-4 col-12">
                <div class="breadcrumbs-top float-md-right">
                    <div class="breadcrumb-wrapper mr-1">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="home.php">Comments</a>
                            </li>
                            <li class="breadcrumb-item active">Chi tiết bình luận
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
                                    <th class="text-center"> <input  onclick="toggle(this);"  type="checkbox"></th>
                                    <th>Id</th>
                                    <th class="px-0 text-center">Nội dung</th>
                                    <th>Ngày comment</th>
                                    <th>Người comment</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php  foreach ($bls as $value){?>
                                <tr >
                                    <td class="text-center">
                                        <input  type="checkbox">
                                    </td>
                                    <td>
                                        <p class="fw-bold m-0">#<?php echo $value->id;?></p>
                                    </td>
                                    <td>
                                        <p class="fw-bold m-0 text-center"><?php echo $value->noi_dung;?></p>
                                    </td>
                                    <td>
                                        <p class="fw-bold m-0"><?php echo $value->ngay_bl;?></p>
                                    </td>
                                    <td>
                                        <p class="fw-bold m-0"><?php echo isset($name_kh["$value->id_kh"]->ho_ten) ? $name_kh["$value->id_kh"]->ho_ten : "User không tồn tại"; ?></p>
                                    </td>
                                    <td>
                                        <button type="button" onclick="confirm('Bạn có chắc chắn xóa không ?') ? location.href='delete_bl.php?id_del=<?php echo $value->id;?>&id_hh=<?php echo $hh->id;?>'  : '';" class="btn btn-sm btn-rounded ">
                                            Delete
                                        </button>
                                    </td>
                                </tr>
                                <?php }?>

                                </tbody>
                            </table>

                            <?php echo empty($bls) ? "<h1 class='my-4 text-center'>Không có bình luận nào!</h1>" : ""; ?>

                            <div class="mt-2">
                                <button type="button" class="btn-selectALl btn btn-primary">Select All</button>
                                <button type="button"  class="btn-de-selectALl btn btn-danger">Deselect all</button>
                                <button type="button" onclick="confirm('Bạn có chắc chắn xóa không ?') ? location.href='deletes_bl.php?id_del='+checkdata()+'&id_hh=<?php echo $hh->id;?>' : '';"  class="btn btn-success">Delete selected items</button>
                                <button type="button" onclick="location.href='binh_luan.php'" class="btn btn-primary">Back</button>
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