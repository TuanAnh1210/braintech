<?php
class Courses extends BaseController
{
    private $coursesModel;
    private $chapterModel;
    private $lessonModel;
    private $buy_CoursesModel;
    private $usersModel;

    public function __construct()
    {
        $this->loadModel('CoursesModel');
        $this->coursesModel = new CoursesModel;

        $this->loadModel('ChapterModel');
        $this->chapterModel = new ChapterModel;

        $this->loadModel('LessonModel');
        $this->lessonModel = new LessonModel;

        $this->loadModel('Buy_courses');
        $this->buy_CoursesModel = new Buy_courses;

        $this->loadModel('UsersModel');
        $this->usersModel = new UsersModel;
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
                $id_user = $_SESSION["auth"]["id"];

                $course = $this->chapterModel->getFullChapterByCourseId($id_course);

                $isBought = $this->buy_CoursesModel->getCourseBought($id_course, $id_user);


                $lesson_list = $this->lessonModel->getFullLesson();
            }
            return $this->view('client.pages.courses.detailCourse', [
                "course" => $course,
                "lesson_list" => $lesson_list,
                "isBought" => $isBought
            ]);
        } else {
            $url = $GLOBALS['domainPage'] . "/account";
            header("location: $url");
        }
    }


    public function buyCourse()
    {
        if (!empty($_GET)) {
            $id_course = $_GET["courseId"];
            $id_user = $_GET["userId"];

            $course = $this->coursesModel->getCourseById($id_course);

            $userInfo = $this->usersModel->getOne($id_user);

            payCourse("index", [
                "course" => $course,
                "userInfo" => $userInfo,
            ]);
        }
    }

    public function buySuccess()
    {
        if (!empty($_GET)) {
            $courseId = $_GET["courseId"];
            $userId = $_GET["userId"];
            $codeBill = $_GET["codeBill"];
            $contentBill = $_GET["contentBill"];

            // handle update buy_CoursesModel
            $data = [
                "date_pay" => date("Y-m-d H:i:s"),
                "code_bill" => $codeBill,
                "content_bill" => $contentBill,
                "id_course" => $courseId,
                "id_user" => $userId,
            ];


            $this->buy_CoursesModel->buySuccess($data);

            $url = $GLOBALS['domainPage'] . "/courses/detailCourse?courseId=$courseId";
            header("location: $url");
        }
    }
}