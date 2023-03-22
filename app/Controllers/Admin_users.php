<?php
class Admin_users extends BaseController
{
    private $usersModel;

    public function __construct()
    {
        $this->loadModel("UsersModel");
        $this->usersModel = new UsersModel;
    }

    public function index()
    {
        if (!empty($_SESSION['auth'])) {
            $data = $this->usersModel->getAllUser();
            return $this->view("admin.pages.users.index", [
                "data" => $data
            ]);
        } else {
            $url = $GLOBALS['domainPage'] . "/account";
            header("location: $url");
        }
    }
    public function updateUsers()
    {
        return $this->view("admin.pages.users.updateUsers");
    }

    public function addUsers()
    {

        // handle add new course
        if(!empty($_POST)){
            if(!empty($_FILES["user_avatar"]["name"])){
                $target_dir = "upload/";
                $target_file = $target_dir . basename($_FILES["user_avatar"]["name"]);
                move_uploaded_file($_FILES["user_avatar"]["tmp_name"], $target_file);
                $newAvatar = basename($_FILES['user_avatar']['name']);
            }
            $user_name=$_POST['user_name'];
            $user_role=$_POST['user_role'];
            $user_avatar=$newAvatar;
            $user_email=$_POST['user_email'];
            $user_password=$_POST['user_password'];
            $user_phone=$_POST['user_phone'];
            $user_address=$_POST['user_address'];
            $date_join=date("Y-m-d H:i:s");
            $data=[
                "name"=>$user_name,
                "email"=>$user_email,
                "password"=>$user_password,
                "avatar"=>$user_avatar,
                "address"=>$user_address,
                "phone"=>$user_phone,
                "date_join"=>$date_join,
                "role"=>$user_role,
            ];
            $this->usersModel->addNewUser($data);
            $url = $GLOBALS['domainPage'] . "/admin_users";
            header("location: $url");
        }
        return $this->view("admin.pages.users.addUsers");
    }
}
