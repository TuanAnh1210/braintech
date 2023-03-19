<?php ipView("client.component.header") ?>

<div class="certificate_wrapper">
    <div class="container">
        <h2 class="cert-title">Nhận chứng chỉ</h2>
        <p class="cert-text">BrainTech ghi nhận sự nỗ lực của bạn! Bằng cách nhận chứng chỉ này, bạn chính thức hoàn
            thành khóa
            học <strong><?= $course["name"] ?></strong>.</p>

        <div class="cert-info">
            <img class="cert-image" src="<?= $GLOBALS["domainPage"] ?>/public/imgs/cert.png" alt="">
            <div class="cert-nameUser"><?= $_SESSION["auth"]["name"] ?></div>
            <div class="cert-nameCourse"><?= $course["name"] ?></div>
        </div>
    </div>
</div>
<?php ipView("client.component.footer") ?>