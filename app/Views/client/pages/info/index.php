<?php ipView('client.component.header') ?>

<div class="info__wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-5">
                <div class="info__user">
                    <div class="profile__user">
                        <img src="<?= $GLOBALS["domainPage"] ?>/uploads/<?= $_SESSION["auth"]["avatar"] ?>" alt="">
                        <div class="profile__user--body">
                            <h3><?= $_SESSION["auth"]["name"] ?><span><i style="color: orangered;"
                                        class="fa-solid fa-star"></i></span>
                            </h3>

                            <p>Thành viên của Braintech</p>
                        </div>
                        <button class="update__ava--btn js-edit">
                            <i class="fa-solid fa-camera"></i>
                        </button>
                    </div>
                    <div class="profile__user--detail">
                        <div class="profile__user--heading">
                            <h3>Thông tin</h3>
                            <i class="fa-solid fa-user-pen"></i>
                        </div>
                        <div class="profile__user--txt">
                            <p>Tên: &ensp; <br><strong> &ensp;<?= $_SESSION["auth"]["name"] ?></strong> </p>
                            <p>Email: </p>&ensp;
                            <strong class="fixText">
                                <?= $_SESSION["auth"]["email"] ?></strong>
                            <p>Phone: &ensp;<br><strong> &ensp;<?= $_SESSION["auth"]["phone"] ?></strong> </p>
                            <button class="update__profile js-edit">Chỉnh sửa</button>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-9 col-md-7">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="box__courses">
                            <div class="box__courses--title">
                                <h3><span><i class="fa-solid fa-chalkboard-user"></i></span> &ensp; Khóa học đang học
                                </h3>


                                <div class="courseLearning">


                                </div>



                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="box__courses">
                            <div class="box__courses--title">
                                <h3><span><i class="fa-solid fa-graduation-cap"></i></span> &ensp; Khóa học đã hoàn
                                    thành</h3>


                                <div class="courseLearned">

                                </div>



                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="box__courses mt">
                            <div class="box__courses--title">
                                <h3><span><i class="fa-solid fa-cart-shopping"></i></span> &ensp; Khóa học đã mua</h3>


                                <div class="courseBought">

                                </div>



                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal">
    <div class="mofal_form">
        <form action="<?= $GLOBALS["domainPage"] ?>/info/handleUpdateInfo" method="POST" enctype="multipart/form-data">
            <div class="btn-close-wrapper">
                <button class="btn-close">
                    <i class="fa-regular fa-circle-xmark"></i>
                </button>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="img_preview">
                        <img class="imgUpload"
                            src="<?= $GLOBALS["domainPage"] ?>/uploads/<?= $_SESSION["auth"]["avatar"] ?>" alt="">
                        <img class="loadingImg" src="https://i.gifer.com/7pld.gif" alt="">

                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label id="labelImage" for="image">
                                    <p>Ảnh đại diện</p>
                                </label>

                                <input hidden class="prdImage" type="file" name="avatar_user" id="image">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8">
                    <div class="form_input">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form_group">
                                    <label for="">Họ tên:</label>
                                    <input type="text" required name="name_user"
                                        value="<?= $_SESSION["auth"]["name"] ?>">
                                </div>

                            </div>
                            <div class="col-lg-6">
                                <div class="form_group">
                                    <label for="">Số điện thoại:</label>
                                    <input type="text" required name="phone_user"
                                        value="<?= $_SESSION["auth"]["phone"] ?>">
                                </div>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form_group mt">
                                    <label for="">Email:</label>
                                    <input type="email" required name="email_user"
                                        value="<?= $_SESSION["auth"]["email"] ?>">
                                </div>
                            </div>
                        </div>

                        <input hidden type="text" value="<?= $_SESSION["auth"]["id"] ?>" name="id_user">


                        <button class="btn-update-info">Cập nhật</button>
                    </div>
                </div>
            </div>

        </form>
    </div>
</div>


<script>
// handle get data from db and convert arr php to arr js
const infoCourse_user = <?= json_encode($infoCourse_user) ?>;

