<?php
class Learning extends BaseController
{

    private $lessonModel;

    public function __construct()
    {
    }

    public function index()
    {
        return $this->view('client.pages.learning.index');
    }
}