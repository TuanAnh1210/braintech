<?php ipView("admin.component.header") ?>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div style="display: flex; justify-content: space-between;" class="card-header card-header-primary">
                        <div class="courses-heading">
                            <h4 class="card-title ">Quản lí bình luận</h4>
                            <p class="card-category"> Thống kê bình luận</p>
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th width="5%">
                                        ID
                                    </th>
                                    <th width="55%">
                                        Bài học
                                    </th>
                                    <th width="20%">
                                        Tổng bình luận
                                    </th>

                                    <th width="20%">
                                        Chi tiết
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
                                            2
                                        </td>
                                        <td>
                                            <a href="<?= $GLOBALS['domainPage'] ?>/admin_comments/detailCmt"
                                                class="course_view-btn">
                                                Xem
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