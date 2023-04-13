<?php ipView("admin.component.header") ?>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div style="display: flex; justify-content: space-between;" class="card-header card-header-primary">

                        <div class="courses-heading">
                            <h4 class="card-title ">Khóa học Front-End</h4>
                            <p class="card-category"> Thống kê</p>
                        </div>

                        <button class="courses-add">
                            <a style="height: 100%; display: flex; align-items: center; width: 100%;"
                                href="<?= $GLOBALS['domainPage'] ?>/admin_statistical/chart?course_cate=1">Biểu đồ</a>
                        </button>
                        <!-- <div class="filter-wrapper">
                            <p class="filter-icon"><i class="material-icons">filter_alt</i>Sắp xếp</p>
                            <ul class="filter-sub">
                                <li data-filter="learner" class="filter-item fe-filter">Nhiều học viên nhất</li>
                                <li data-filter="chapter" class="filter-item fe-filter">Nhiều chương nhất</li>
                                <li data-filter="lesson" class="filter-item fe-filter">Nhiều bài học nhất</li>
                            </ul>
                        </div> -->

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th width="5%">
                                        ID
                                    </th>
                                    <th width="30%">
                                        Tên khóa học
                                    </th>
                                    <th width="20%">
                                        Ảnh
                                    </th>
                                    <th width="15%">
                                        Chương học
                                    </th>
                                    <th width="15%">
                                        Bài học
                                    </th>
                                    <th width="15%">
                                        Học viên
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
                            <p class="card-category"> Thống kê</p>
                        </div>
                        <button class="courses-add">
                            <a style="height: 100%; display: flex; align-items: center; width: 100%;"
                                href="<?= $GLOBALS['domainPage'] ?>/admin_statistical/chart?course_cate=2">Biểu đồ</a>
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
                                        Tên khóa học
                                    </th>
                                    <th width="20%">
                                        Ảnh
                                    </th>
                                    <th width="15%">
                                        Chương học
                                    </th>
                                    <th width="15%">
                                        Bài học
                                    </th>
                                    <th width="15%">
                                        Học viên
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
                            <p class="card-category"> Thống kê</p>
                        </div>
                        <button class="courses-add">
                            <a style="height: 100%; display: flex; align-items: center; width: 100%;"
                                href="<?= $GLOBALS['domainPage'] ?>/admin_statistical/chart?course_cate=3">Biểu đồ</a>
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th width="5%">
                                        ID
                                    </th>
                                    <th width="25%">
                                        Tên khóa học
                                    </th>
                                    <th width="12%">
                                        Giá
                                    </th>
                                    <th width="20%">
                                        Ảnh
                                    </th>
                                    <th width="13%">
                                        Chương học
                                    </th>
                                    <th width="12%">
                                        Bài học
                                    </th>
                                    <th width="13%">
                                        Học viên
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
const chapters = <?= json_encode($chapters) ?>;
const detail_courses = <?= json_encode($detail_courses) ?>;
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

chapters.forEach(element => {
    for (let i in element) {
        if (!isNaN(Number(i))) {
            delete element[i];
        }
    }
});


detail_courses.forEach(element => {
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

// feat: pagination

let temp = 0

const renderFe = (temp, arr) => {
    let target = temp > 0 ? temp * numberData : numberData

    const newData = arr.slice(target - numberData, target)

    document.querySelector('.bodyFe').innerHTML = newData.map((course, index) => `
    <tr>
                                        <td>
                                        ${index + 1}
                                        </td>
                                        <td>
                                        ${course.name}
                                        </td>
                                        <td>
                                         <img class="course_img"
                                                src="${course.thumb}" alt="">
                                        </td>
                                        <td>
                                            ${chapters.filter(item => item.courses_id == course.id).length} chương
                                        </td>
                                        <td>
                                        ${chapters.filter(item => item.courses_id == course.id).reduce((pre, cur) => pre + cur.totalLesson, 0)} bài
                                        </td>
                                        <td>
                                        ${detail_courses.filter(item => item.course_id == course.id).length} học viên
                                        </td>
                                    </tr>
    `).join('')
}

const renderBe = (temp, arr) => {
    let target = temp > 0 ? temp * numberData : numberData

    const newData = arr.slice(target - numberData, target)

    document.querySelector('.bodyBe').innerHTML = newData.map((course, index) => `
    <tr>
                                        <td>
                                        ${index + 1}
                                        </td>
                                        <td>
                                        ${course.name}
                                        </td>
                                        <td>
                                         <img class="course_img"
                                                src="${course.thumb}" alt="">
                                        </td>
                                        <td>
                                            ${chapters.filter(item => item.courses_id == course.id).length} chương
                                        </td>
                                        <td>
                                        ${chapters.filter(item => item.courses_id == course.id).reduce((pre, cur) => pre + cur.totalLesson, 0)} bài
                                        </td>
                                        <td>
                                        ${detail_courses.filter(item => item.course_id == course.id).length} học viên
                                        </td>
                                    </tr>
    `).join('')
}


const renderPro = (temp, arr) => {
    let target = temp > 0 ? temp * numberData : numberData

    const newData = arr.slice(target - numberData, target)

    document.querySelector('.bodyPro').innerHTML = newData.map((course, index) => `
    <tr>
                                        <td>
                                        ${index + 1}
                                        </td>
                                        <td>
                                        ${course.name}
                                        </td>
                                        <td>
                                        ${course.price.toLocaleString()}đ
                                        </td>
                                        <td>
                                         <img class="course_img"
                                                src="${course.thumb}" alt="">
                                        </td>
                                        <td>
                                            ${chapters.filter(item => item.courses_id == course.id).length} chương
                                        </td>
                                        <td>
                                        ${chapters.filter(item => item.courses_id == course.id).reduce((pre, cur) => pre + cur.totalLesson, 0)} bài
                                        </td>
                                        <td>
                                        ${detail_courses.filter(item => item.course_id == course.id).length} học viên
                                        </td>
                                    </tr>
    `).join('')
}

renderFe(temp, courseFe)
renderBe(temp, courseBe)
renderPro(temp, coursePro)

// feat: click paginationFe-btn then pagination

const btnsFe = document.querySelectorAll('.paginationFe-btn')
btnsFe[0].classList.add("active")

for (let i = 0; i < btnsFe.length; i++) {
    btnsFe[i].onclick = () => {
        document.querySelector(".paginationFe-btn.active").classList.remove("active")
        btnsFe[i].classList.add("active")
        renderFe(btnsFe[i].innerText, courseFe)
    }
}

const btnsBe = document.querySelectorAll('.paginationBe-btn')
btnsBe[0].classList.add("active")
for (let i = 0; i < btnsBe.length; i++) {
    btnsBe[i].onclick = () => {
        document.querySelector(".paginationBe-btn.active").classList.remove("active")
        btnsBe[i].classList.add("active")
        renderBe(btnsBe[i].innerText, courseBe)
    }
}
</script>
<?php ipView("admin.component.footer") ?>