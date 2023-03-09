<?php
class Admin_chapter extends BaseController
{
    public function index()
    {
        return $this->view("admin.pages.chapter.index");
    }

    public function addChapter()
    {
        return $this->view("admin.pages.chapter.addChapter");
    }

    public function updateChapter()
    {
        return $this->view("admin.pages.chapter.updateChapter");
    }
}