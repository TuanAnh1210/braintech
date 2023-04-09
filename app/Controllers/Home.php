<?php

class Home extends BaseController
{

    private $coursesModel;
    private $detail_courseModel;

    public function __construct()
    {
        $this->loadModel('CoursesModel');
        $this->coursesModel = new CoursesModel;


        $this->loadModel("Detail_courseModel");
        $this->detail_courseModel = new Detail_courseModel;
    }

    public function index()
    {

        $courseNewest = $this->coursesModel->getNewCourse();
        $detail_courses = $this->detail_courseModel->getAll();
        return $this->view('client.index', [
            "courseNewest" => $courseNewest,
            "detail_courses" => $detail_courses
        ]);
    }

    public function about()
    {
        return $this->view('client.pages.about.index');
    }

    public function contact()
    {
        return $this->view('client.pages.contact.index');
    }
}
