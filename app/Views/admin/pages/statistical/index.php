<?php ipView("admin.component.header") ?>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div style="display: flex; justify-content: space-between;" class="card-header card-header-primary">
                        <div class="courses-heading">
                            <h4 class="card-title ">Khóa học Front-End</h4>
                            <p class="card-category"> Thống kê</p>
                        </div>
                        <button class="courses-add">
                            <a style="height: 100%; display: flex; align-items: center; width: 100%;"
                                href="<?= $GLOBALS['domainPage'] ?>/admin_courses/addCourse?cateId=1">Thêm mới</a>
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th width="5%">
                                        ID
                                    </th>
                                    <th width="30%">
                                        Tên khóa học
                                    </th>
                                    <th width="20%">
                                        Ảnh
                                    </th>
                                    <th width="15%">
                                        Chương học
                                    </th>
                                    <th width="15%">
                                        Bài học
                                    </th>
                                    <th width="15%">
                                        Học viên
                                    </th>
                                </thead>
                                <tbody class="bodyFe">



                                </tbody>
                            </table>

                            <div class="paginationFe">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div style="display: flex; justify-content: space-between;" class="card-header card-header-primary">
                        <div class="courses-heading">
                            <h4 class="card-title ">Khóa học Back-End</h4>
                            <p class="card-category"> Thống kê</p>
                        </div>
                        <button class="courses-add">
                            <a style="height: 100%; display: flex; align-items: center; width: 100%;"
                                href="<?= $GLOBALS['domainPage'] ?>/admin_courses/addCourse?cateId=2">Thêm mới</a>
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th width="5%">
                                        ID
                                    </th>
                                    <th width="30%">
                                        Tên khóa học
                                    </th>
                                    <th width="20%">
                                        Ảnh
                                    </th>
                                    <th width="15%">
                                        Chương học
                                    </th>
                                    <th width="15%">
                                        Bài học
                                    </th>
                                    <th width="15%">
                                        Học viên
                                    </th>
                                </thead>
                                <tbody class="bodyBe">


                                </tbody>
                            </table>
                            <div class="paginationBe">

                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>

<?php ipView("admin.component.footer") ?>