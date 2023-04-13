<?php ipView("admin.component.header") ?>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div style="display: flex; justify-content: space-between;" class="card-header card-header-primary">
                        <div class="courses-heading">
                            <h4 class="card-title ">Quản lí bình luận</h4>
                            <p class="card-category">Chi tiết bình luận</p>
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th width="5%">
                                        ID
                                    </th>
                                    <th width="20%">
                                        Nội dung
                                    </th>
                                    <th width="25%">
                                        Tên người bình luận
                                    </th>
                                    <th width="15%">
                                        Ảnh người bình luận
                                    </th>

                                    <th width="25%">
                                        Thời gian
                                    </th>
                                    <th width="10%">
                                        Xóa
                                    </th>
                                </thead>
                                <tbody>
                                    <?php foreach ($data as $key => $value) : ?>
                                    <tr>
                                        <td>
                                            <?= ++$key ?>
                                        </td>
                                        <td>
                                            <?= $value["content"] ?>
                                        </td>
                                        <td>
                                            <?= $value["name"] ?>
                                        </td>
                                        <td>
                                            <img style="width: 100%; " src="<?= $value["avatar"] ?>" alt="">
                                        </td>
                                        <td>
                                            <?= $value["date_cmt"] ?>
                                        </td>
                                        <td>


                                            <span data-idCmt="<?= $value["id"] ?>"
                                                data-idLesson="<?= $value["id_lesson"] ?>" style="color: #fff;"
                                                class="course_delete-btn deleteCmt-js">
                                                Xóa
                                            </span>
                                        </td>

                                    </tr>
                                    <?php endforeach ?>


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>


<script>
const deleteCmt_js = document.querySelectorAll(".deleteCmt-js")

deleteCmt_js.forEach(item => {
    item.onclick = () => {
        const idCmt = item.getAttribute("data-idCmt");
        const idLesson = item.getAttribute("data-idLesson");
        if (confirm("Nếu xóa dữ liệu sẽ không thể khôi phục!")) {
            window.location.href =
                `<?= $GLOBALS["domainPage"] ?>/admin_comments/deleteCmt?idCmt=${idCmt}&idLesson=${idLesson}`
        }
    }
})
</script>
<?php ipView("admin.component.footer") ?>