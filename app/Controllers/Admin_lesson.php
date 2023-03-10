<?php
class Admin_lesson extends BaseController
{
    private $lessonModel;
    private $chapterModel;

    public function __construct()
    {
        $this->loadModel("LessonModel");
        $this->lessonModel = new LessonModel;

        $this->loadModel("ChapterModel");
        $this->chapterModel = new ChapterModel;
    }

    public function index()
    {
        // get id chapter on url
        if (!empty($_GET['courseId'])) {
            $id = $_GET['courseId'];
            $courseName = $this->chapterModel->getDep("courses", $id, "id");
        }


        if (!empty($_GET['chapterId'])) {
            $id_chapter = $_GET["chapterId"];

            $data = $this->lessonModel->getAllLesson($id_chapter, "course_chapter_id");
        }
        return $this->view("admin.pages.lesson.index", [
            "data" => $data,
            "courseName" => $courseName[0]['name'],
            "id_chapter" => $id_chapter,
            "id_course" => $id
        ]);
    }

    public function addLesson()
    {
        // get name course
        if (!empty($_GET['courseId'])) {
            $id_course = $_GET['courseId'];
            $courseName = $this->chapterModel->getDep("courses", $id_course, "id");
        }

        // get name chapter
        if (!empty($_GET['chapterId'])) {
            $id_chapter = $_GET['chapterId'];
            $chapterName = $this->chapterModel->getDep("courses_chapter", $id_chapter, "id");
        }

        // handle sumbit form add lesson
        if (!empty($_POST)) {
            $course_chapter_id = $_POST['chapter_id'];
            $name = $_POST['lesson_name'];
            $path_video = $_POST['lesson_path'];

            $data = [
                "course_chapter_id" => $course_chapter_id,
                "name" => $name,
                "path_video" => $path_video,
            ];

            $this->lessonModel->addNewLesson($data);


            $url = $GLOBALS['domainPage'] . "/admin_lesson?chapterId=$id_chapter&courseId=$id_course";
            header("location: $url");
        }



        return $this->view("admin.pages.lesson.addLesson", [
            "courseName" => $courseName[0]['name'],
            "chapterName" => $chapterName[0]['name'],
            "id_chapter" => $id_chapter,
            "id_course" =>  $id_course
        ]);
    }

    public function updateLesson()
    {

        if (!empty($_GET["lessonId"])) {
            $id_lesson = $_GET["lessonId"];

            $id_chapter = $_GET['chapterId'];
            $dataLesson =  $this->lessonModel->getOneLesson($id_lesson);
        }

        if (!empty($_GET["courseId"])) {
            $id_course = $_GET["courseId"];
        }

        // handle sumbit form 
        if (!empty($_POST)) {
            $course_chapter_id = $_POST['chapter_id'];
            $name = $_POST['lesson_name'];
            $path_video = $_POST['lesson_path'];
            $lesson_id = $_POST['lesson_id'];
            $course_id = $_POST['course_id'];

            $data = [
                "course_chapter_id" => $course_chapter_id,
                "name" => $name,
                "path_video" => $path_video,
            ];

            $this->lessonModel->updateLesson($data, $lesson_id);


            $url = $GLOBALS['domainPage'] . "/admin_lesson?chapterId=$course_chapter_id&courseId= $course_id";
            header("location: $url");
        }
        return $this->view("admin.pages.lesson.updateLesson", [
            "dataLesson" => $dataLesson,
            "id_chapter" => $id_chapter,
            "id_lesson" => $id_lesson,
            "id_course" => $id_course
        ]);
    }
}
