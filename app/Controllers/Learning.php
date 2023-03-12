<?php
class Learning extends BaseController
{

    private $lessonModel;
    private $detail_courseModel;
    private $chapterModel;

    public function __construct()
    {
        $this->loadModel("Detail_courseModel");
        $this->detail_courseModel = new Detail_courseModel;

        $this->loadModel("ChapterModel");
        $this->chapterModel = new ChapterModel;

        $this->loadModel("LessonModel");
        $this->lessonModel = new LessonModel;
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
        }
        return $this->view('client.pages.learning.index', [
            "course" => $course,
            "lesson_list" => $lesson_list,
            "curLesson" => $curLesson,
            "id_lesson" => $id_lesson
        ]);
    }
}
