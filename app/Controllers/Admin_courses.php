<?php
class Admin_courses extends BaseController
{
    private $coursesModel;

    public function __construct()
    {
        $this->loadModel("CoursesModel");
        $this->coursesModel = new CoursesModel;
    }

    public function index()
    {
        $courseFe = $this->coursesModel->getCourse(1, "cate_id");
        $courseBe = $this->coursesModel->getCourse(2, "cate_id");
        $coursePro = $this->coursesModel->getCourse(3, "cate_id");


        return $this->view("admin.pages.courses.index", [
            "courseFe" => $courseFe,
            "courseBe" => $courseBe,
            "coursePro" => $coursePro,
        ]);
    }

    public function updateCourse()
    {
        return $this->view("admin.pages.courses.updateCourse");
    }

    public function addCourse()
    {
        return $this->view("admin.pages.courses.addCourse");
    }
}