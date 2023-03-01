<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= $GLOBALS['domainPage'] ?>/public/css/client/pages/learning/learningssss.css">
    <link rel="stylesheet" href="<?= $GLOBALS['domainPage'] ?>/public/css/client/pages/learning/responsivess.css">
</head>

<body>
    <div class="main">
        <header>
            <div style="height: 100%;" class="container-fluid">
                <div class="header__wrapper">
                    <div class="header--left">
                        <div class="header__back">
                            <i class="fa-solid fa-chevron-left"></i>
                        </div>
                        <div class="header__logo">
                            <a href="<?= $GLOBALS['domainPage'] ?>">
                                <img src="<?= $GLOBALS['domainPage'] ?>/public/imgs/logo.png" alt="" />
                                <p>Xây Dựng Website với ReactJS</p>
                            </a>
                        </div>
                    </div>
                    <div class="header__actions">
                        <div class="header__progress">
                            <p class="header__progress--txt">Tiến độ</p>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 55%;" aria-valuenow="55"
                                    aria-valuemin="0" aria-valuemax="100">55%</div>
                            </div>
                        </div>
                        <div class="header__cert">

                            <a class="header__cert--link" href="#">
                                <button type="button" class="btn btn-secondary" data-toggle="tooltip"
                                    data-placement="bottom"
                                    title="Hoàn thành hết các bài học bạn sẽ nhận được chứng chỉ">
                                    Nhận chứng chỉ
                                </button>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="content">
            <div class="container-fluid">
                <div class="learning__wrapper">
                    <div class="learning__video">
                        <iframe class="video--link" src="https://www.youtube.com/embed/x0fSBAgBrOQ"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>

                        <div class="comment__wrapper">
                            <div class="commment__option">
                                <button>Bình luận</button>
                                <button>Ghi chú</button>
                            </div>

                            <div class="commentBox">
                                <img class="commentBox--img"
                                    src="https://i.ytimg.com/vi/WAgZshFGxqo/hqdefault.jpg?sqp=-oaymwEcCNACELwBSFTyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLDo8KmtGEIdPByaR0s1eZc5HycUxA"
                                    alt="">


                                <form class="form__comment" method="POST"
                                    action="<?= $GLOBALS["domainPage"] ?>/comment/addCmt">
                                    <!-- <input hidden type="text" value="<?= $_GET['id']  ?>" name="idPrd"> -->
                                    <textarea required class="commentBox--ipt" name="cmt_user" id=""
                                        placeholder="Gửi bình luận của bạn"></textarea>
                                    <button class="send__comment">Gửi bình luận</button>
                                </form>
                            </div>

                            <div class="commentBox noMt">
                                <img class="commentBox--img"
                                    src="https://i.ytimg.com/vi/WAgZshFGxqo/hqdefault.jpg?sqp=-oaymwEcCNACELwBSFTyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLDo8KmtGEIdPByaR0s1eZc5HycUxA"
                                    alt="">

                                <div class="commentBox--right">
                                    <h5>tuan anh <span class="comment__time">12-10-2003</span>
                                    </h5>
                                    <p class="commentBox--text">hay qua di</p>




                                </div>
                            </div>
                            <div class="commentBox noMt">
                                <img class="commentBox--img"
                                    src="https://i.ytimg.com/vi/WAgZshFGxqo/hqdefault.jpg?sqp=-oaymwEcCNACELwBSFTyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLDo8KmtGEIdPByaR0s1eZc5HycUxA"
                                    alt="">

                                <div class="commentBox--right">
                                    <h5>tuan anh <span class="comment__time">12-10-2003</span>
                                    </h5>
                                    <p class="commentBox--text">hay qua di</p>




                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="learning__bar">
                        <h1 class="learning__bar--title">Nội dung khóa học</h1>
                        <div class="learning__chapter">
                            <h3 class="learning__chapter--txt">1. Giới thiệu</h3>
                            <div class="trackItem">
                                <h3 class="trackItem--title">1. ReactJS là gì? Tại sao nên học ReactJS? <span
                                        style="color: #5db85c;">
                                        <i class="fa-solid fa-circle-check">
                                        </i>
                                    </span>
                                </h3>
                                <div class="quizz">
                                    <a class="quizz--item finish" href="#">1</a>
                                    <a class="quizz--item" href="#">2</a>
                                    <a class="quizz--item" href="#">3</a>
                                </div>
                            </div>
                            <div class="trackItem">
                                <h3 class="trackItem--title">1. ReactJS là gì? Tại sao nên học ReactJS?</h3>
                                <div class="quizz">
                                    <a class="quizz--item finish" href="#">1</a>
                                    <a class="quizz--item" href="#">2</a>
                                    <a class="quizz--item" href="#">3</a>
                                </div>
                            </div>
                            <div class="trackItem">
                                <h3 class="trackItem--title">1. ReactJS là gì? Tại sao nên học ReactJS?</h3>
                                <div class="quizz">
                                    <a class="quizz--item finish" href="#">1</a>
                                    <a class="quizz--item" href="#">2</a>
                                    <a class="quizz--item" href="#">3</a>
                                </div>
                            </div>
                            <div class="trackItem">
                                <h3 class="trackItem--title">1. ReactJS là gì? Tại sao nên học ReactJS?</h3>
                                <div class="quizz">
                                    <a class="quizz--item finish" href="#">1</a>
                                    <a class="quizz--item" href="#">2</a>
                                    <a class="quizz--item" href="#">3</a>
                                </div>
                            </div>
                            <div class="trackItem">
                                <h3 class="trackItem--title">1. ReactJS là gì? Tại sao nên học ReactJS?</h3>
                                <div class="quizz">
                                    <a class="quizz--item finish" href="#">1</a>
                                    <a class="quizz--item" href="#">2</a>
                                    <a class="quizz--item" href="#">3</a>
                                </div>
                            </div>
                            <div class="trackItem">
                                <h3 class="trackItem--title">1. ReactJS là gì? Tại sao nên học ReactJS?</h3>
                                <div class="quizz">
                                    <a class="quizz--item finish" href="#">1</a>
                                    <a class="quizz--item" href="#">2</a>
                                    <a class="quizz--item" href="#">3</a>
                                </div>
                            </div>
                            <div class="trackItem">
                                <h3 class="trackItem--title">1. ReactJS là gì? Tại sao nên học ReactJS?</h3>
                                <div class="quizz">
                                    <a class="quizz--item finish" href="#">1</a>
                                    <a class="quizz--item" href="#">2</a>
                                    <a class="quizz--item" href="#">3</a>
                                </div>
                            </div>
                            <div class="trackItem">
                                <h3 class="trackItem--title">1. ReactJS là gì? Tại sao nên học ReactJS?</h3>
                                <div class="quizz">
                                    <a class="quizz--item finish" href="#">1</a>
                                    <a class="quizz--item" href="#">2</a>
                                    <a class="quizz--item" href="#">3</a>
                                </div>
                            </div>

                            <div class="trackItem">
                                <h3 class="trackItem--title">1. ReactJS là gì? Tại sao nên học ReactJS?</h3>
                                <div class="quizz">
                                    <a class="quizz--item finish" href="#">1</a>
                                    <a class="quizz--item" href="#">2</a>
                                    <a class="quizz--item" href="#">3</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="actionBar">
            <div class="actionBtn">
                <button class="pre-lesson">Bài trước</button>
                <button class="next-lesson">Bài kế tiếp</button>
            </div>
            <button class="btn__bar">
                <i class="fa-solid fa-bars"></i>
            </button>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>


    <script>
    const btn__bar = document.querySelector(".btn__bar")
    const learning__bar = document.querySelector(".learning__bar")
    const learning__video = document.querySelector(".learning__video")
    btn__bar.onclick = () => {
        if (screen.width <= 930) {

            if (document.querySelector(".learning__bar.active")) {
                Object.assign(learning__bar.style, {
                    transform: "translateX(120%)",
                });
                learning__bar.classList.remove('active')
            } else {
                Object.assign(learning__bar.style, {
                    transform: "translateX(0%)",
                });
                learning__bar.classList.add('active')
            }





        } else {

            if (document.querySelector(".learning__video.full")) {
                Object.assign(learning__bar.style, {
                    transform: "translateX(0%)",
                });
                learning__video.classList.remove("full")

            } else {
                Object.assign(learning__bar.style, {
                    transform: "translateX(120%)",
                });
                learning__video.classList.add("full")
            }

        }
    }
    </script>
</body>

</html>