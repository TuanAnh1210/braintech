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
    <link rel="stylesheet" href="<?= $GLOBALS['domainPage'] ?>/public/css/client/pages/learning/learning.css">
    <link rel="stylesheet" href="<?= $GLOBALS['domainPage'] ?>/public/css/client/pages/learning/responsive.css">
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
                                <p><?= $curCourse["name"] ?></p>
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
                        <div id="player"></div>
                        <!-- <iframe id="video-player" class="video--link" src="<?= $curLesson["path_video"] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> -->

                        <div class="comment__wrapper">
                            <div class="commment__option">
                                <button class="commment__option-btn active">Bình luận</button>
                                <button class="note__option-btn">Ghi chú</button>
                            </div>

                            <div class="commentZone open">
                                <div class="commentBox">
                                    <img class="commentBox--img"
                                        src="<?= $GLOBALS["domainPage"] ?>/uploads/<?= $_SESSION["auth"]["avatar"] ?>"
                                        alt="">


                                    <form class="form__comment" method="POST"
                                        action="<?= $GLOBALS["domainPage"] ?>/learning/addNewCmt">
                                        <!-- <input hidden type="text" value="<?= $_GET['id']  ?>" name="idPrd"> -->
                                        <input hidden type="text" name="cmt_idUser"
                                            value="<?= $_SESSION["auth"]["id"] ?>">
                                        <input hidden type="text" name="cmt_idLesson" value="<?= $id_lesson ?>">
                                        <input hidden type="text" name="cmt_idCourse" value="<?= $id_course ?>">
                                        <textarea required class="commentBox--ipt" name="cmt_content" id=""
                                            placeholder="Gửi bình luận của bạn"></textarea>
                                        <button class="send__comment">Gửi bình luận</button>
                                    </form>
                                </div>

                                <div class="comment_wrapper-content">
                                    <?php foreach ($comments as $key => $value) : ?>
                                    <div class="commentBox noMt">
                                        <img class="commentBox--img"
                                            src="<?= $GLOBALS["domainPage"] ?>/uploads/<?= $value["avatar"] ?>" alt="">

                                        <div class="commentBox--right">
                                            <h5><?= $value["name"] ?> <span
                                                    class="comment__time"><?= $value["date_cmt"] ?></span>
                                            </h5>
                                            <p class="commentBox--text"><?= $value["content"] ?></p>
                                            <form class="update_cmt_form"
                                                action="<?= $GLOBALS["domainPage"] ?>/learning/updateCmt" method="POST">
                                                <input hidden type="text" name="cmt_idUser"
                                                    value="<?= $_SESSION["auth"]["id"] ?>">
                                                <input hidden type="text" name="cmt_idLesson" value="<?= $id_lesson ?>">
                                                <input hidden type="text" name="cmt_idCourse" value="<?= $id_course ?>">
                                                <input hidden type="text" name="cmt_idCmt" value="<?= $value["id"] ?>">
                                                <input class="contentUpdateIpt" type="text"
                                                    value="<?= $value["content"] ?>" name="contentUpdateIpt">
                                                <button>Cập nhật</button>
                                            </form>
                                            <div <?php
                                                        if ($value["id_user"] != $_SESSION['auth']['id']) {
                                                            echo "hidden";
                                                        }
                                                        ?> class="comments-options">
                                                <i class="fa-solid fa-ellipsis"></i>
                                                <div class="options-sub">
                                                    <p class="btn_option-cmt updateCmt-btn">Sửa&emsp;<i
                                                            class="fa-solid fa-pen"></i>
                                                    </p>

                                                    <p data-idCourse="<?= $id_course ?>"
                                                        data-idLesson="<?= $id_lesson ?>"
                                                        data-idCmt="<?= $value["id"] ?>"
                                                        class="btn_option-cmt deleteCmt-btn">Xóa&emsp;<i
                                                            class="fa-solid fa-trash"></i>
                                                    </p>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach ?>

                                </div>
                            </div>

                            <div class="noteZone">
                                <form class="noteForm" action="<?= $GLOBALS["domainPage"] ?>/learning/AddNewNote"
                                    method="POST">
                                    <h2 class="note--title">Thêm ghi chú tại <span class="note--time">00:00</span></h2>
                                    <input hidden type="text" value="<?= $id_lesson ?>" name="id_lesson">
                                    <input hidden type="text" value="<?= $id_course ?>" name="id_course">
                                    <input hidden type="text" value="<?= $_SESSION["auth"]['id'] ?>" name="id_user">
                                    <div class="form__group">
                                        <label for="">Nội dung ghi chú:</label>
                                        <textarea required placeholder="Nội dung ghi chú..." class="note--ipt"
                                            name="note_content" id="" cols="30" rows="10"></textarea>
                                    </div>

                                    <button class="send__comment">Thêm ghi chú</button>
                                </form>
                            </div>
                        </div>


                    </div>
                    <div class="learning__bar">
                        <h1 class="learning__bar--title">Nội dung khóa học</h1>
                        <div class="course_topic">
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="actionBar">
            <button class="note-storage">
                <i class="fa-solid fa-note-sticky"></i>
                <span>Ghi chú</span>

            </button>
            <div class="actionBtn">
                <button class="pre-lesson">Bài trước</button>
                <button class="next-lesson">Bài kế tiếp</button>
            </div>
            <button class="btn__bar">
                <i class="fa-solid fa-bars"></i>
            </button>
        </div>

        <div class="modal">
            <div class="note_wrapper">
                <div style="display: flex; justify-content: end;"><span class="note-close"><i
                            class="fa-solid fa-xmark"></i></span></div>
                <div class="note_heading">
                    <h2>Ghi chú của tôi</h2>
                </div>
                <div class="note_list">
                    <?php foreach ($notes as $key => $value) : ?>
                    <div class="note_item">
                        <div class="note_item-heading">
                            <p>Bài: <?= $value["name"] ?></p>
                        </div>
                        <div class="note_item-content">

                            <p><?= $value["content"] ?></p>
                        </div>
                    </div>

                    <?php endforeach ?>

                </div>
            </div>

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


    // feat: show hide cmt and note

    const commment__option_btn = document.querySelector(".commment__option-btn")
    const note__option_btn = document.querySelector(".note__option-btn")
    const commentZone = document.querySelector(".commentZone")
    const noteZone = document.querySelector(".noteZone")


    note__option_btn.onclick = () => {
        note__option_btn.classList.add("active")
        commment__option_btn.classList.remove("active")

        commentZone.classList.remove("open")
        noteZone.classList.add("open")
    }

    commment__option_btn.onclick = () => {
        note__option_btn.classList.remove("active")
        commment__option_btn.classList.add("active")

        commentZone.classList.add("open")
        noteZone.classList.remove("open")
    };

    // handle show course
    const courses = <?= json_encode($course) ?>;
    const comments = <?= json_encode($comments) ?>;

    const quizzs = <?= json_encode($quizzs) ?>;

    const lesson_list = <?= json_encode($lesson_list) ?>;

    const curLesson = <?= json_encode($curLesson) ?>;

    const finishLesson = <?= json_encode($finishLesson) ?>;



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

    comments.forEach(element => {
        for (let i in element) {
            if (!isNaN(Number(i))) {
                delete element[i];
            }
        }
    });

    finishLesson.forEach(element => {
        for (let i in element) {
            if (!isNaN(Number(i))) {
                delete element[i];
            }
        }
    });


    console.log(finishLesson)

    const course_topic = document.querySelector(".course_topic")

    course_topic.innerHTML = courses.map((course, index) => `
    <div class="learning__chapter">
                                    <h3 class="learning__chapter--txt">${++index}.${course.name}</h3>

                                 
                                    ${lesson_list.filter(lesson => lesson.course_chapter_id == course.id).map((item, i) => `
                                        <a href="<?= $GLOBALS["domainPage"] ?>/learning?courseId=1&userId=1&lessonId=${item.id}">
                                        <div data-idLesson="${item.id}" class="trackItem ${finishLesson.some(check => check.id_lesson == item.id) ? "learned" : ""}">
                                        <h3 class="trackItem--title">${index}.${++i} ${item.name} <span style="color: #5db85c;">
                                        ${finishLesson.some(check => check.id_lesson == item.id) ? `<i class="fa-solid fa-circle-check">
                                                </i>` : `<i style="color:#9d9d9d" class="fa-solid fa-lock"></i>`}
                                                
                                            </span>
                                        </h3>
                                        <div class="quizz">
                        ${quizzs.filter(quizz => quizz.lesson_id == item.id).map((value, i) => `
                            <a class="quizz--item finish" href="<?= $GLOBALS["domainPage"] ?>/quizz?quizzId=${value.id}">Bài tập</a>
                            
                            `).join("")}
                                                
                                                
                                          
                                        </div>
                                    </div>
                                    </a>
                                        `).join("")}
                                   


                                </div>
    `).join("");


    const trackItems = document.querySelectorAll(".trackItem")

    trackItems.forEach(item => {
        if (item.getAttribute("data-idLesson") == <?= $id_lesson ?>) {
            item.classList.add("active")
        }
    })


    // comment_wrapper-content
    comment_wrapper_content = document.querySelector(".comment_wrapper-content");
    if (comments.length <= 0) {
        comment_wrapper_content.innerHTML = `<h4>Chưa có bình luận nào</h4>`
    }

    // feat: delete cmt 
    const deleteCmt_btns = document.querySelectorAll(".deleteCmt-btn");

    deleteCmt_btns.forEach(item => {
        item.onclick = () => {
            const idCmt = item.getAttribute("data-idCmt")
            const idCourse = item.getAttribute("data-idCourse")
            const idLesson = item.getAttribute("data-idLesson")


            if (confirm("Bạn chắc chắn muốn xóa?")) {
                window.location.href =
                    `<?= $GLOBALS["domainPage"] ?>/learning/deleteCmt?idCmt=${idCmt}&idCourse=${idCourse}&idLesson=${idLesson}`
            }
        }
    })

    // feat: update cmt
    const updateCmt_btns = document.querySelectorAll(".updateCmt-btn")
    updateCmt_btns.forEach(item => {
        item.onclick = () => {
            const parentFomrUpdate = item.parentElement.parentElement.parentElement
            const contentCmt = parentFomrUpdate.querySelector(".commentBox--text")
            const update_cmt_form = parentFomrUpdate.querySelector(".update_cmt_form")
            const inputUpdate = update_cmt_form.querySelector(".contentUpdateIpt")
            contentCmt.style.display = "none";
            update_cmt_form.classList.add("open")
            inputUpdate.focus()
        }
    })

    // note-storage

    const note_storage = document.querySelector(".note-storage")
    const modal = document.querySelector(".modal")
    const note_wrapper = document.querySelector(".note_wrapper")
    const note_close = document.querySelector(".note-close")
    note_storage.onclick = (e) => {
        e.preventDefault()
        modal.classList.add("open")
    }

    note_close.onclick = () => {
        modal.classList.remove("open")

    }

    note_wrapper.onclick = (e) => {
        e.stopPropagation()
    }
    modal.onclick = () => {
        modal.classList.remove("open")

    }

    // 2. This code loads the IFrame Player API code asynchronously.
    var tag = document.createElement("script");

    tag.src = "https://www.youtube.com/iframe_api";
    var firstScriptTag = document.getElementsByTagName("script")[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

    // 3. This function creates an <iframe> (and YouTube player)
    //    after the API code downloads.
    var player;

    function onYouTubeIframeAPIReady() {
        player = new YT.Player("player", {
            height: "515",
            width: "100%",
            videoId: curLesson.path_video,
            playerVars: {
                playsinline: 1,
            },
            events: {
                onReady: onPlayerReady,
                onStateChange: onPlayerStateChange,
            },
        });
    }

    // 4. The API will call this function when the video player is ready.
    function onPlayerReady(event) {
        event.target.playVideo();
        setInterval(function() {
            onPlayerStateChange();
        }, 1000);
    }

    // 5. The API calls this function when the player's state changes.
    //    The function indicates that when playing a video (state=1),
    //    the player should play for six seconds and then stop.
    var done = false;

    function onPlayerStateChange() {
        if (player.getPlayerState() == YT.PlayerState.PLAYING) {
            var currentTime = player.getCurrentTime();
            console.log("Video is playing at " + currentTime + " seconds.");
        } else {
            var currentTime = player.getCurrentTime();
            const timeVideo = player.getDuration();
            console.log("Video is paused at " + currentTime + " seconds.");
            console.log(timeVideo, "thoi luong video");

            if (currentTime / timeVideo > 0.8) {
                console.log("qua bai nay roi");
            }
            console.log(currentTime / timeVideo, "ti le");
        }
    }
    </script>


</body>

</html>