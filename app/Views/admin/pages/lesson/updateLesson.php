<?php
ipView("admin.component.header")
?>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Chỉnh sửa bài học</h4>
                        <p class="card-category">Thông tin chung</p>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Tên bài học</label>
                                        <input name="lesson_name" required type="text" class="form-control"
                                            value="<?= $dataLesson['name'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Đường dẫn</label>
                                        <input name="lesson_path" required type="text" class="form-control"
                                            value="<?= $dataLesson["path_video"] ?>">
                                    </div>
                                </div>
                            </div>

                            <input hidden type="text" name="chapter_id" value="<?= $id_chapter ?>">
                            <input hidden type="text" name="lesson_id" value="<?= $id_lesson ?>">
                            <input hidden type="text" name="course_id" value="<?= $id_course ?>">


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