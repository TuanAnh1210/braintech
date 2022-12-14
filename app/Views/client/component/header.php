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
                        <img src="http://localhost/braintech/public/imgs/logo.png" alt="" />
                        <p>Brain Tech Edu</p>
                    </div>
                    <ul class="header__nav">
                        <li class="close_nav">
                            <span class="close_icon">
                                <i class="fa-solid fa-rectangle-xmark"></i>
                            </span>
                        </li>
                        <li class="header__item active">
                            <a class="header__link" href="#">Trang chủ</a>
                        </li>
                        <li class="header__item">
                            <a class="header__link" href="#">Khóa học</a>
                        </li>
                        <li class="header__item">
                            <a class="header__link" href="#">Giới thiệu</a>
                        </li>
                        <li class="header__item">
                            <a class="header__link" href="#">Liên hệ</a>
                        </li>
                    </ul>
                    <div class="header__actions">
                        <button class="btn-login">Đăng nhập</button>
                        <button class="btn-regis">Đăng ký</button>
                    </div>

                    <div class="header_bar">
                        <i class="fa-solid fa-bars-staggered"></i>
                    </div>
                </div>
            </div>
        </header>