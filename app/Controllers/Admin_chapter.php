<?php
class Admin_chapter extends BaseController
{
    private $chapterModel;

    public function __construct()
    {
        $this->loadModel("ChapterModel");
        $this->chapterModel = new ChapterModel;
    }

    public function index()
    {

        // get id chapter on url
        if (!empty($_GET['CourseId'])) {
            $id = $_GET['CourseId'];
            $data = $this->chapterModel->getChapter();
            $courseName = $this->chapterModel->getDep("courses", $id, "id");
        }


        return $this->view("admin.pages.chapter.index", [
            "id" => $id,
            "data" => $data,
            "courseName" => $courseName[0]['name']

        ]);
    }

    public function addChapter()
    {

        // get name course
        if (!empty($_GET['courseId'])) {
            $id = $_GET['courseId'];
            $courseName = $this->chapterModel->getDep("courses", $id, "id");
        }

        // add new chapter
        if (!empty($_POST["chapter_name"])) {
            $name = $_POST["chapter_name"];
            $id = $_POST["courses_id"];

            $data = [
                'name' => $name,
                'courses_id' => $id
            ];


            $this->chapterModel->addNewChapter($data);

            $url = $GLOBALS['domainPage'] . "/admin_chapter?CourseId=$id";
            header("location: $url");
        }
        return $this->view("admin.pages.chapter.addChapter", [
            "coureseId" => $id,
            "courseName" => $courseName[0]['name']

        ]);
    }

    public function updateChapter()
    {

        // get name course
        if (!empty($_GET['courseId'])) {
            $ids = $_GET['courseId'];
            $courseName = $this->chapterModel->getDep("courses", $ids, "id");
        }

        if (!empty($_GET['chapterId'])) {
            $id = $_GET['chapterId'];

            $data = $this->chapterModel->getOneChapter($id);
        }

        if (!empty($_POST["chapter_name"]) && !empty($_POST["chapter_id"])) {
            $name = $_POST["chapter_name"];
            $id = $_POST["chapter_id"];

            $data = [
                'name' => $name,
            ];

            $this->chapterModel->updateChapter($data, $id);

            $url = $GLOBALS['domainPage'] . "/admin_chapter?CourseId=$ids";
            header("location: $url");
        }
        return $this->view("admin.pages.chapter.updateChapter", [
            'idChapter' => $id,
            "data" => $data,
            "courseName" => $courseName[0]['name']
        ]);
    }
}
