<?php ipView("admin.component.header") ?>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div style="display: flex; justify-content: space-between;" class="card-header card-header-primary">
                        <div class="courses-heading">
                            <h4 class="card-title ">Khóa học Front-End</h4>
                            <p class="card-category"> Danh sách các khóa học Front-End</p>
                        </div>
                        <button class="courses-add">
                            <a style="height: 100%; display: flex; align-items: center; width: 100%;"
                                href="<?= $GLOBALS['domainPage'] ?>/admin_courses/addCourse">Thêm mới</a>
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
                                        Tên
                                    </th>
                                    <th width="20%">
                                        Ảnh
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
                                            Xây Dựng Website với ReactJS
                                        </td>
                                        <td>
                                            <img class="course_img"
                                                src="http://localhost/braintech/public/imgs/reactJs.png" alt="">
                                        </td>
                                        <td>
                                            <a href="<?= $GLOBALS['domainPage'] ?>/admin_chapter"
                                                class="course_view-btn">
                                                Xem
                                            </a>
                                        </td>
                                        <td class="text-primary">
                                            <a href="<?= $GLOBALS['domainPage'] ?>/admin_courses/updateCourse"
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
            <div class="col-md-12">
                <div class="card">
                    <div style="display: flex; justify-content: space-between;" class="card-header card-header-primary">
                        <div class="courses-heading">
                            <h4 class="card-title ">Khóa học Back-End</h4>
                            <p class="card-category"> Danh sách các khóa học Back-End</p>
                        </div>
                        <button class="courses-add">
                            <a style="height: 100%; display: flex; align-items: center; width: 100%;"
                                href="<?= $GLOBALS['domainPage'] ?>/admin_courses/addCourse">Thêm mới</a>
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
                                        Tên
                                    </th>
                                    <th width="20%">
                                        Ảnh
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
                                            Xây Dựng Website với ReactJS
                                        </td>
                                        <td>
                                            <img class="course_img"
                                                src="http://localhost/braintech/public/imgs/reactJs.png" alt="">
                                        </td>
                                        <td>
                                            <a href="#" class="course_view-btn">
                                                Xem
                                            </a>
                                        </td>
                                        <td class="text-primary">
                                            <a href="<?= $GLOBALS['domainPage'] ?>/admin_courses/updateCourse"
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
            <div class="col-md-12">
                <div class="card">
                    <div style="display: flex; justify-content: space-between;" class="card-header card-header-primary">
                        <div class="courses-heading">
                            <h4 class="card-title ">Khóa học Pro</h4>
                            <p class="card-category"> Danh sách các khóa học Pro</p>
                        </div>
                        <button class="courses-add">
                            <a style="height: 100%; display: flex; align-items: center; width: 100%;"
                                href="<?= $GLOBALS['domainPage'] ?>/admin_courses/addCourse">Thêm mới</a>
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
                                        Tên
                                    </th>
                                    <th width="20%">
                                        Ảnh
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
                                            Xây Dựng Website với ReactJS
                                        </td>
                                        <td>
                                            <img class="course_img"
                                                src="http://localhost/braintech/public/imgs/reactJs.png" alt="">
                                        </td>
                                        <td>
                                            <a href="#" class="course_view-btn">
                                                Xem
                                            </a>
                                        </td>
                                        <td class="text-primary">
                                            <a href="<?= $GLOBALS['domainPage'] ?>/admin_courses/updateCourse"
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