<?php
class Admin_dashboard extends BaseController
{

    public function index()
    {
        if (!empty($_SESSION["auth"])) {
            return $this->view("admin.index");
        } else {
            $url = $GLOBALS['domainPage'] . "/account";
            header("location: $url");
        }
    }
}
