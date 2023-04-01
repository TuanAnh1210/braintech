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
        <h1 style="font-weight: 700; font-size: 28px; margin-bottom: 20px;">Khóa học Pro <span class="pro__label">Mới</span></h1>
        <div class="row">
            <?php foreach ($coursesPro as $key => $value) : ?>


                <div class="col-12 col-md-6 col-lg-3">
                    <a href="<?= $GLOBALS["domainPage"] ?>/courses/detailCourse?courseId=<?= $value["id"] ?>">
                        <div class="courses-newest_item">
                            <div class="course__pro">
                                <img src="<?= $GLOBALS['domainPage'] ?>/uploads/<?= $value["thumb"] ?>" alt="" />
                                <span class="course__pro-icon">
                                    <i class="fa-solid fa-crown"></i>
                                </span>
                            </div>
                            <h4><?= $value["name"] ?></h4>
                            <div class="courses-newest_info">
                                <i class="fa-solid fa-users"></i>
                                <span>123</span>
                                <div class="price__wrapper">
                                    <p class="old__price"><?= number_format($value['old_price'], 0, "", ".") ?>đđ</p>
                                    <p><?= number_format($value['price'], 0, "", ".") ?>đ</p>
                                </div>
                            </div>
                        </div>
                    </a>

                </div>

            <?php endforeach ?>
        </div>
    </div>
    <div class="courses__category">

    </div>
</div>

<div class="courses__wrapper">
    <div class="container">
        <h1 style="font-weight: 700; font-size: 28px; margin-bottom: 20px;">Khóa học Front-End miễn phí</h1>
        <div class="row" id="test">

            <?php foreach ($coursesFe as $key => $value) : ?>
                <div class="col-12 col-md-6 col-lg-3">
                    <a href="<?= $GLOBALS["domainPage"] ?>/courses/detailCourse?courseId=<?= $value["id"] ?>">
                        <div class="courses-newest_item">
                            <img src="<?= $GLOBALS['domainPage'] ?>/uploads/<?= $value['thumb'] ?>" alt="" />
                            <h4><?= $value['name'] ?></h4>
                            <div class="courses-newest_info">
                                <i class="fa-solid fa-users"></i>
                                <span>123</span>
                                <p>Miễn phí</p>
                            </div>
                        </div>
                    </a>
                </div>


            <?php endforeach ?>
        </div>
    </div>

</div>

<div class="courses__wrapper">
    <div class="container">
        <h1 style="font-weight: 700; font-size: 28px; margin-bottom: 20px;">Khóa học Back-End miễn phí</h1>
        <div class="row">
            <?php foreach ($coursesBe as $key => $value) : ?>
                <div class="col-12 col-md-6 col-lg-3">
                    <a href="<?= $GLOBALS["domainPage"] ?>/courses/detailCourse?courseId=<?= $value["id"] ?>">
                        <div class="courses-newest_item">
                            <img src="<?= $GLOBALS['domainPage'] ?>/uploads/<?= $value['thumb'] ?>" alt="" />
                            <h4><?= $value['name'] ?></h4>
                            <div class="courses-newest_info">
                                <i class="fa-solid fa-users"></i>
                                <span>123</span>
                                <p>Miễn phí</p>
                            </div>
                        </div>
                    </a>
                </div>


            <?php endforeach ?>
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

<?php ipView('client.component.footer') ?>