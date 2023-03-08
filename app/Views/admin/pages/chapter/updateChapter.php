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
                        <p class="card-category">Tên khóa học</p>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Tên chương</label>
                                        <input required type="text" class="form-control">
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