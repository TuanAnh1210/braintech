<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= $GLOBALS['domainPage'] ?>/public/css/client/pages/account/account.css">

</head>

<body>
    <div class="account__wrapper">
        <div class="form__wrapper">
            <form class="form__login" action="<?= $GLOBALS['domainPage'] ?>/account/login" method="POST">
                <h2 class="form__title">Đăng nhập</h2>
                <div class="form__group">
                    <label for="">Email</label>
                    <input id="email_login" type="text" placeholder="Email" name="email_login">
                    <p class="error"></p>
                </div>
                <div class="form__group">
                    <label for="">Mật khẩu</label>
                    <input id="pass_login" type="password" placeholder="Mật khẩu" name="pass_login">
                    <p class="error"></p>

                </div>
                <button class="btn__login">Đăng nhập</button>
                <a class="forgot__pass" href="#">Quên mật khẩu</a>
                <a class="forgot__pass" href="<?= $GLOBALS['domainPage'] ?>">Trang chủ</a>
            </form>
            <form class="form__regis" action="<?= $GLOBALS['domainPage'] ?>/account/handleRegisAcc" method="POST">
                <h2 class="form__title regis">Đăng ký</h2>
                <div class="form__group">
                    <label for="">Họ tên</label>
                    <input type="text" placeholder="Họ và tên" id="name_regis" name="name_regis">
                    <p class="error"></p>
                </div>
                <div class="form__group">
                    <label for="">Email</label>
                    <input type="text" placeholder="Email" id="email_regis" name="email_regis">
                    <p class="error"></p>
                </div>
                <div class="form__group">
                    <label for="">Mật khẩu</label>
                    <input type="password" placeholder="Mật khẩu" id="pass_regis" name="pass_regis">
                    <p class="error"></p>
                </div>
                <div class="form__group">
                    <label for="">Nhập lại mật khẩu</label>
                    <input type="password" placeholder="Xác nhận mật khẩu" id="rePass_regis">
                    <p class="error"></p>
                </div>
                <button class="btn__regis">Đăng ký</button>
                <a class="forgot__pass" href="<?= $GLOBALS['domainPage'] ?>">Trang chủ</a>
            </form>
            <div class="overlay_container">
                <div class="overlay-login">
                    <div class="isInfoRegis">
                        <h2 class="overlay-title">Bạn chưa có tài khoản ?</h2>
                        <p class="overlay-sub">Đăng ký ngay để bắt đầu học lập trình với BrainTech nhé !</p>
                        <button class="overlay-btn regisJs">Đăng ký ngay</button>
                    </div>
                    <div class="isInfoLogin close">
                        <h2 class="overlay-title">Chào mừng bạn đến với BrainTech</h2>
                        <p class="overlay-sub">Đăng nhập ngay để học những bài học bổ ích nhé !</p>
                        <button class="overlay-btn loginJs">Đăng nhập ngay</button>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <script>
        // handle get data from db and convert arr php to arr js
        const listUser = <?= json_encode($listUser) ?>;

        listUser.forEach(element => {
            for (let i in element) {
                if (!isNaN(Number(i))) {
                    delete element[i];
                }
            }
        });


        const regisJs = document.querySelector('.regisJs')
        const loginJs = document.querySelector('.loginJs')
        const isInfoRegis = document.querySelector('.isInfoRegis')
        const isInfoLogin = document.querySelector('.isInfoLogin')
        const overlay_container = document.querySelector('.overlay_container')
        const form__login = document.querySelector('.form__login')
        const form__regis = document.querySelector('.form__regis')

        regisJs.onclick = () => {
            isInfoRegis.classList.add('close')
            isInfoLogin.classList.remove('close')
            overlay_container.classList.add('isRegis')
            form__login.classList.add('ani')
            form__regis.classList.remove('ani')
        }

        loginJs.onclick = () => {
            isInfoRegis.classList.remove('close')
            isInfoLogin.classList.add('close')
            overlay_container.classList.remove('isRegis')
            form__regis.classList.add('ani')
            form__login.classList.remove('ani')

        };





        // show error
        const showError = (item, message) => {
            item.nextElementSibling.innerText = message
        }

        const hideError = (item) => {
            item.nextElementSibling.innerText = ""
        }

        // check email & pass true then login
        const checkExist = (options) => {
            if (options == 0) {
                const emailLogin = document.querySelector("#email_login")
                const passLogin = document.querySelector("#pass_login")

                const isSuccess = listUser.some(user => user.email == emailLogin.value && user.password == passLogin
                    .value)

                return isSuccess

            } else if (options == 1) {
                const emailRegis = document.querySelector("#email_regis")
                const isExist = listUser.some(user => user.email == emailRegis.value);

                return isExist
            }
        }

        const regEmail = /^\w+@(\w+\.\w+){1,2}$/;

        const validateFormLogin = (formField) => {
            let isError = true
            formField.forEach(field => {

                const ele = document.getElementById(field)

                if (field == "email_login") {
                    if (!regEmail.test(ele.value.trim())) {
                        showError(ele, "Email không đúng định dạng")
                        isError = false
                    }
                }

                if (field == "pass_login") {
                    if (ele.value.trim().length < 6) {
                        showError(ele, "Mật khẩu tối thiểu 6 kí tự")
                        isError = false

                    }
                }

                if (ele.value.trim() == "") {
                    showError(ele, "Dữ liệu không được để trống");
                    isError = false
                }

                ele.oninput = () => {
                    hideError(ele)
                }
            })

            if (isError) {
                if (checkExist(0)) {
                    return true
                } else {
                    alert("Email hoặc mật khẩu không chính xác !")
                    return false
                }
            }
        }

        // handle validate form login
        const formFieldLogin = ["email_login", "pass_login"];
        form__login.onsubmit = (e) => {
            e.preventDefault()

            if (validateFormLogin(formFieldLogin)) {
                form__login.submit()
            }


        }




        // handle validate form register
        const pass_regis = document.getElementById("pass_regis")
        const rePass_regis = document.getElementById("rePass_regis")

        const validateFormRegis = (formField) => {
            let isError = true
            formField.forEach(field => {

                const ele = document.getElementById(field)

                if (field == "email_regis") {
                    if (!regEmail.test(ele.value.trim())) {
                        showError(ele, "Email không đúng định dạng")
                        isError = false
                    }
                }

                if (field == "pass_regis") {
                    if (ele.value.trim().length < 6) {
                        showError(ele, "Mật khẩu tối thiểu 6 kí tự")
                        isError = false

                    }
                }

                if (pass_regis.value.trim() != rePass_regis.value.trim()) {
                    showError(rePass_regis, "Mật khẩu nhập lại không chính xác")
                    showError(pass_regis, "Mật khẩu nhập lại không chính xác")
                    isError = false
                }

                if (ele.value.trim() == "") {
                    showError(ele, "Dữ liệu không được để trống");
                    isError = false
                }

                ele.oninput = () => {
                    hideError(ele)
                }
            })

            if (isError) {
                if (!!checkExist(1)) {
                    alert("Email đã tồn tại. Vui lòng sử dựng email khác")
                    return false
                } else {
                    return true
                }
            }
        }


        const formFieldRegis = [
            "name_regis",
            "email_regis",
            "pass_regis",
            "rePass_regis"
        ]

        form__regis.onsubmit = (e) => {
            e.preventDefault()

            if (validateFormRegis(formFieldRegis)) {
                form__regis.submit()
            }
        }
    </script>
</body>

</html>