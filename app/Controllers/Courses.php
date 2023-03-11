<?php
class Courses extends BaseController
{
    private $coursesModel;

    public function __construct()
    {
        $this->loadModel('CoursesModel');
        $this->coursesModel = new CoursesModel;
    }

    public function index()
    {

        return $this->view('client.pages.courses.index');
    }


    public function detailCoursess()
    {
        return $this->view('client.pages.courses.detailCourses');
    }
}
