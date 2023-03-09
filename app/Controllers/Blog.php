<?php
class Blog extends BaseController
{
    private $coursesModel;

    // public function __construct()
    // {
    //     $this->loadModel('CoursesModel');
    //     $this->coursesModel = new CoursesModel;
    // }

    public function index()
    {
        return $this->view('client.pages.blog.index');
    }
    public function blogct(){
        return $this->view('client.pages.blog.blogct');
    }
    public function blogct1(){
        return $this->view('client.pages.blog.blogct1');
    }
    public function blogct2(){
        return $this->view('client.pages.blog.blogct2');
    }
    public function blogct3(){
        return $this->view('client.pages.blog.blogct3');
    }
    public function backend(){
        return $this->view('client.pages.blog.backend');
    }
    public function frontend(){
        return $this->view('client.pages.blog.frontend');
    }
    public function ui(){
        return $this->view('client.pages.blog.ui');
    }
    public function other(){
        return $this->view('client.pages.blog.other');
    }
    
}
