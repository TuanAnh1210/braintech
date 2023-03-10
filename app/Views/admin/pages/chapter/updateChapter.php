<?php
ipView("admin.component.header")
?>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Chỉnh sửa chương học</h4>
                        <p class="card-category"><?= $courseName ?></p>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Tên chương</label>
                                        <input name="chapter_name" required type="text" class="form-control"
                                            value="<?= $data["name"] ?>">
                                        <input hidden type="text" name="chapter_id" value="<?= $idChapter ?>">
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary pull-right">Lưu ngay</button>
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