const coursesBoughtData = <?= json_encode($coursesBought) ?>;

infoCourse_user.forEach(element => {
    for (let i in element) {
        if (!isNaN(Number(i))) {
            delete element[i];
        }
    }
});

coursesBoughtData.forEach(element => {
    for (let i in element) {
        if (!isNaN(Number(i))) {
            delete element[i];
        }
    }
});

// show courseLearning
const courseLearning = document.querySelector(".courseLearning");
const listCourseLearning = infoCourse_user.filter(item => item.status_learn == 0);

courseLearning.innerHTML = listCourseLearning.map(item => `
    <div class="box__courses--inner">
                                    <img src="<?= $GLOBALS["domainPage"] ?>/uploads/${item.thumb}" alt="">
                                    <div class="box__courses--info">
                                        <h4>${item.name}</h4>
                                        <p>Ngày bắt đầu: <span>2022-12-10</span></p>
                                    </div>
                                </div>
    `).join("");

// show courseLearned

const courseBought = document.querySelector(".courseBought")
courseBought.innerHTML = coursesBoughtData.map(item => `
    <div class="box__courses--inner">
                                    <img src="<?= $GLOBALS["domainPage"] ?>/uploads/${item.thumb}" alt="">
                                    <div class="box__courses--info">
                                        <h4>${item.name}</h4>
                                        <p>Ngày mua: <span>${item.date_pay}</span></p>
                                    </div>
                                </div>
    `).join("");


// show courseLearned

const courseLearned = document.querySelector(".courseLearned")
const listCourseLearned = infoCourse_user.filter(item => item.status_learn == 1);
courseLearned.innerHTML = listCourseLearned.map(item => `
    <div class="box__courses--inner">
                                    <img src="<?= $GLOBALS["domainPage"] ?>/uploads/${item.thumb}" alt="">
                                    <div class="box__courses--info">
                                        <h4>${item.name}</h4>
                                        <p>Ngày bắt đầu: <span>2022-12-10</span></p>
                                    </div>
                                </div>
    `).join("");


// feat: show form edit info user
const js_edit_btn = document.querySelectorAll(".js-edit");
const modal = document.querySelector(".modal");
const btn_close = document.querySelector(".btn-close")
const mofal_form = document.querySelector(".mofal_form")

js_edit_btn.forEach(item => {
    item.onclick = () => {
        modal.classList.add("open")
    }
})

btn_close.onclick = (e) => {
    e.preventDefault()
    modal.classList.remove("open")
}

mofal_form.onclick = (e) => {
    e.stopPropagation()
}

modal.onclick = () => {
    modal.classList.remove("open")
}
const imgUpload = document.querySelector(".imgUpload")

const loadingImg = document.querySelector(".loadingImg")

const showLoading = (isSuccess) => {
    if (isSuccess) {
        imgUpload.style.display = "block"
        loadingImg.classList.remove("open")
    } else {
        imgUpload.style.display = "none"
        loadingImg.classList.add("open")
    }
}

const prdImage = document.querySelector(".prdImage")
prdImage.onchange = async () => {
    showLoading(false);
    const urlImgUpload = await uploadFiles(prdImage.files)

    imgUpload.src = urlImgUpload;
}


const uploadFiles = async (files) => {
    const CLOUD_NAME = "dpjieqbsk";
    const PRESET_NAME = "braintech";
    const FOLDER_NAME = "braintech";
    const urlImage = "";
    const api = `https://api.cloudinary.com/v1_1/${CLOUD_NAME}/image/upload`;

    const formData = new FormData();

    formData.append("upload_preset", PRESET_NAME);
    formData.append("folder", FOLDER_NAME);

    for (const file of files) {
        formData.append("file", file);

        const response = await axios.post(api, formData, {
            headers: {
                "Content-Type": "multipart/form-data"
            }
        });
        showLoading(response);
        return response.data.secure_url

    }


}
</script>
<?php ipView('client.component.footer') ?>