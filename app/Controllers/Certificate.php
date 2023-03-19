<?php
class Certificate extends BaseController
{
    private $coursesModel;

    public function __construct()
    {
        $this->loadModel("CoursesModel");
        $this->coursesModel = new CoursesModel;
    }

    public function index()
    {
        if (!empty($_GET["idCourse"])) {
            $id_course = $_GET["idCourse"];
            $course = $this->coursesModel->getCourseById($id_course);
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
