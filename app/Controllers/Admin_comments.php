<?php
class Admin_comments extends BaseController
{

    public function index()
    {
        return $this->view("admin.pages.comments.index");
    }

    public function detailCmt()
    {
        return $this->view("admin.pages.comments.detailCmt");
    }
}