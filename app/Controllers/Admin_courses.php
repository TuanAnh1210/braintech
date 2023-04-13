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
        if (!empty($_SESSION['auth'])) {
            $courseFe = $this->coursesModel->getCourse(1, "cate_id");

            $courseBe = $this->coursesModel->getCourse(2, "cate_id");
            $coursePro = $this->coursesModel->getCourse(3, "cate_id");


            return $this->view("admin.pages.courses.index", [
                "courseFe" => $courseFe,
                "courseBe" => $courseBe,
                "coursePro" => $coursePro,
            ]);
        } else {
            $url = $GLOBALS['domainPage'] . "/account";
            header("location: $url");
        }
    }

    public function updateCourse()
    {
        if (!empty($_GET["courseId"]) && !empty($_GET["cateId"])) {
            $id_course = $_GET["courseId"];
            $id_cate = $_GET["cateId"];

            $data = $this->coursesModel->getOneCourse($id_course);
        }

        // handle update course
        if (!empty($_POST)) {
            if (!empty($_POST['course_curImg'])) {

                $newAvatar = $_POST['course_curImg'];
            } else {
                $newAvatar = $_POST["old_img"];
            }

            $id = $_POST["id_course"];
            $name = $_POST['course_name'];
            $thumb = $newAvatar;
            $price = $_POST['course_price'];
            $old_price = $_POST['course_oldPrice'];
            $description = $_POST['course_description'];
            $cate_id = $_POST['cate_id'];

            $data = [
                "name" => $name,
                "thumb" => $thumb,
                "price" => $price,
                "old_price" => $old_price,
                "description" => $description,
                "cate_id" => $cate_id,
            ];

            $this->coursesModel->updateCourse($data, $id);

            $url = $GLOBALS['domainPage'] . "/admin_courses";
            header("location: $url");
        }

        return $this->view("admin.pages.courses.updateCourse", [
            "data" => $data,
            "id_cate" => $id_cate,
            "id_course" =>  $id_course
        ]);
    }

    public function addCourse()
    {
        if (!empty($_GET['cateId'])) {
            $cateId = $_GET['cateId'];
        }

        // handle add new course
        if (!empty($_POST)) {


            $name = $_POST['course_name'];
            $thumb = $_POST['course_curImg'];
            $price = $_POST['course_price'];
            $old_price = $_POST['course_oldPrice'];
            $description = $_POST['course_description'];
            $cate_id = $_POST['cate_id'];

            $data = [
                "name" => $name,
                "thumb" => $thumb,
                "price" => $price,
                "old_price" => $old_price,
                "description" => $description,
                "cate_id" => $cate_id,
            ];

            $this->coursesModel->addNewCourse($data);

            $url = $GLOBALS['domainPage'] . "/admin_courses";
            header("location: $url");
        }
        return $this->view("admin.pages.courses.addCourse", [
            "cateId" =>  $cateId
        ]);
    }

    public function deleteCourse()
    {
        if (!empty($_GET["courseId"])) {
            $id_course = $_GET['courseId'];

            $this->coursesModel->deleteCourse($id_course);

            $url = $GLOBALS['domainPage'] . "/admin_courses";
            header("location: $url");
        }
    }
}
