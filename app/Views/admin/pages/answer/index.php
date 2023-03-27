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


<script>
// handle get data from db and convert arr php to arr js
const answers = <?= json_encode($answers) ?>;


answers.forEach(element => {
    for (let i in element) {
        if (!isNaN(Number(i))) {
            delete element[i];
        }
    }
});

const addNewAcc = document.querySelector(".addNewAcc")
if (answers.length == 3) {
    addNewAcc.classList.add("dis")
}

// handle show answer
const tbody = document.querySelector("tbody")
tbody.innerHTML = answers.map((answer, i) => `
<tr>
                                        <td>
                                            ${++i}
                                        </td>
                                        <td class="answer_content">${answer.name}</td>
                                        <td>
                                         

                                            ${answer.is_correct == 1 ? "true" : "false"}
                                        </td>


                                    </tr>
`).join("")


const answer_content = document.querySelectorAll(".answer_content")

answer_content.forEach(item => {
    item.innerText = item.innerHTML
})
// handle check select

const btn_action = document.querySelector(".btn-action")
const action_user = document.querySelector('.action_user')

btn_action.onclick = () => {
    switch (action_user.value) {
        case "delete":
            if (confirm("Bạn chắc chắn muốn xóa không?")) {
                window.location.href = `<?= $GLOBALS["domainPage"] ?>/admin_answer/deleteAnswer?quizzId=<?= $id ?>`
            }
            break;
        case "edit":
            window.location.href =
                `<?= $GLOBALS["domainPage"] ?>/admin_answer/handleUpdateAnswer?quizzId=<?= $id ?>`
            break
        default:
            break;
    }
}
</script>
<?php ipView("admin.component.footer") ?>