<?php
ipView("admin.component.header")
?>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Thêm đáp án</h4>
                        <p class="card-category">Thông tin chung</p>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Đáp án 1</label>
                                        <input name="answer1" required type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Đúng/Sai</label>

                                        <select class="role-ipt" name="answer_is_correct1" id="">
                                            <option value="0">Sai</option>
                                            <option value="1">Đúng</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Đáp án 2</label>
                                        <input name="answer2" required type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Đúng/Sai</label>

                                        <select class="role-ipt" name="answer_is_correct2" id="">
                                            <option value="0">Sai</option>
                                            <option value="1">Đúng</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Đáp án 3</label>
                                        <input name="answer3" required type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Đúng/Sai</label>

                                        <select class="role-ipt" name="answer_is_correct3" id="">
                                            <option value="0">Sai</option>
                                            <option value="1">Đúng</option>
                                        </select>
                                    </div>
                                </div>
                            </div>


                            <button type="submit" class="btn btn-primary pull-right">Tạo ngay</button>
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