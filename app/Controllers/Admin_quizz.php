<?php
class Admin_quizz extends BaseController
{
    private $coursesModel;
    private $lessonModel;
    private $quizzsModel;

    public function __construct()
    {
        $this->loadModel("CoursesModel");
        $this->coursesModel = new CoursesModel;

        $this->loadModel("LessonModel");
        $this->lessonModel = new LessonModel;

        $this->loadModel("QuizzsModel");
        $this->quizzsModel = new QuizzsModel;
    }

    public function index()
    {
        if (!empty($_GET)) {
            $id_lesson = $_GET["idLesson"];
            $id_chapter = $_GET["idChapter"];
            $id_course = $_GET["idCourse"];

            $course = $this->coursesModel->getCourseById($id_course);
            $lesson = $this->lessonModel->getOneLesson($id_lesson);
            $quizz = $this->quizzsModel->adminGetQuizz($id_lesson);
        }
        return $this->view("admin.pages.quizz.index", [
            "course" => $course,
            "lesson" => $lesson,
            "quizz" => $quizz,
            "id_chapter" => $id_chapter
        ]);
    }

    public function addQuizz()
    {
        if (!empty($_GET)) {
            $id_lesson = $_GET["idLesson"];
            $id_chapter = $_GET["idChapter"];
            $id_course = $_GET["idCourse"];

            $lesson = $this->lessonModel->getOneLesson($id_lesson);
        }

        if (!empty($_POST)) {
            $quizzAnswer = $_POST["quizz_answer"];
            $id_lesson = $_POST["lessonId"];
            $data = [
                "name" => $quizzAnswer,
                "lesson_id" => $id_lesson
            ];
            $this->quizzsModel->addNewQuizz($data);

            $url = $GLOBALS['domainPage'] . "/admin_quizz?idLesson=$id_lesson&idChapter=$id_chapter&idCourse=$id_course";
            header("location: $url");
        }
        return $this->view("admin.pages.quizz.addQuizz", [
            "lesson" => $lesson
        ]);
    }

    public function deleteQuizz()
    {
        if (!empty($_GET)) {
            $idQuizz = $_GET["idQuizz"];
            $id_lesson = $_GET["idLesson"];
            $id_chapter = $_GET["idChapter"];
            $id_course = $_GET["idCourse"];

            $this->quizzsModel->deleteQuizz($idQuizz);
            $url = $GLOBALS['domainPage'] . "/admin_quizz?idLesson=$id_lesson&idChapter=$id_chapter&idCourse=$id_course";
            header("location: $url");
        }
    }
}
