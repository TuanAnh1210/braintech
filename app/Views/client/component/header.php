<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <link rel="stylesheet" href="http://localhost/braintech/public/lib/owl/owl.theme.default.min.css">
    <link rel="stylesheet" href="http://localhost/braintech/public/lib/owl/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= gridmap_css() ?>" />
    <link rel="stylesheet" href="<?= grid_css() ?>" />
    <link rel="stylesheet" href="<?= css_file() ?>" />
    <link rel="stylesheet" href="<?= css_responsive() ?>" />
</head>

<body>
    <div class="main">
        <header>
            <div class="container">
                <div class="header__wrapper">
                    <div class="header__logo">
                        <a href="http://localhost/braintech">
                            <img src="http://localhost/braintech/public/imgs/logo.png" alt="" />
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
                            <a class="header__link" href="http://localhost/braintech/">Trang chủ</a>
                        </li>
                        <li data-item="khoa-hoc" class="header__item">
                            <a class="header__link" href="http://localhost/braintech/khoa-hoc">Khóa học</a>
                        </li>
                        <li data-item="gioi-thieu" class="header__item">
                            <a class="header__link" href="http://localhost/braintech/gioi-thieu">Giới thiệu</a>
                        </li>
                        <li data-item="lien-he" class="header__item">
                            <a class="header__link" href="http://localhost/braintech/lien-he">Liên hệ</a>
                        </li>
                    </ul>
                    <div class="header__actions">
                        <a href="http://localhost/braintech/account"><button class="btn-login">Đăng nhập</button></a>
                    </div>

                    <div class="header_bar">
                        <i class="fa-solid fa-bars-staggered"></i>
                    </div>
                </div>
            </div>
        </header>