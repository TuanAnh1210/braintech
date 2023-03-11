<?php
ipView("admin.component.header")
?>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Thêm mới khóa học</h4>
                        <p class="card-category">Thông tin chung</p>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Tên khóa học</label>
                                        <input required type="text" class="form-control" name="course_name">
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
                                            <img class="imgUpload" style="height: 200px; object-fit: contain;" src=""
                                                alt="">
                                        </div>
                                        <input required hidden class="prdImage" type="file" name="course_image"
                                            id="image">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Giá cũ</label>
                                        <input name="course_oldPrice" required type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Giá mới</label>
                                        <input name="course_price" required type="text" class="form-control">
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Mô tả ngắn</label>
                                        <div class="form-group">

                                            <textarea name="course_description" required class="form-control" rows="5">
                                                test
                                            </textarea>


                                        </div>
                                    </div>
                                </div>
                            </div>

                            <input hidden type="text" value="<?= $cateId ?>" name="cate_id">
                            <button type="submit" class="btn btn-primary pull-right">Thêm mới</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>



<script>
const prdImage = document.querySelector(".prdImage")
const imgUpload = document.querySelector(".imgUpload")

prdImage.onchange = async () => {
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

        // fetch(api, {
        //     method: "POST",
        //     headers: {
        //         "Content-Type": "multipart/form-data"
        //     },
        //     body: JSON.stringify(formData)
        // }).then(res => console.log(res))
        const response = await axios.post(api, formData, {
            headers: {
                "Content-Type": "multipart/form-data"
            }
        });

        return response.data.secure_url

    }


}
</script>
<?php
ipView("admin.component.footer")
?>