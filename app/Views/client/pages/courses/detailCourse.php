<?php ipView("client.component.header") ?>
<div class="detail-course">

    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div>
                    <h2 class="course_name"><?= $course[0]["courseName"] ?></h2>
                    <p class="course_text"><?= $course[0]["description"] ?></p>
                    <div class="learning__bar">
                        <h1 class="learning__bar--title">Nội dung khóa học</h1>
                        <div class="course_topic">

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="course_img_wrapper">
                    <img class="course_img" src="<?= $GLOBALS["domainPage"] ?>/uploads/<?= $course[0]["thumb"] ?>"
                        alt="">

                    <?php if ($course[0]['price'] == 0) : ?>
                    <h4 class="course_free">Miễn phí</h4>
                    <div class="firstLessonBtn">
                    </div>
                    <?php endif ?>

                    <?php if (!$isBought && $course[0]['price'] > 0) : ?>
                    <div style="margin: 12px 0 24px 0;" class="price__wrapper">
                        <p class="old__price"><?= number_format($course[0]['old_price'], 0, "", ".") ?>đđ</p>
                        <p class="price_cur"><?= number_format($course[0]['price'], 0, "", ".") ?>đ</p>
                    </div>
                    <a
                        href="<?= $GLOBALS["domainPage"] ?>/courses/buyCourse?courseId=<?= $course[0]["courses_id"] ?>&userId=<?= $_SESSION["auth"]["id"] ?>"><button
                            class="course_btn-learn">Mua
                            ngay</button></a>

                    <?php endif ?>

                    <?php if ($isBought) : ?>
                    <h4 class="course_free">Đã mua</h4>
                    <div class="firstLessonBtn">
                    </div>

                    <?php endif ?>





                </div>
            </div>

        </div>
    </div>
</div>


<script>
// handle get data from db and convert arr php to arr js
// const domainPage = <?= json_encode($GLOBALS['domainPage']) ?>;
const courses = <?= json_encode($course) ?>;
const lesson_list = <?= json_encode($lesson_list) ?>;





courses.forEach(element => {
    for (let i in element) {
        if (!isNaN(Number(i))) {
            delete element[i];
        }
    }
});



lesson_list.forEach(element => {
    for (let i in element) {
        if (!isNaN(Number(i))) {
            delete element[i];
        }
    }
});


// handle get firstLesson in course

const firstLesson = lesson_list.filter(item => item.course_chapter_id == courses[0].id)

const firstLessonBtn = document.querySelector(".firstLessonBtn")
if (firstLessonBtn) {
    firstLessonBtn.innerHTML = `
    <a href="<?= $GLOBALS["domainPage"] ?>/learning?courseId=<?= $course[0]["courses_id"] ?>&userId=<?= $_SESSION["auth"]["id"] ?>&lessonId=${firstLesson[0].id}">
                        <button class="course_btn-learn">Học
                            ngay
                        </button>
                    </a>
    `

}

// handle show full lesson
const course_topic = document.querySelector(".course_topic")

course_topic.innerHTML = courses.map((course, index) => `
    <div class="learning__chapter">
                                    <h3 class="learning__chapter--txt">${++index}.${course.name}</h3>

                                 
                                    ${lesson_list.filter(lesson => lesson.course_chapter_id == course.id).map((item, i) => `                                        
                                        <div class="trackItem">
                                        <h3 class="trackItem--title">${index}.${++i} ${item.name} <span style="color: #f76b1c;">
                                        <i class="fa-solid fa-graduation-cap"></i>
                                            </span>
                                        </h3>
                                       
                                    </div>
                                        `).join("")}
                                   


                                </div>
    `).join("")
</script>
<?php ipView("client.component.footer") ?>