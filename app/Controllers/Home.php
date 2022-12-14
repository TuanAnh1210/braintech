<?php

class Home extends BaseController
{

    private $homeModel;

    public function __construct()
    {
        $this->loadModel('HomeModel');
        $this->homeModel = new HomeModel;
    }

    public function index()
    {
        return $this->view('client.index');
    }
}