<?php ipView("admin.component.header") ?>
<div class="content">
    <div class="container-fluid">
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
                            <a style="height: 100%; display: flex; align-items: center; width: 100%;" href="<?= $GLOBALS['domainPage'] ?>/admin_lesson/addLesson?chapterId=<?= $id_chapter ?>&courseId=<?= $id_course ?>">Thêm
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
                                            <a href="<?= $GLOBALS['domainPage'] ?>/admin_lesson" class="course_view-btn">
                                                Xem
                                            </a>
                                        </td>
                                        <td class="text-primary">
                                            <a href="${domainPage}/admin_lesson/updateLesson?lessonId=${ele.id}&chapterId=<?= $id_chapter ?>&courseId=<?= $id_course ?>" class=" course_update-btn">
                                                Sửa

                                            </a>
                                            <a href="#" class=" course_delete-btn">
                                                Xóa

                                            </a>
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
</script>
<?php ipView("admin.component.footer") ?>