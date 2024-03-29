<?php
class Admin_comments extends BaseController
{
    private $commentsmodels;
    public function __construct()
    {
        $this->loadModel("CommentsModel");
        $this->commentsmodels = new CommentsModel;
    }
    public function index()
    {
        if (!empty($_SESSION["auth"])) {
            $data = $this->commentsmodels->getAllCmt();

            return $this->view("admin.pages.comments.index", [
                "data" => $data
            ]);
        } else {
            $url = $GLOBALS['domainPage'] . "/account";
            header("location: $url");
        }
    }

    public function detailCmt()
    {
        if (!empty($_GET["id_lesson"])) {
            $id = $_GET["id_lesson"];
            $data = $this->commentsmodels->getDetailCmt($id);
        }
        return $this->view("admin.pages.comments.detailCmt", ["data" => $data]);
    }

    public function deleteCmt()
    {
        if (!empty($_GET["idCmt"]) && !empty($_GET["idLesson"])) {
            $id = $_GET["idCmt"];
            $id_lesson = $_GET["idLesson"];
            $this->commentsmodels->deleteCmts($id);
            $url = $GLOBALS['domainPage'] . "/admin_comments/detailCmt?id_lesson=$id_lesson";
            header("location: $url");
        }
    }
}