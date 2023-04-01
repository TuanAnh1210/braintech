<?php
class Admin_dashboard extends BaseController
{

    private $buy_CoursesModel;

    public function __construct()
    {

        $this->loadModel('Buy_courses');
        $this->buy_CoursesModel = new Buy_courses;
    }

    public function index()
    {
        if (!empty($_SESSION["auth"]) && !empty($_SESSION["auth"]['role']) == 0) {

            $data = $this->buy_CoursesModel->getRevenue();

            return $this->view("admin.index", [
                "data" => $data
            ]);
        } else if (!empty($_SESSION["auth"]) && !empty($_SESSION["auth"]['role']) == 1) {
            echo "<h2>Tài khoản này không có quyền quản trị</h2>";
        } else {
            $url = $GLOBALS['domainPage'] . "/account";
            header("location: $url");
        }
    }
}