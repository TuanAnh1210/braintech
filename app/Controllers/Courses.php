<?php
class Courses extends BaseController
{
    private $coursesModel;
    private $chapterModel;
    private $lessonModel;

    public function __construct()
    {
        $this->loadModel('CoursesModel');
        $this->coursesModel = new CoursesModel;

        $this->loadModel('ChapterModel');
        $this->chapterModel = new ChapterModel;

        $this->loadModel('LessonModel');
        $this->lessonModel = new LessonModel;
    }

    public function index()
    {
        $coursesFe = $this->coursesModel->getCourse(1, "cate_id");
        $coursesBe = $this->coursesModel->getCourse(2, "cate_id");
        $coursesPro = $this->coursesModel->getCourse(3, "cate_id");

        return $this->view('client.pages.courses.index', [
            "coursesFe" => $coursesFe,
            "coursesBe" => $coursesBe,
            "coursesPro" => $coursesPro,
        ]);
    }


    public function detailCourse()
    {

        if (!empty($_SESSION["auth"])) {
            if (!empty($_GET['courseId'])) {
                $id_course = $_GET["courseId"];

                $course = $this->chapterModel->getFullChapterByCourseId($id_course);

                $lesson_list = $this->lessonModel->getFullLesson();
            }
            return $this->view('client.pages.courses.detailCourse', [
                "course" => $course,
                "lesson_list" => $lesson_list,
            ]);
        } else {
            $url = $GLOBALS['domainPage'] . "/account";
            header("location: $url");
        }
    }
}
