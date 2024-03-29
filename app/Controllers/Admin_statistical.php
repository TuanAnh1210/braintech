<?php
class Admin_statistical extends BaseController
{
    private $coursesModel;
    private $chapterModel;
    private $detail_courseModel;

    public function __construct()
    {;
        $this->loadModel("CoursesModel");
        $this->coursesModel = new CoursesModel;

        $this->loadModel("ChapterModel");
        $this->chapterModel = new ChapterModel;

        $this->loadModel("Detail_courseModel");
        $this->detail_courseModel = new Detail_courseModel;
    }

    public function index()
    {
        if (!empty($_SESSION['auth'])) {
            $courseFe = $this->coursesModel->getCourse(1, "cate_id");
            $courseBe = $this->coursesModel->getCourse(2, "cate_id");
            $coursePro = $this->coursesModel->getCourse(3, "cate_id");
            $chapters = $this->chapterModel->getChapter();
            $detail_courses = $this->detail_courseModel->getAll();
            return $this->view("admin.pages.statistical.index", [
                "courseFe" => $courseFe,
                "courseBe" => $courseBe,
                "coursePro" => $coursePro,
                "chapters" => $chapters,
                "detail_courses" => $detail_courses,
            ]);
        } else {
            $url = $GLOBALS['domainPage'] . "/account";
            header("location: $url");
        }
    }

    public function chart()
    {
        if (!empty($_SESSION['auth'])) {
            if (!empty($_GET["course_cate"])) {
                $cate = $_GET["course_cate"];
                $data = $this->detail_courseModel->getCourseDetail($cate);


                return $this->view("admin.pages.statistical.chart", [
                    "data" => $data
                ]);
            }
        } else {
            $url = $GLOBALS['domainPage'] . "/account";
            header("location: $url");
        }
    }
}