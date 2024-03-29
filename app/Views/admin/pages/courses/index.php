<?php ipView("admin.component.header") ?>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div style="display: flex; justify-content: space-between;" class="card-header card-header-primary">
                        <div class="courses-heading">
                            <h4 class="card-title ">Khóa học Front-End</h4>
                            <p class="card-category">Danh sách các khóa học Front-End</p>
                        </div>
                        <button class="courses-add">
                            <a style="height: 100%; display: flex; align-items: center; width: 100%;" href="<?= $GLOBALS['domainPage'] ?>/admin_courses/addCourse?cateId=1">Thêm mới</a>
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
                            <p class="card-category">Danh sách các khóa học Back-End</p>
                        </div>
                        <button class="courses-add">
                            <a style="height: 100%; display: flex; align-items: center; width: 100%;" href="<?= $GLOBALS['domainPage'] ?>/admin_courses/addCourse?cateId=2">Thêm mới</a>
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
                                <tbody class="bodyBe">


                                </tbody>
                            </table>
                            <div class="paginationBe">

                            </div>
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
                            <a style="height: 100%; display: flex; align-items: center; width: 100%;" href="<?= $GLOBALS['domainPage'] ?>/admin_courses/addCourse?cateId=3">Thêm mới</a>
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th width="5%">
                                        ID
                                    </th>
                                    <th width="20%">
                                        Tên
                                    </th>
                                    <th width="20%">
                                        Ảnh
                                    </th>
                                    <th width="15%">
                                        Giá
                                    </th>
                                    <th width="20%">
                                        Chi tiết
                                    </th>

                                    <th width="20%">
                                        Hành động
                                    </th>
                                </thead>
                                <tbody class="bodyPro">


                                </tbody>
                            </table>
                            <div class="paginationPro">

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<script>
    // handle get data from db and convert arr php to arr js
    const courseFe = <?= json_encode($courseFe) ?>;
    const courseBe = <?= json_encode($courseBe) ?>;
    const coursePro = <?= json_encode($coursePro) ?>;
    const domainPage = <?= json_encode($GLOBALS['domainPage']) ?>;


    courseFe.forEach(element => {
        for (let i in element) {
            if (!isNaN(Number(i))) {
                delete element[i];
            }
        }
    });
    courseBe.forEach(element => {
        for (let i in element) {
            if (!isNaN(Number(i))) {
                delete element[i];
            }
        }
    });

    coursePro.forEach(element => {
        for (let i in element) {
            if (!isNaN(Number(i))) {
                delete element[i];
            }
        }
    });


    // handle quantity btn pagination fe courses
    let numberData = 3


    const paginationFe = document.querySelector('.paginationFe')
    const paginationBe = document.querySelector('.paginationBe')
    const paginationPro = document.querySelector('.paginationPro')

    for (let i = 0; i < Math.ceil(courseFe.length / numberData); i++) {
        paginationFe.innerHTML += `
        <button class="paginationFe-btn">${i + 1}</button>
    `
    }

    for (let i = 0; i < Math.ceil(courseBe.length / numberData); i++) {
        paginationBe.innerHTML += `
        <button class="paginationBe-btn">${i + 1}</button>
    `
    }

    for (let i = 0; i < Math.ceil(coursePro.length / numberData); i++) {
        paginationPro.innerHTML += `
        <button class="paginationPro-btn">${i + 1}</button>
    `
    }

    // feat: pagination

    let temp = 0

    const renderFe = (temp) => {
        let target = temp > 0 ? temp * numberData : numberData

        const newData = courseFe.slice(target - numberData, target)

        document.querySelector('.bodyFe').innerHTML = newData.map((ele, index) => `
    <tr>
                                        <td>
                                        ${++index}
                                        </td>
                                        <td>
                                            ${ele.name}
                                        </td>
                                        <td>
                                            <img class="course_img"
                                                src="${ele.thumb}" alt="">
                                        </td>
                                       
                                        <td>
                                            <a href="${domainPage}/admin_chapter?CourseId=${ele.id}"
                                                class="course_view-btn">
                                                Xem
                                            </a>
                                        </td>
                                        <td class="text-primary">
                                            <a href="${domainPage}/admin_courses/updateCourse?courseId=${ele.id}&cateId=1"
                                                class=" course_update-btn">
                                                Sửa

                                            </a>
                                            <button onclick="handleDelete(${ele.id})" style="border:none; color:#fff" class=" course_delete-btn">
                                                Xóa

                                            </button>
                                        </td>
                                    </tr>
    `).join('')
    }

    const renderBe = (temp) => {
        let target = temp > 0 ? temp * numberData : numberData

        const newData = courseBe.slice(target - numberData, target)

        document.querySelector('.bodyBe').innerHTML = newData.map((ele, index) => `
    <tr>
                                        <td>
                                        ${++index}
                                        </td>
                                        <td>
                                            ${ele.name}
                                        </td>
                                        <td>
                                            <img class="course_img"
                                                src="${ele.thumb}" alt="">
                                        </td>
                                        <td>
                                        <a href="${domainPage}/admin_chapter?CourseId=${ele.id}"
                                                class="course_view-btn">
                                                Xem
                                            </a>
                                        </td>
                                        <td class="text-primary">
                                        <a href="${domainPage}/admin_courses/updateCourse?courseId=${ele.id}&cateId=2"
                                                class=" course_update-btn">
                                                Sửa

                                            </a>
                                            <button onclick="handleDelete(${ele.id})" style="border:none; color:#fff" class=" course_delete-btn">
                                                Xóa

                                            </button>
                                        </td>
                                    </tr>
    `).join('')
    }

    const renderPro = (temp) => {
        let target = temp > 0 ? temp * numberData : numberData

        const newData = coursePro.slice(target - numberData, target)

        document.querySelector('.bodyPro').innerHTML = newData.map((ele, index) => `
    <tr>
                                        <td>
                                        ${++index}
                                        </td>
                                        <td>
                                            ${ele.name}
                                        </td>
                                        <td>
                                            <img class="course_img"
                                                src="${ele.thumb}" alt="">
                                        </td>
                                        <td>
                                            ${ele.price.toLocaleString()}
                                        </td>
                                        <td>
                                        <a href="${domainPage}/admin_chapter?CourseId=${ele.id}"
                                                class="course_view-btn">
                                                Xem
                                            </a>
                                        </td>
                                        <td class="text-primary">
                                        <a href="${domainPage}/admin_courses/updateCourse?courseId=${ele.id}&cateId=3"
                                                class=" course_update-btn">
                                                Sửa

                                            </a>
                                            <button onclick="handleDelete(${ele.id})" style="border:none; color:#fff" class=" course_delete-btn">
                                                Xóa

                                            </button>
                                        </td>
                                    </tr>
    `).join('')
    }



    renderFe(temp)
    renderBe(temp)
    renderPro(temp)

    // feat: click paginationFe-btn then pagination

    const btnsFe = document.querySelectorAll('.paginationFe-btn')
    btnsFe[0].classList.add("active")

    for (let i = 0; i < btnsFe.length; i++) {
        btnsFe[i].onclick = () => {
            document.querySelector(".paginationFe-btn.active").classList.remove("active")
            btnsFe[i].classList.add("active")
            renderFe(btnsFe[i].innerText)
        }
    }

    const btnsBe = document.querySelectorAll('.paginationBe-btn')
    btnsBe[0].classList.add("active")
    for (let i = 0; i < btnsBe.length; i++) {
        btnsBe[i].onclick = () => {
            document.querySelector(".paginationBe-btn.active").classList.remove("active")
            btnsBe[i].classList.add("active")
            renderBe(btnsBe[i].innerText)
        }
    }

    const btnsPro = document.querySelectorAll('.paginationPro-btn')
    btnsPro[0].classList.add("active")
    for (let i = 0; i < btnsPro.length; i++) {
        btnsPro[i].onclick = () => {
            document.querySelector(".paginationPro-btn.active").classList.remove("active")
            btnsPro[i].classList.add("active")
            renderPro(btnsPro[i].innerText)
        }
    }

    // feat: delete course
    const handleDelete = (id_course) => {
        if (confirm("Bạn chắc chắn muốn xóa khóa học này!")) {
            window.location.href = `${domainPage}/admin_courses/deleteCourse?courseId=${id_course}`
        }
    }
</script>
<?php ipView("admin.component.footer") ?>