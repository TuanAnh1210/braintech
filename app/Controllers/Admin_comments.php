<?php 
    class Admin_comments extends BaseController {

        public function index() {
            return $this -> view("admin.pages.comments.index");
        }
    }
