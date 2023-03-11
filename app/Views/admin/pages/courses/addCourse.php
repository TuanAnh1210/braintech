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
                                        <span style="font-size: 16px;" id="previewText">test</span>
                                        <div style="margin: 12px;">
                                            <!-- <img style="height: 200px; object-fit: contain;"
                                                src="https://files.fullstack.edu.vn/f8-prod/courses/13/13.png" alt=""> -->
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

<?php
ipView("admin.component.footer")
?>