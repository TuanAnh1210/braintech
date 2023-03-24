<?php
ipView("admin.component.header")
?>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Cập nhật đáp án</h4>
                        <p class="card-category">Thông tin chung</p>
                    </div>
                    <div class="card-body">
                        <form class="formUpdateAnswer" action="" method="POST">
                            <?php foreach ($answer as $key => $value) : ?>
                            <div class="row">
                                <input hidden type="text" value="<?= $value["id"] ?>"
                                    name="answer_id<?= $i = $key + 1 ?>">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Đáp án <?= $i = $key + 1 ?></label>
                                        <input class="answer<?= $i = $key + 1 ?>" value=" <?= $value["name"] ?>"
                                            name="answer<?= $i = $key + 1 ?>" required type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Đúng/Sai</label>

                                        <select class="role-ipt" name="answer_is_correct<?= ++$key ?>" id="">
                                            <option <?php if ($value["is_correct"] == 0) {
                                                            echo "selected";
                                                        } ?> value="0">
                                                Sai</option>
                                            <option <?php if ($value["is_correct"] == 1) {
                                                            echo "selected";
                                                        } ?> value="1">
                                                Đúng</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach ?>




                            <button type="submit" class="updateAnswer btn btn-primary pull-right">Cập nhật</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<?php ipView("admin.component.footer") ?>