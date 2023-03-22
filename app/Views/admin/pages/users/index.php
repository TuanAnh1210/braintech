<?php ipView("admin.component.header") ?>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form class="form_user" action="" method="post" >
                    <div class="card">
                        <div style="display: flex; justify-content: space-between; align-items: center;" class="card-header card-header-primary">
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

                                <a class="addNewAcc" href="<?= $GLOBALS['domainPage'] ?>/admin_users/addUsers" class="course_view-btn">Tạo mới</a>
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



                                    </tbody>
                                </table>

                                <div class="paginationFe"></div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>


        </div>
    </div>
</div>


<script>
    // handle get data from db and convert arr php to arr js
    const data = <?= json_encode($data) ?>;
    const domainPage = <?= json_encode($GLOBALS['domainPage']) ?>;



    data.forEach(element => {
        for (let i in element) {
            if (!isNaN(Number(i))) {
                delete element[i];
            }
        }
    });





    // handle quantity btn pagination fe courses
    let numberData = 3


    const paginationFe = document.querySelector('.paginationFe')

    for (let i = 0; i < Math.ceil(data.length / numberData); i++) {
        paginationFe.innerHTML += `
        <button class="paginationFe-btn">${i + 1}</button>
    `
    }



    // feat: pagination

    let temp = 0

    const render = (temp) => {
        let target = temp > 0 ? temp * numberData : numberData

        const newData = data.slice(target - numberData, target)

        document.querySelector('tbody').innerHTML = newData.map((ele, index) => `
    <tr>
                                        <td>
                                            ${++index}
                                        </td>
                                        <td>
                                            ${ele.name}
                                        </td>
                                        <td>
                                            <img style="width: 100%; height:70px; display: block"
                                                src="${domainPage}/uploads/${ele.avatar}"
                                                alt="">
                                        </td>
                                        <td>
                                            ${ele.email}
                                        </td>
                                        <td>
                                        ${ele.password}

                                        </td>
                                        <td>
                                        ${ele.phone}

                                        </td>
                                        <td>
                                            ${ele.role == 0 ? "Quản trị" : "Học viên"}
                                        </td>
                                        <td>
                                            <input class="check-user" value="${ele.id}" name="${ele.id}" type="checkbox">
                                        </td>

                                    </tr>
    `).join('')
    }



    render(temp)

    // feat: click paginationFe-btn then pagination

    const btnsFe = document.querySelectorAll('.paginationFe-btn')
    btnsFe[0].classList.add("active")

    for (let i = 0; i < btnsFe.length; i++) {
        btnsFe[i].onclick = () => {
            document.querySelector(".paginationFe-btn.active").classList.remove("active")
            btnsFe[i].classList.add("active")
            render(btnsFe[i].innerText)
        }
    }
    
    const form_user=document.querySelector('.form_user')
    const btn_action=document.querySelector('.btn-action')
    const action_user=document.querySelector('.action_user')

    btn_action.onclick = (e)=>{
        e.preventDefault()
        console.log(action_user.value)
        switch (action_user.value) {
            case 'edit':
                form_user.action="http://localhost/braintech/admin_users/updateUsers"
                form_user.submit()
                break;
            
            default:
                break;
        }
    }
</script>
<?php ipView("admin.component.footer") ?>