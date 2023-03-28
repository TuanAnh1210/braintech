<?php
class Certificate extends BaseController
{
    private $coursesModel;
    private $detail_courseModel;

    public function __construct()
    {
        $this->loadModel("CoursesModel");
        $this->coursesModel = new CoursesModel;


        $this->loadModel("Detail_courseModel");
        $this->detail_courseModel = new Detail_courseModel;
    }

    public function index()
    {
        if (!empty($_GET["idCourse"])) {
            $id_course = $_GET["idCourse"];
            $id_user = $_SESSION["auth"]["id"];
            $course = $this->coursesModel->getCourseById($id_course);

            $this->detail_courseModel->finishCourse($id_course, $id_user);
        }
        return $this->view("client.pages.certificate.index", [
            "course" => $course
        ]);
    }

    public function notFnLearn()
    {
        if (!empty($_GET["idCourse"])) {
            $id_course = $_GET["idCourse"];
            $course = $this->coursesModel->getCourseById($id_course);
        }

        return $this->view("client.pages.certificate.notFnLearn", [
            "course" => $course
        ]);
    }
}