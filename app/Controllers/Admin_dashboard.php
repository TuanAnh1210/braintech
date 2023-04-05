<?php
class Admin_dashboard extends BaseController
{

    private $buy_CoursesModel;
    private $usersModel;
    private $coursesModel;

    public function __construct()
    {

        $this->loadModel('Buy_courses');
        $this->buy_CoursesModel = new Buy_courses;

        $this->loadModel("UsersModel");
        $this->usersModel = new UsersModel;

        $this->loadModel("CoursesModel");
        $this->coursesModel = new CoursesModel;
    }

    public function index()
    {
        if (!empty($_SESSION["auth"]) && !empty($_SESSION["auth"]['role']) == 0) {

            $data = $this->buy_CoursesModel->getRevenue();

            $users = $this->usersModel->getAllUser();

            $courses = $this->coursesModel->getAll();
            return $this->view("admin.index", [
                "data" => $data,
                "users" => $users,
                "courses" => $courses,
            ]);
        } else if (!empty($_SESSION["auth"]) && !empty($_SESSION["auth"]['role']) == 1) {
            echo "<h2>Tài khoản này không có quyền quản trị</h2>";
        } else {
            $url = $GLOBALS['domainPage'] . "/account";
            header("location: $url");
        }
    }
}