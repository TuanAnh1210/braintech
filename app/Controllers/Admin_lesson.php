<?php
class Admin_lesson extends BaseController
{
    public function index()
    {
        return $this->view("admin.pages.lesson.index");
    }

    public function addLesson()
    {
        return $this->view("admin.pages.lesson.addLesson");
    }

    public function updateLesson()
    {
        return $this->view("admin.pages.lesson.updateLesson");
    }
}