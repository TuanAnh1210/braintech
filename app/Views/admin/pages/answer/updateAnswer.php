<?php
ipView("admin.component.header")
?>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Cập nhật đáp án</h4>
                        <p class="card-category">Thông tin chung</p>
                    </div>
                    <div class="card-body">
                        <form class="formUpdateAnswer" action="" method="POST">
                            <div class="updateFormGroup">

                            </div>



                            <button type="submit" class="updateAnswer btn btn-primary pull-right">Cập nhật</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<script>
const answer = <?= json_encode($answer) ?>;

answer.forEach(element => {
    for (let i in element) {
        if (!isNaN(Number(i))) {
            delete element[i];
        }
    }
});

console.log(answer)

const updateFormGroup = document.querySelector(".updateFormGroup")
updateFormGroup.innerHTML = answer.map((item, index) => `
<div class="row">
                                <input hidden type="text" value="${item.id}"
                                    name="answer_id${index + 1}">
                                <div class="col-md-6">
                                <div class="form-group">
                                <label class="bmd-label-floating">Đáp án ${index + 1}</label>
                                <input class="jsAnswer answer${index + 1}" value=""
                                name="answer${index + 1}" required type="text" class="form-control">
                                <p hidden class="jsTempAnswer">${item.name}</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Đúng/Sai</label>

                                        <select class="role-ipt" name="answer_is_correct${index + 1}" id="">
                                            <option 
                                                ${item.is_correct == 0 && "selected"} 
                                                value="0">
                                                Sai
                                            </option>
                                            <option 
                                                ${item.is_correct == 1 && "selected"} 
                                                value="1">
                                                Đúng
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
`).join("")

// handle inner text answer
const jsAnswer = document.querySelectorAll(".jsAnswer")
const jsTempAnswer = document.querySelectorAll(".jsTempAnswer")

jsAnswer.forEach(item => {
    item.value = item.parentElement.querySelector(".jsTempAnswer").innerHTML
})
</script>

<?php ipView("admin.component.footer") ?>