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
        if(!empty($_POST)){
            $idArr=$_POST;
            // var_dump($idArr);die();
            foreach ($idArr as $value) {
                $id = $value;
                
            } 
            $data = $this->usersModel->getOne($id);
            // $listCate = $this->categoryModel->getAll();
        }
        return $this->view("admin.pages.users.updateUsers",[
            "data" => $data
        ]);

    }

    public function handleUpdateUsers(){
        if(!empty($_POST)){
            if(!empty($_FILES["user_avatar"]["name"])){
                $target_dir = "uploads/";
                $target_file = $target_dir . basename($_FILES["user_avatar"]["name"]);
                move_uploaded_file($_FILES["user_avatar"]["tmp_name"], $target_file);
                $newAvatar = basename($_FILES['user_avatar']['name']);
            }else{
                $newAvatar=$_POST["old_image"];
            }
            $user_id=$_POST["user_id"];
            $user_name=$_POST['user_name'];
            $user_role=$_POST['user_role'];
            $user_avatar=$newAvatar;
            $user_email=$_POST['user_email'];
            $user_password=$_POST['user_password'];
            $user_phone=$_POST['user_phone'];
            $user_address=$_POST['user_address'];
            $data=[
                "name"=>$user_name,
                "email"=>$user_email,
                "password"=>$user_password,
                "avatar"=>$user_avatar,
                "address"=>$user_address,
                "phone"=>$user_phone,
                "role"=>$user_role,
            ];
            $this->usersModel->handleUpdateUsers($data, $user_id);
            $url = $GLOBALS['domainPage'] . "/admin_users";
            header("location: $url");
        }
    }


    public function addUsers()
    {

        // handle add new course
        if(!empty($_POST)){
            if(!empty($_FILES["user_avatar"]["name"])){
                $target_dir = "uploads/";
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
    public function deleteUsers(){
        if(!empty($_POST)){
            $ids=$_POST;
            $this->usersModel->deleteUsers($ids);
            $url = $GLOBALS['domainPage'] . "/admin_users";
            header("location: $url");
        }
    }
}
