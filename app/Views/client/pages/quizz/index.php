<?php ipView("client.component.header") ?>

<div class="quizz_wrapper">
    <div class="message__delete">

    </div>
    <!-- QUIZ ONE -->
    <section class="section-1" id="section-1">
        <main>
            <div class="text-container">
                <h4><?= $quizz["name"] ?></h4>
            </div>
            <form>
                <div class="quiz-options">


                </div>
                <button class="btn-submit">Submit</button>
            </form>
        </main>
    </section>

</div>

<script>
const answers = <?= json_encode($answers) ?>;

answers.forEach(element => {
    for (let i in element) {
        if (!isNaN(Number(i))) {
            delete element[i];
        }
    }
});



// handle show full answer
const quiz_options = document.querySelector(".quiz-options")
quiz_options.innerHTML = answers.map((answer, i) => `
<div class="quizz_group">
                        
                        <label data-corr="${answer.is_correct}" class="radio-label" for="one-a">
                            <span class="alphabet">${++i}</span> ${answer.name}
                        </label>
                    </div>
`).join("")

const radio_label = document.querySelectorAll(".radio-label")
radio_label.forEach(item => {
    item.onclick = () => {
        document.querySelector(".radio-label.active") && document.querySelector(".radio-label.active")
            .classList.remove("active")
        item.classList.add("active")
    }
})

const btn = document.querySelector(".btn-submit")
const input_radios = document.querySelectorAll(".input-radio")
btn.onclick = (e) => {
    e.preventDefault()
    const labelActive = document.querySelector(".radio-label.active");
    if (labelActive.getAttribute("data-corr") == 1) {
        const message__delete = document.querySelector(".message__delete")
        message__delete.classList.add("open")

        message__delete.innerHTML = `
        <h2>Câu trả lời chính xác !!</h2>
        <h4>Học bài tiếp theo nhé !</h4>
        <div class="btn__delete-container">
            <button class="yes">Yes</button>
            <button class="no">No</button>

        </div>
        `

        document.querySelector(".no").onclick = () => {
            message__delete.classList.remove("open")

        }

        document.querySelector(".yes").onclick = () => {
            window.location.href =
                `<?= $GLOBALS["domainPage"] ?>/learning?courseId=<?= $id_course ?>&userId=<?= $_SESSION["auth"]["id"] ?>&lessonId=<?= $id_lesson ?>`

        }
    } else {
        const message__delete = document.querySelector(".message__delete")
        message__delete.classList.add("open")
        message__delete.innerHTML = `
        <h2>Câu trả lời chưa chính xác !!</h2>
        <h4>Hãy chọn lại nhé !</h4>
        <div class="btn__delete-container">
            <button class="yes">Yes</button>
        </div>
        `

        document.querySelector(".yes").onclick = () => {
            message__delete.classList.remove("open")

        }
    }

}
</script>
<?php ipView("client.component.footer") ?>