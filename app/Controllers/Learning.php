<?php
class Learning extends BaseController
{

    private $lessonModel;
    private $detail_courseModel;
    private $chapterModel;
    private $commentsModel;
    private $noteModel;


    public function __construct()
    {
        $this->loadModel("Detail_courseModel");
        $this->detail_courseModel = new Detail_courseModel;

        $this->loadModel("ChapterModel");
        $this->chapterModel = new ChapterModel;

        $this->loadModel("LessonModel");
        $this->lessonModel = new LessonModel;

        $this->loadModel("CommentsModel");
        $this->commentsModel = new CommentsModel;

        $this->loadModel("NoteModel");
        $this->noteModel = new NoteModel;
    }

    public function index()
    {
        if (!empty($_GET["courseId"]) && !empty($_GET["userId"]) && !empty($_GET["lessonId"])) {
            $id_course = $_GET["courseId"];
            $id_user = $_GET["userId"];
            $id_lesson = $_GET["lessonId"];



            $courseLearning = $this->detail_courseModel->getAll();

            // Check if the user has learned


            $isErr = true;
            foreach ($courseLearning as $key => $value) {

                if ($value["course_id"] == $id_course && $value["user_id"] == $id_user) {
                    $isErr = false;
                }
            }
            if ($isErr) {
                $data = [
                    "course_id" => $id_course,
                    "user_id" => $id_user,
                    "status_learn" => 0
                ];
                $this->detail_courseModel->insertDetailCourse($data);
            }

            // load course
            $course = $this->chapterModel->getFullChapterByCourseId($id_course);
            $lesson_list = $this->lessonModel->getFullLesson();

            // get current lesson
            $curLesson = $this->lessonModel->getOneLesson($id_lesson);

            // get all comment
            $comments = $this->commentsModel->getFullComment($id_lesson);

            // get note
            $notes = $this->noteModel->getAllNote($id_user);
        }
        return $this->view('client.pages.learning.index', [
            "course" => $course,
            "lesson_list" => $lesson_list,
            "curLesson" => $curLesson,
            "id_lesson" => $id_lesson,
            "id_course" => $id_course,
            "comments" => $comments,
            "notes" => $notes,
        ]);
    }

    public function deleteCmt()
    {
        if (!empty($_GET["idCmt"]) && !empty($_GET["idCourse"]) && !empty($_GET["idLesson"])) {
            $idCmt = $_GET["idCmt"];
            $id_course = $_GET["idCourse"];
            $id_lesson = $_GET["idLesson"];
            $id_user = $_SESSION['auth']["id"];

            $this->commentsModel->deleteCmt($idCmt);

            $url = $GLOBALS['domainPage'] . "/learning?courseId=$id_course&userId=$id_user&lessonId=$id_lesson";
            header("location: $url");
        }
    }

    public function addNewCmt()
    {
        if (!empty($_POST)) {
            $id_lesson = $_POST["cmt_idLesson"];
            $id_user = $_POST["cmt_idUser"];
            $content = $_POST["cmt_content"];
            $id_course = $_POST["cmt_idCourse"];

            $data = [
                "content" => $content,
                "date_cmt" => date("Y-m-d H:i:s"),
                "id_user" => $id_user,
                "id_lesson" => $id_lesson,
            ];

            $this->commentsModel->addCmt($data);

            $url = $GLOBALS['domainPage'] . "/learning?courseId=$id_course&userId=$id_user&lessonId=$id_lesson";
            header("location: $url");
        }
    }

    public function updateCmt()
    {
        if (!empty($_POST)) {
            $id_lesson = $_POST["cmt_idLesson"];
            $id_user = $_POST["cmt_idUser"];
            $content = $_POST["contentUpdateIpt"];
            $id_course = $_POST["cmt_idCourse"];
            $id_cmt = $_POST["cmt_idCmt"];

            $data  = [
                "content" => $content,
                "id_user" => $id_user,
                "id_lesson" => $id_lesson,
            ];

            $this->commentsModel->updateCmt($data, $id_cmt);
            $url = $GLOBALS['domainPage'] . "/learning?courseId=$id_course&userId=$id_user&lessonId=$id_lesson";
            header("location: $url");
        }
    }


    public function AddNewNote()
    {
        if (!empty($_POST)) {
            $id_user = $_POST["id_user"];
            $id_lesson = $_POST["id_lesson"];
            $id_course = $_POST["id_course"];
            $note_content = $_POST["note_content"];

            $data = [
                "content" => $note_content,
                "id_lesson" => $id_lesson,
                "id_user" => $id_user,
            ];

            $this->noteModel->addNewNote($data);

            $url = $GLOBALS['domainPage'] . "/learning?courseId=$id_course&userId=$id_user&lessonId=$id_lesson";
            header("location: $url");
        }
    }
}
