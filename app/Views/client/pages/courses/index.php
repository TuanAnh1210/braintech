<?php ipView('client.component.header') ?>

<div class="banner">
    <div class="container">
        <div class="row banner__wrapper">
            <div class="col-12 col-md-6 col-lg-6">
                <div class="banner__text">
                    <h3>HÔM NAY BẠN MUỐN HỌC GÌ ?</h3>
                    <p>
                        Các khóa học được thiết kế phù hợp cho cả người mới, nhiều khóa học miễn phí, chất lượng, nội
                        dung dễ hiểu.
                    </p>
                    <button><a href="#test">Học ngay</a></button>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-6">
                <div class="banner__img">
                    <img src="<?= $GLOBALS['domainPage'] ?>/public/imgs/web_developing.gif" alt="" />
                </div>
            </div>
        </div>


    </div>
</div>



<div class="courses__wrapper">
    <div class="container">
        <h1 style="font-weight: 700; font-size: 28px; margin-bottom: 20px;">Khóa học Pro <span
                class="pro__label">Mới</span></h1>
        <div data-course="3" class="row courseWrapper">

        </div>
    </div>
    <div class="courses__category">

    </div>
</div>

<div class="courses__wrapper">
    <div class="container">
        <h1 style="font-weight: 700; font-size: 28px; margin-bottom: 20px;">Khóa học Front-End miễn phí</h1>
        <div data-course="1" class="row courseWrapper" id="test">


        </div>
    </div>

</div>

<div class="courses__wrapper">
    <div class="container">
        <h1 style="font-weight: 700; font-size: 28px; margin-bottom: 20px;">Khóa học Back-End miễn phí</h1>
        <div data-course="2" class="row courseWrapper">

        </div>
    </div>

</div>

<div class="group">
    <div class="container">
        <div style="align-items: center" class="row">
            <div class="col-12 col-md-7 col-lg-7">
                <div class="group__text">
                    <h3>Tham gia cộng đồng học viên BrainTech trên Facebook</h3>
                    <p>
                        Hàng nghìn người khác đang học lộ trình giống như bạn. Hãy
                        tham gia hỏi đáp, chia sẻ và hỗ trợ nhau trong quá trình học
                        nhé.
                    </p>

                    <a href="https://www.facebook.com/groups/f8official">Tham gia nhóm</a>
                </div>
            </div>
            <div class="col-12 col-md-5 col-lg-5">
                <div class="group__img">
                    <img src="<?= $GLOBALS['domainPage'] ?>/public/imgs/group.png" alt="" />
                </div>
            </div>
        </div>
    </div>
</div>


<script>
// handle get data from db and convert arr php to arr js
const courses = <?= json_encode($courses) ?>;

const detail_courses = <?= json_encode($detail_courses) ?>;



courses.forEach(element => {
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



const courseWrapper = document.querySelectorAll(".courseWrapper")

courseWrapper.forEach(item => {

    const data = courses.filter(course => course.cate_id == item.dataset.course)

    item.innerHTML = data.map(ele => `
    <div class="col-12 col-md-6 col-lg-3">
    <a href="<?= $GLOBALS['domainPage'] ?>/courses/detailCourse?courseId=${ele.id}">
                    <div class="courses-newest_item">
                        <img src="${ele.thumb}" alt="" />
                        <h4>${ele.name}</h4>
                        <div class="courses-newest_info">
                            <i class="fa-solid fa-users"></i>
                            <span>${detail_courses.filter(item => item.course_id == ele.id).length}</span>
                            ${ele.price ?  `<div class="price__wrapper">
                                <p class="old__price">${ele.old_price.toLocaleString()}đ</p>
                                <p>${ele.price.toLocaleString()}đ</p>
                            </div>` : `<p>Miễn phí</p>`}
                        </div>
                    </div>
                </a>
                </div>
   `).join("")
})
</script>

<?php ipView('client.component.footer') ?>