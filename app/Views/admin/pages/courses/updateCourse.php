<?php
ipView("admin.component.header")
?>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Cập nhật khóa học</h4>
                        <p class="card-category">Thông tin chung</p>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Tên khóa học</label>
                                        <input required type="text" class="form-control" name="course_name"
                                            value="<?= $data["name"] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label id="labelImage" for="image">
                                            <p>Upload ảnh</p>
                                        </label>
                                        <span style="font-size: 16px;" id="previewText"></span>
                                        <div style="margin: 12px;">
                                            <img class="imgUpload" style="width: 200px;" src="<?= $data["thumb"] ?>"
                                                alt="">
                                            <img class="loadingImg" src="https://i.gifer.com/7pld.gif" alt="">
                                        </div>
                                        <input hidden class="prdImage" type="file" name="course_image" id="image">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Giá cũ</label>
                                        <input value="<?= $data["old_price"] ?>" name="course_oldPrice" required
                                            type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Giá mới</label>
                                        <input value="<?= $data["price"] ?>" name="course_price" required type="text"
                                            class="form-control">

                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Mô tả ngắn</label>
                                        <div class="form-group">

                                            <textarea name="course_description" required class="form-control" rows="5">
                                                <?= $data["description"] ?>"
                                            </textarea>


                                        </div>
                                    </div>
                                </div>
                            </div>

                            <input hidden type="text" value="<?= $id_cate ?>" name="cate_id">
                            <input hidden type="text" value="<?= $data["thumb"] ?>" name="old_img">
                            <input type="text" class="course_curImg" name="course_curImg" hidden>
                            <input type="text" value="<?= $id_course ?>" name="id_course" hidden>
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

const course_curImg = document.querySelector(".course_curImg")

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
    course_curImg.value = urlImgUpload
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