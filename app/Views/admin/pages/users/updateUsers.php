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
                        <form method="post" action="http://localhost/braintech/admin_users/handleUpdateUsers"
                            enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Họ tên</label>
                                        <input required type="text" name="user_name" value="<?= $data["name"] ?>"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Chức vụ</label>

                                        <select class="role-ipt" name="user_role" id="">
                                            <option <?php if ($data["role"] == 1) {
                                                        echo "selected";
                                                    } ?> value="1">Học
                                                viên</option>
                                            <option <?php if ($data["role"] == 0) {
                                                        echo "selected";
                                                    } ?> value="0">Quản
                                                trị</option>
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
                                            <img class="imgUpload" style="height: 200px; object-fit: contain;"
                                                src="<?= $GLOBALS["domainPage"] ?>/uploads/<?= $data["avatar"] ?>"
                                                alt="">
                                            <img class="loadingImg" src="https://i.gifer.com/7pld.gif" alt="">
                                        </div>
                                        <input hidden class="prdImage" type="file" name="user_avatar" id="image">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Email</label>
                                        <input required type="text" name="user_email" value="<?= $data["email"] ?>"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Password</label>
                                        <input required type="text" name="user_password"
                                            value="<?= $data["password"] ?>" class="form-control">
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Điện thoại</label>
                                        <input required type="text" name="user_phone" value="<?= $data["phone"] ?>"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Địa chỉ</label>
                                        <input required type="text" name="user_address" value="<?= $data["address"] ?>"
                                            class="form-control">
                                    </div>
                                </div>

                            </div>

                            <input type="text" hidden name="user_id" value="<?= $data["id"] ?>">
                            <input type="text" name="old_image" value="<?= $data["avatar"] ?>" hidden>
                            <button type="submit" class="btn btn-primary pull-right">Cập nhật</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<script>
const imgUpload = document.querySelector(".imgUpload")

const loadingImg = document.querySelector(".loadingImg")

const showLoading = (isSuccess) => {
    if (isSuccess) {
        imgUpload.style.display = "block"
        loadingImg.classList.remove("open")
    } else {
        imgUpload.style.display = "none"
        loadingImg.classList.add("open")
    }
}

const prdImage = document.querySelector(".prdImage")
prdImage.onchange = async () => {
    showLoading(false);
    const urlImgUpload = await uploadFiles(prdImage.files)

    imgUpload.src = urlImgUpload;
}


const uploadFiles = async (files) => {
    const CLOUD_NAME = "dpjieqbsk";
    const PRESET_NAME = "braintech";
    const FOLDER_NAME = "braintech";
    const urlImage = "";
    const api = `https://api.cloudinary.com/v1_1/${CLOUD_NAME}/image/upload`;

    const formData = new FormData();

    formData.append("upload_preset", PRESET_NAME);
    formData.append("folder", FOLDER_NAME);

    for (const file of files) {
        formData.append("file", file);

        const response = await axios.post(api, formData, {
            headers: {
                "Content-Type": "multipart/form-data"
            }
        });
        showLoading(response);
        return response.data.secure_url

    }


}
</script>
<?php
ipView("admin.component.footer")
?>