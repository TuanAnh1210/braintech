<?php

class Home extends BaseController
{

    private $coursesModel;

    public function __construct()
    {
        $this->loadModel('CoursesModel');
        $this->coursesModel = new CoursesModel;
    }

    public function index()
    {

        $courseNewest = $this->coursesModel->getNewCourse();
        return $this->view('client.index', [
            "courseNewest" => $courseNewest
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
