<?php ipView("client.component.header") ?>

<div class="certificate_wrapper">
    <div class="container">
        <h2 class="cert-title">Nhận chứng chỉ</h2>
        <p class="cert-text">Bạn chưa hoàn thành khóa học <strong><?= $course["name"] ?></strong>. Hãy hoàn thành tất cả
            bài học và nhận chứng chỉ nhé !</p>

        <div style="opacity: .2;" class="cert-info">
            <img class="cert-image" src="<?= $GLOBALS["domainPage"] ?>/public/imgs/cert.png" alt="">
            <div class="cert-nameUser"><?= $_SESSION["auth"]["name"] ?></div>
            <div class="cert-nameCourse"><?= $course["name"] ?></div>
        </div>
    </div>
</div>
<?php ipView("client.component.footer") ?>