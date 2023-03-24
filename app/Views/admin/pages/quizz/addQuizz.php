<?php
ipView("admin.component.header")
?>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Thêm quizz mới</h4>
                        <p class="card-category"><?= $lesson["name"] ?></p>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Câu hỏi</label>
                                        <input name="quizz_answer" required type="text" class="form-control">

                                        <input hidden name="lessonId" value="<?= $lesson["id"] ?>" type="text" class="form-control">

                                    </div>
                                </div>
                            </div>
                            <!-- <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Đáp án 1</label>
                                        <input name="quizz1" required type="text" class="form-control">

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Đáp án 2</label>
                                        <input name="quizz2" required type="text" class="form-control">

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Đáp án 3</label>
                                        <input name="quizz3" required type="text" class="form-control">

                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <label class="bmd-label-floating">Đáp án đúng</label>
                                    <div style="display: flex; margin-left: 12px;" class="form-group">
                                        <div style="display: flex; margin-right: 48px;">
                                            <label style="margin-right: 6px;" for="">1</label>
                                            <input style="width: 20px; height: 20px;" name="correctQuizz" required type="radio" class="form-control">
                                        </div>
                                        <div style="display: flex; margin-right: 48px;">
                                            <label style="margin-right: 6px;" for="">3</label>
                                            <input style="width: 20px; height: 20px;" name="correctQuizz" required type="radio" class="form-control">
                                        </div>
                                        <div style="display: flex; margin-right: 48px;">
                                            <label style="margin-right: 6px;" for="">2</label>
                                            <input style="width: 20px; height: 20px;" name="correctQuizz" required type="radio" class="form-control">
                                        </div>

                                    </div>
                                </div>
                            </div> -->

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