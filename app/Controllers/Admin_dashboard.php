<?php 
    class Admin_dashboard extends BaseController {

        public function index() {
            return $this -> view("admin.index");
        }
    }