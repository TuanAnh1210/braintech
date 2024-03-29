<?php
class Info extends BaseController
{
    private $detail_courseModel;
    private $usersModel;
    private $buy_CoursesModel;

    public function __construct()
    {
        $this->loadModel("Detail_courseModel");
        $this->detail_courseModel = new Detail_courseModel;

        $this->loadModel("UsersModel");
        $this->usersModel = new UsersModel;

        $this->loadModel('Buy_courses');
        $this->buy_CoursesModel = new Buy_courses;
    }
    public function index()
    {
        if (!empty($_SESSION["auth"])) {
            $id_user = $_SESSION["auth"]['id'];
            $listCourse = $this->detail_courseModel->getAll();
            $infoCourse_user = $this->detail_courseModel->getInfoCourse_User($id_user);
            $coursesBought = $this->buy_CoursesModel->getCourseBoughtInfo($id_user);
            return $this->view("client.pages.info.index", [
                "listCourse" => $listCourse,
                "infoCourse_user" => $infoCourse_user,
                "coursesBought" => $coursesBought
            ]);
        }
    }

    public function handleUpdateInfo()
    {
        if (!empty($_POST)) {
            $id = $_POST["id_user"];
            $name = $_POST["name_user"];
            $email = $_POST["email_user"];
            $phone = $_POST["phone_user"];

            if (!empty($_POST['avaCur_user'])) {

                $newAvatar = $_POST['avaCur_user'];
            } else {
                $newAvatar =  $_SESSION["auth"]["avatar"];
            }

            $data = [
                "name" => $name,
                "email" => $email,
                "avatar" =>  $newAvatar,
                "phone" => $phone,
            ];

            $this->usersModel->updateInfo($data, $id);

            $_SESSION["auth"]["name"] = $name;
            $_SESSION["auth"]["email"] = $email;
            $_SESSION["auth"]["avatar"] =  $newAvatar;
            $_SESSION["auth"]["phone"] = $phone;
            $url = $GLOBALS['domainPage'] . "/info";
            header("location: $url");
        }
    }
}
