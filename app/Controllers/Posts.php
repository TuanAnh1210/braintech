<?php
class Posts extends BaseController
{
    private $coursesModel;

    // public function __construct()
    // {
    //     $this->loadModel('CoursesModel');
    //     $this->coursesModel = new CoursesModel;
    // }

    public function index()
    {
        return $this->view('client.pages.posts.index');
    }
    public function published(){
        return $this->view('client.pages.posts.published');
    }
    public function postsSaved(){
        return $this->view('client.pages.posts.postsSaved');
    }
    
}
