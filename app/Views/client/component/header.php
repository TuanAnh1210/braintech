<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="../../../../public/css/client/pages/courses/detailCourses.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <link rel="stylesheet" href="<?= $GLOBALS['domainPage'] ?>/public/lib/owl/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?= $GLOBALS['domainPage'] ?>/public/lib/owl/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= gridmap_css() ?>" />
    <link rel="stylesheet" href="<?= grid_css() ?>" />
    <link rel="stylesheet" href="<?= css_file() ?>" />
    <link id="cssFile" rel="stylesheet" href="">

    <link rel="stylesheet" href="<?= css_responsive() ?>" />

    <script>
    const domainPage = <?= json_encode($GLOBALS['domainPage']) ?>;
    const pathPages = window.location.pathname;
    const arrPaths = pathPages.split("/");
    console.log(arrPaths)
    if (arrPaths.length <= 3 && arrPaths[arrPaths.length - 1] != "") {
        document.getElementById("cssFile").href =
            `${domainPage}/public/css/client/pages/${arrPaths[arrPaths.length -1]}/${arrPaths[arrPaths.length -1]}.css`
    } else if (arrPaths.length <= 3 && arrPaths[arrPaths.length - 1] == "") {
        document.getElementById("cssFile").href =
            `${domainPage}/public/css/client/pages/home/home.css`
    } else {
        document.getElementById("cssFile").href =
            `${domainPage}/public/css/client/pages/${arrPaths[arrPaths.length -2]}/${arrPaths[arrPaths.length -1]}.css`
    }
    </script>
</head>

<body>
    <div class="main">
        <header>
            <div class="container">
                <div class="header__wrapper">
                    <div class="header__logo">
                        <a href="<?= $GLOBALS['domainPage'] ?>">
                            <img src="<?= $GLOBALS['domainPage'] ?>/public/imgs/logo.png" alt="" />
                            <p>Brain Tech Edu</p>
                        </a>
                    </div>
                    <ul class="header__nav">
                        <li class="close_nav">
                            <span class="close_icon">
                                <i class="fa-solid fa-rectangle-xmark"></i>
                            </span>
                        </li>
                        <li data-item="" class="header__item">
                            <a class="header__link" href="<?= $GLOBALS['domainPage'] ?>/">Trang chủ</a>
                        </li>
                        <li data-item="courses" class="header__item">
                            <a class="header__link" href="<?= $GLOBALS['domainPage'] ?>/courses">Khóa học</a>
                        </li>
                        <li data-item="about" class="header__item">
                            <a class="header__link" href="<?= $GLOBALS['domainPage'] ?>/home/about">Giới thiệu</a>
                        </li>
                        <li data-item="contact" class="header__item">
                            <a class="header__link" href="<?= $GLOBALS['domainPage'] ?>/home/contact">Liên hệ</a>
                        </li>
                    </ul>
                    <div class="header__actions">
                        <a href="<?= $GLOBALS['domainPage'] ?>/account"><button class="btn-login">Đăng nhập</button></a>
                    </div>

                    <div class="header_bar">
                        <i class="fa-solid fa-bars-staggered"></i>
                    </div>
                </div>
            </div>
        </header>