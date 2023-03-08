<?php 
    class Admin_courses extends BaseController {

        public function index() {
            return $this -> view("admin.pages.courses.index");
        }
    }