<?php
ipView("admin.component.header")
?>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title"><?= $courseName ?></h4>
                        <p class="card-category">Thêm bài học mới cho chương: <strong><?= $chapterName ?></strong></p>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Tên bài học</label>
                                        <input required type="text" class="form-control" name="lesson_name">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Đường dẫn</label>
                                        <input required type="text" class="form-control" name="lesson_path">
                                    </div>
                                </div>
                            </div>
                            <input hidden required type="text" class="form-control" name="chapter_id"
                                value="<?= $id_chapter ?>">


                            <button type="submit" class="btn btn-primary pull-right">Thêm ngay</button>
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