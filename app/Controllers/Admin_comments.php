<?php
class Admin_comments extends BaseController
{

    public function index()
    {
        if (!empty($_SESSION["auth"])) {
            return $this->view("admin.pages.comments.index");
        } else {
            $url = $GLOBALS['domainPage'] . "/account";
            header("location: $url");
        }
    }

    public function detailCmt()
    {
        return $this->view("admin.pages.comments.detailCmt");
    }
}
