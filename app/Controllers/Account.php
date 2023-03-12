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

    public function info()
    {
        return $this->view('client.pages.info.index');
    }
}
