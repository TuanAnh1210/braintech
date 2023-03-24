<?php ipView("admin.component.header") ?>
<div class="content">
    <div class="container-fluid">
        <div style="max-width: 600px; margin: auto;" class="input-group no-border">
            <input type="text" value="" class="form-control" id="search_ipt" placeholder="Search..." />
            <button type="submit" class="btn btn-default btn-round btn-just-icon">
                <i class="material-icons">search</i>
                <div class="ripple-container"></div>
            </button>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div style="display: flex; justify-content: space-between;" class="card-header card-header-primary">
                        <div class="courses-heading">
                            <h4 class="card-title ">Khóa học: <span><?= $courseName ?></span></h4>
                            <p class="card-category"> Danh sách bài học
                            </p>
                        </div>
                        <button class="courses-add">
                            <a style="height: 100%; display: flex; align-items: center; width: 100%;"
                                href="<?= $GLOBALS['domainPage'] ?>/admin_lesson/addLesson?chapterId=<?= $id_chapter ?>&courseId=<?= $id_course ?>">Thêm
                                bài mới</a>
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
                                        Tên bài học
                                    </th>
                                    <th width="30%">
                                        Nguồn
                                    </th>
                                    <th width="15%">
                                        Quizz
                                    </th>
                                    <th width="20%">
                                        Hành động
                                    </th>
                                </thead>
                                <tbody>


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
                                        ${ele.path_video}
                                        </td>
                                        <td>
                                            <a href="<?= $GLOBALS['domainPage'] ?>/admin_quizz?idLesson=${ele.id}&idChapter=<?= $id_chapter ?>&idCourse=<?= $id_course ?>" class="course_view-btn">
                                                Xem
                                            </a>
                                        </td>
                                        <td class="text-primary">
                                            <a href="${domainPage}/admin_lesson/updateLesson?lessonId=${ele.id}&chapterId=<?= $id_chapter ?>&courseId=<?= $id_course ?>" class=" course_update-btn">
                                                Sửa

                                            </a>
                                            <button onclick="handleDelete(${ele.id}, <?= $id_chapter ?>, <?= $id_course ?>)" style="border:none; color:#fff" class=" course_delete-btn">
                                                Xóa

                                            </button>
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


// handle search 
const search_ipt = document.querySelector('#search_ipt')

const renderSearch = (dataSearch) => {

    const sameArray = JSON.stringify(dataSearch) === JSON.stringify(data);
    console.log(sameArray)
    if (sameArray) {
        render(temp)
    } else {
        document.querySelector('tbody').innerHTML = dataSearch.map((ele, index) => `
            <tr>
                                        <td>
                                            ${++index}
                                        </td>
                                        <td>
                                            ${ele.name}
                                        </td>
                                        <td>
                                        ${ele.path_video}
                                        </td>
                                        <td>
                                            <a href="<?= $GLOBALS['domainPage'] ?>/admin_quizz?idLesson=${ele.id}&idChapter=<?= $id_chapter ?>&idCourse=<?= $id_course ?>" class="course_view-btn">
                                                Xem
                                            </a>
                                        </td>
                                        <td class="text-primary">
                                            <a href="${domainPage}/admin_lesson/updateLesson?lessonId=${ele.id}&chapterId=<?= $id_chapter ?>&courseId=<?= $id_course ?>" class=" course_update-btn">
                                                Sửa

                                            </a>
                                            <button onclick="handleDelete(${ele.id}, <?= $id_chapter ?>, <?= $id_course ?>)" style="border:none; color:#fff" class=" course_delete-btn">
                                                Xóa

                                            </button>
                                        </td>
                                    </tr>
`).join('')
    }


}

search_ipt.onkeyup = () => {
    const valueIpt = search_ipt.value.toLowerCase().normalize('NFD')
        .replace(/[\u0300-\u036f]/g, '')
        .replace(/đ/g, 'd').replace(/Đ/g, 'D')
    const arr = []
    data.forEach(item => {
        const text = item.name.toLowerCase().normalize('NFD')
            .replace(/[\u0300-\u036f]/g, '')
            .replace(/đ/g, 'd').replace(/Đ/g, 'D')

        if (text.indexOf(valueIpt) > -1) {
            arr.push(item)
        }
    })



    renderSearch(arr)

}



// feat: delete lesson
const handleDelete = (id, id_chapter, id_course) => {

    if (confirm("Bạn chắc chắn muốn xóa bài học này !")) {
        window.location.href =
            `${domainPage}/admin_lesson/deleteLesson?lessonId=${id}&chapterId=${id_chapter}&courseId=${id_course}`
    }
}
</script>
<?php ipView("admin.component.footer") ?>