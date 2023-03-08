<?php
class Admin_courses extends BaseController
{

    public function index()
    {
        return $this->view("admin.pages.courses.index");
    }

    public function updateCourse()
    {
        return $this->view("admin.pages.courses.updateCourse");
    }

    public function addCourse()
    {
        return $this->view("admin.pages.courses.addCourse");
    }
}
