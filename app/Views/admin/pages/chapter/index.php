<?php ipView("admin.component.header") ?>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div style="display: flex; justify-content: space-between;" class="card-header card-header-primary">
                        <div class="courses-heading">
                            <h4 class="card-title ">Khóa học: <span>Xây Dựng Website với ReactJS</span></h4>
                            <p class="card-category"> Danh sách các chương
                            </p>
                        </div>
                        <button class="courses-add">
                            <a style="height: 100%; display: flex; align-items: center; width: 100%;"
                                href="<?= $GLOBALS['domainPage'] ?>/admin_chapter/addChapter">Thêm chương mới</a>
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
                                        Chương
                                    </th>
                                    <th width="20%">
                                        Tổng bài học
                                    </th>
                                    <th width="25%">
                                        Chi tiết
                                    </th>
                                    <th width="20%">
                                        Hành động
                                    </th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            1
                                        </td>
                                        <td>
                                            Giới thiệu
                                        </td>
                                        <td>
                                            12
                                        </td>
                                        <td>
                                            <a href="<?= $GLOBALS['domainPage'] ?>/admin_chapter"
                                                class="course_view-btn">
                                                Xem
                                            </a>
                                        </td>
                                        <td class="text-primary">
                                            <a href="<?= $GLOBALS['domainPage'] ?>/admin_chapter/updateChapter"
                                                class=" course_update-btn">
                                                Sửa

                                            </a>
                                            <a href="#" class=" course_delete-btn">
                                                Xóa

                                            </a>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>

<?php ipView("admin.component.footer") ?>