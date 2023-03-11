<?php ipView("admin.component.header") ?>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div style="display: flex; justify-content: space-between; align-items: center;"
                        class="card-header card-header-primary">
                        <div class="courses-heading">
                            <h4 class="card-title ">Quản lí tài khoản</h4>
                            <p class="card-category">Danh sách tài khoản</p>
                        </div>
                        <div>
                            <select class="action_user">
                                <option value="delete">----Xóa----</option>
                                <option value="edit">----Sửa----</option>
                            </select>

                            <button class="btn-action">Thực hiện</button>

                            <a class="addNewAcc" href="<?= $GLOBALS['domainPage'] ?>/admin_users/addUsers"
                                class="course_view-btn">Tạo mới</a>
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th width="3%">
                                        ID
                                    </th>
                                    <th width="22%">
                                        Tên người dùng
                                    </th>
                                    <th width="10%">
                                        Ảnh
                                    </th>

                                    <th width="25%">
                                        Email
                                    </th>
                                    <th width="10%">
                                        Mật khẩu
                                    </th>
                                    <th width="15%">
                                        Điện thoại
                                    </th>
                                    <th width="10%">
                                        Quyền
                                    </th>
                                    <th width="5%">

                                    </th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            1
                                        </td>
                                        <td>
                                            Nguyễn Tuấn Anh
                                        </td>
                                        <td>
                                            <img style="width: 100%;"
                                                src="https://scontent.fhan14-2.fna.fbcdn.net/v/t39.30808-6/270175878_978095143129488_2029334598596771592_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=VkrnxjPq-OsAX8UpX8W&_nc_ht=scontent.fhan14-2.fna&oh=00_AfAKN5qSvEaaRktouAmF2yQFEhSneac8YW6KqM2mcso4Bw&oe=640CEC17"
                                                alt="">
                                        </td>
                                        <td>
                                            tuananh0852131210@gmail.com
                                        </td>
                                        <td>
                                            0852131210
                                        </td>
                                        <td>
                                            0386520536
                                        </td>
                                        <td>
                                            Quản trị
                                        </td>
                                        <td>
                                            <input class="check-user" type="checkbox">
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