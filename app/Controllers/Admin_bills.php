<?php
class Admin_bills extends BaseController
{
    private $buy_CoursesModel;
    private $coursesModel;

    public function __construct()
    {

        $this->loadModel('Buy_courses');
        $this->buy_CoursesModel = new Buy_courses;

        $this->loadModel('CoursesModel');
        $this->coursesModel = new CoursesModel;
    }

    public function index()
    {
        if (!empty($_SESSION["auth"]) && !empty($_SESSION["auth"]['role']) == 0) {
            $data = $this->buy_CoursesModel->getBill();

            return $this->view("admin.pages.bills.index", [
                "data" => $data
            ]);
        } else if (!empty($_SESSION["auth"]) && !empty($_SESSION["auth"]['role']) == 1) {
            echo "<h2>Tài khoản này không có quyền quản trị</h2>";
        } else {
            $url = $GLOBALS['domainPage'] . "/account";
            header("location: $url");
        }
    }

    public function detailBill()
    {
        if (!empty($_GET["billId"])) {
            $id_bill = $_GET["billId"];

            $course = $this->coursesModel->getCourseById($id_bill);
            $data = $this->buy_CoursesModel->getDetailBill($id_bill);
        }
        return $this->view("admin.pages.bills.detailBill", [
            "data" => $data,
            "course" => $course
        ]);
    }

    public function statisticalBill()
    {
        $data = $this->buy_CoursesModel->getRevenue();
        return $this->view("admin.pages.bills.statistical", [
            "data" => $data
        ]);
    }
}
