<div class="container my-4">
    <h2 class="text-center my-2 text-danger">Update for User</h2>
    <form class="row g-3" action="" method="POST" enctype="multipart/form-data">
        <div class="col-12">
            <label for="fullname" class="form-label">Full name</label>
            <input type="text" name="fullname_up_us" class="form-control" id="fullname" value="<?php echo $info_user_old->ho_ten;?>">
        </div>
        <div class="col-12">
            <label for="inputEmail" class="form-label">Email</label>
            <input type="email" name="email_up_us" class="form-control" id="inputEmail" value="<?php echo $info_user_old->email;?>">
        </div>
        <div class="col-12">
            <label for="Pass_cu" class="form-label">Password Old</label>
            <input type="password" name="pass_old" class="form-control" id="Pass_cu">
        </div>
        <div class="col-12">
            <label for="newpass" class="form-label">New pass</label>
            <input type="password" name="passnew" class="form-control" id="newpass">
        </div>
        <div class="col-12">
            <label for="resspass" class="form-label">Ress pass</label>
            <input type="password" name="resspass" class="form-control" id="resspass">
        </div>

        <div class="mb-3">
            <img src="public/layout1/avatar_us/<?php echo $info_user_old->hinh;?>" class="mb-2" width="100px" alt="Ảnh cũ">
            <label for="formFileMultiple" class="form-label">Chọn ảnh muốn update</label>
            <input class="form-control" name="file_up_us" type="file" id="formFileMultiple" multiple>
        </div>
        <div class="col-12">
            <button type="submit" name="update_user" class="btn btn-primary">Update</button>
        </div>
    </form>
</div>