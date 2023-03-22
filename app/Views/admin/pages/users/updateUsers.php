<?php
ipView("admin.component.header")
?>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Cập nhật tài khoản</h4>
                        <p class="card-category">Thông tin chung</p>
                    </div>
                    <div class="card-body">
                        <form method="post" action="http://localhost/braintech/admin_users/handleUpdateUsers" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Họ tên</label>
                                        <input required type="text" name="user_name" value="<?=$data["name"]?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Chức vụ</label>

                                        <select class="role-ipt" name="user_role" id="">
                                            <option>Học viên</option>
                                            <option>Quản trị</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label id="labelImage" for="image">
                                            <p>Upload ảnh</p>
                                        </label>
                                        <span style="font-size: 16px;" id="previewText">test</span>
                                        <div style="margin: 12px;">
                                            <img  style="height: 200px; object-fit: contain;"
                                                src="<?=$data["avatar"]?>"
                                                alt="">
                                        </div>
                                        <input  hidden class="prdImage" type="file" name="user_avatar" id="image">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Email</label>
                                        <input required type="text" name="user_email" value="<?=$data["email"]?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Password</label>
                                        <input required type="text" name="user_password" value="<?=$data["password"]?>" class="form-control">
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Điện thoại</label>
                                        <input required type="text" name="user_phone" value="<?=$data["phone"]?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Địa chỉ</label>
                                        <input required type="text" name="user_address" value="<?=$data["address"]?>" class="form-control">
                                    </div>
                                </div>

                            </div>

                            <input type="text" hidden name="user_id" value="<?=$data["id"]?>">
                            <input type="text" name="old_image" value="<?=$data["avatar"]?>" hidden>
                            <button type="submit" class="btn btn-primary pull-right">Cập nhật</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
ipView("admin.component.footer")
?>