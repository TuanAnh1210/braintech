<?php ipView("admin.component.header") ?>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div style="display: flex; justify-content: space-between;" class="card-header card-header-primary">
                        <div class="courses-heading">
                            <h4 class="card-title ">Danh sách đáp án</h4>
                            <p class="card-category">quizz
                            </p>
                        </div>
                        <div>
                            <select class="action_user">
                                <option value="delete">----Xóa----</option>
                                <option value="edit">----Sửa----</option>
                            </select>

                            <button class="btn-action">Thực hiện</button>

                            <a class="addNewAcc"
                                href="<?= $GLOBALS['domainPage'] ?>/admin_answer/addAnswer?quizzId=<?= $id ?>"
                                class="course_view-btn">Tạo mới</a>
                        </div>


                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th width="20%">
                                        ID
                                    </th>
                                    <th width="55%">
                                        Đáp án
                                    </th>

                                    <th width="25%">

                                    </th>



                                </thead>
                                <tbody>
                                    <?php foreach ($answers as $key => $value) : ?>
                                    <tr>
                                        <td>
                                            <?= ++$key ?>
                                        </td>
                                        <td>
                                            <?= $value["name"] ?>

                                        </td>
                                        <td>
                                            <?php
                                                if ($value["is_correct"] == 1) {
                                                    echo "true";
                                                } else {
                                                    echo "false";
                                                }
                                                ?>
                                        </td>


                                    </tr>
                                    <?php endforeach ?>

                                </tbody>
                            </table>

                            <div class="paginationFe"></div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>

<?php ipView("admin.component.footer") ?>