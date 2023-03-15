<?php
class Admin_dashboard extends BaseController
{

    public function index()
    {
        if (!empty($_SESSION["auth"]) && !empty($_SESSION["auth"]['role']) == 0) {
            return $this->view("admin.index");
        } else if (!empty($_SESSION["auth"]) && !empty($_SESSION["auth"]['role']) == 1) {
            echo "<h2>Tài khoản này không có quyền quản trị</h2>";
        } else {
            $url = $GLOBALS['domainPage'] . "/account";
            header("location: $url");
        }
    }
}