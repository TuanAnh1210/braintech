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
                                    <th width="45%">
                                        Nội dung
                                    </th>
                                    <th width="15%">
                                        Người bình luận
                                    </th>

                                    <th width="25%">
                                        Thời gian
                                    </th>
                                    <th width="10%">
                                        Xóa
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
                                            <img style="width: 100%;"
                                                src="https://scontent.fhan14-2.fna.fbcdn.net/v/t39.30808-6/270175878_978095143129488_2029334598596771592_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=VkrnxjPq-OsAX8UpX8W&_nc_ht=scontent.fhan14-2.fna&oh=00_AfAKN5qSvEaaRktouAmF2yQFEhSneac8YW6KqM2mcso4Bw&oe=640CEC17"
                                                alt="">
                                        </td>
                                        <td>
                                            2
                                        </td>
                                        <td>
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