<?php 
    class Info extends BaseController {
        public function index() {
            return $this -> view("client.pages.info.index");
        }
    }