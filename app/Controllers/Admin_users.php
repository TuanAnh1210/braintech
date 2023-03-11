<?php
class Admin_users extends BaseController
{
    public function index()
    {
        return $this->view("admin.pages.users.index");
    }
    public function updateUsers()
    {
        return $this->view("admin.pages.users.updateUsers");
    }

    public function addUsers()
    {
        return $this->view("admin.pages.users.addUsers");
    }
}