<?php
class Write extends BaseController
{
    // private $coursesModel;

    // public function __construct()
    // {
    //     $this->loadModel('CoursesModel');
    //     $this->coursesModel = new CoursesModel;
    // }

    public function index()
    {
        return $this->view('client.pages.write.index');
    }
}
