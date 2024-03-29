<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xác minh</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            font-family: Arial, Helvetica, sans-serif;
        }

        .form__wrapper {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: url('http://localhost/braintech/public/imgs/bg_blue.png') center center / cover no-repeat;

        }

        .authForm {
            width: 600px;
            max-height: 500px;
            border: 1px solid #ccc;
            background-color: white;
            display: flex;
            flex-direction: column;
            padding: 24px 12px;
            border-radius: 8px;
            box-shadow: rgba(0, 0, 0, 0.56) 0px 22px 70px 4px;


        }

        .authTitle {
            font-size: 24px;
            font-weight: 500;
            letter-spacing: .5px;
        }

        .authSub {
            font-size: 16px;
            font-style: italic;
            margin: 32px 0 12px 0;
        }

        .authCode {
            padding: 8px 20px;
            font-size: 16px;
            border-radius: 8px;
            border: 1px solid #ccc;

            outline: none;
        }

        .authBtn {
            margin-top: 24px;
            background-color: #8EC5FC;
            background-image: linear-gradient(62deg, #8EC5FC 0%, #E0C3FC 100%);
            border: none;
            font-size: 16px;
            font-weight: 700;
            padding: 10px 0;
            border-radius: 8px;
            opacity: .8;
        }

        .authBtn:hover {
            opacity: 1;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="form__wrapper">
        <form class="authForm" action="" method="POST">
            <h3 class="authTitle">Vui lòng nhập Email của bạn</h3>
            <p class="authSub">Email:</p>
            <input name="emailIpt" required type="email" class="authCode" placeholder="Nhập email...">

            <button class="authBtn">Gửi</button>
        </form>
    </div>



</body>

</html>