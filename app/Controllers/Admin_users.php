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
        $data = $this->usersModel->getAllUser();
        return $this->view("admin.pages.users.index", [
            "data" => $data
        ]);
    }
    public function updateUsers()
    {
        return $this->view("admin.pages.users.updateUsers");
    }

    public function addUsers()
    {

        // handle add new course
        if (!empty($_POST)) {
            if (!empty($_FILES['user_avatar']['name'])) {
                $target_dir = "uploads/";
                $target_file = $target_dir . basename($_FILES['user_avatar']['name']);
                move_uploaded_file($_FILES["user_avatar"]["tmp_name"], $target_file);
                $newAvatar = basename($_FILES['user_avatar']['name']);
            }

            $name = $_POST['user_name'];
            $email = $_POST['user_email'];
            $password = $_POST['user_password'];
            $avatar = $newAvatar;
            $address = $_POST['user_address'];
            $phone = $_POST['user_phone'];
            $date_join = date("Y-m-d H:i:s");
            $role = $_POST['user_role'];

            $data = [
                "name" => $name,
                "email" => $email,
                "password" => $password,
                "avatar" => $avatar,
                "address" => $address,
                "phone" => $phone,
                "date_join" => $date_join,
                "role" => $role,
            ];

            $this->usersModel->addNewUser($data);

            $url = $GLOBALS['domainPage'] . "/admin_users";
            header("location: $url");
        }
        return $this->view("admin.pages.users.addUsers");
    }
}
