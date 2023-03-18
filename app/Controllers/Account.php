<?php
class Account extends BaseController
{

    private $accountModel;


    public function __construct()
    {
        $this->loadModel('AccountModel');
        $this->accountModel = new AccountModel;
    }

    public function index()
    {
        $listUser = $this->accountModel->getAllUser();
        return $this->view('client.pages.account.index', [
            "listUser" => $listUser
        ]);
    }

    public function login()
    {
        if (!empty($_POST["email_login"]) && !empty($_POST["pass_login"])) {
            $emailUser = $_POST['email_login'];
            $auth = $this->accountModel->getAuth($emailUser);
            $_SESSION['auth'] = $auth;

            if ($_SESSION['auth']['role'] == 1) {
                $url = $GLOBALS['domainPage'];
                header("location:  $url");
            } else if ($_SESSION['auth']['role'] == 0) {
                $url = $GLOBALS['domainPage'] . "/admin_dashboard";
                header("location: $url");
            }
        }
    }

    public function logout()
    {
        if (isset($_SESSION['auth'])) {
            unset($_SESSION['auth']);
            $url = $GLOBALS['domainPage'];


            header("location:  $url");
        }
    }

    public function handleRegisAcc()
    {
        if (!empty($_POST)) {
            $name = $_POST['name_regis'];
            $email = $_POST['email_regis'];
            $password = $_POST['pass_regis'];
            $avatar = "default.jpg";
            $address = "not available";
            $phone = "not available";
            $date_join = date("Y-m-d H:i:s");


            $arrInfo = [
                "name" => $name,
                "email" => $email,
                "password" => $password,
                "avatar" => $avatar,
                "address" => $address,
                "phone" => $phone,
                "date_join" => $date_join,
            ];

            mailAuth('sendmail', [
                "arrInfo" => $arrInfo
            ]);
        }
    }

    public function authSuccess()
    { {
            if (!empty($_POST)) {
                $name = $_POST['fullnameUser'];
                $email = $_POST['emailUser'];
                $avatar = $_POST['avatarUser'];
                $address = $_POST['addressUser'];
                $password = $_POST['passwordUser'];
                $phone = $_POST['phoneUser'];
                $date_join = $_POST['date_joinUser'];

                $data = [
                    'name' => $name,
                    'email' => $email,
                    'password' => $password,
                    'avatar' => $avatar,
                    'address' => $address,
                    'phone' => $phone,
                    'date_join' => $date_join,
                    'role' => 1,
                ];
                $this->accountModel->addNewAcc($data);
                $url = $GLOBALS['domainPage'] . "/account";
                header("location: $url");
            }
        }
    }

    public function forgotPass()
    {
        if (!empty($_POST["emailIpt"])) {
            $emailCheck = $_POST["emailIpt"];
            mailAuth('forgotPass', [
                "emailCheck" => $emailCheck
            ]);
            die;
        }
        return $this->view("client.pages.account.forgotPass");
    }

    public function authForgotPass()
    {
        if (!empty($_POST['emailUser'])) {
            $emailUser = $_POST['emailUser'];
            return $this->view("client.pages.account.updatePass", [
                "emailUser" => $emailUser
            ]);
        }
    }

    public function updatePassword()
    {
        if (!empty($_POST['passIpt']) && !empty($_POST['emailIpt'])) {
            $password = $_POST['passIpt'];
            $email = $_POST['emailIpt'];


            $this->accountModel->updateNewPass($password, $email);
            $url = $GLOBALS['domainPage'] . "/account";
            header("location: $url");
        }
    }
}
