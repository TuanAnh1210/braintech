<?php ipView("admin.component.header") ?>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div style="display: flex; justify-content: space-between;" class="card-header card-header-primary">
                        <div class="courses-heading">
                            <h4 class="card-title ">Khóa học: <span><?= $course["name"] ?></span></h4>
                            <p class="card-category">Tên bài: <?= $lesson["name"] ?>
                            </p>
                        </div>
                        <button class="courses-add">
                            <a style="height: 100%; display: flex; align-items: center; width: 100%;"
                                href="<?= $GLOBALS['domainPage'] ?>/admin_quizz/addQuizz?idLesson=<?= $lesson["id"] ?>&idChapter=<?= $id_chapter ?>&idCourse=<?= $course["id"] ?>">Thêm
                                quizz mới</a>
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th width="5%">
                                        ID
                                    </th>
                                    <th width="55%">
                                        Câu hỏi
                                    </th>

                                    <th width="20%">
                                        Đáp án
                                    </th>


                                    <th width="20%">
                                        Hành động
                                    </th>
                                </thead>
                                <tbody>
                                    <?php foreach ($quizz as $key => $value) : ?>
                                    <tr>
                                        <td>
                                            <?= ++$key ?>
                                        </td>
                                        <td>
                                            <?= $value["name"] ?>
                                        </td>
                                        <td>
                                            <a href="<?= $GLOBALS["domainPage"] ?>/admin_answer?quizzId=<?= $value["id"] ?>"
                                                class="course_view-btn">
                                                Xem
                                            </a>
                                        </td>

                                        <td class="text-primary">

                                            <a href="<?= $GLOBALS["domainPage"] ?>/admin_quizz/deleteQuizz?idQuizz=<?= $value["id"] ?>&idLesson=<?= $lesson["id"] ?>&idChapter=<?= $id_chapter ?>&idCourse=<?= $course["id"] ?>"
                                                class=" course_delete-btn">
                                                Xóa
                                            </a>
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