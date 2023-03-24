<?php 
    class Admin_statistical extends BaseController {
        public function index() {
            return $this -> view("admin.pages.statistical.index");
        }
    }
