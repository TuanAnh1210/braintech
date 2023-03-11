<?php
class Account extends BaseController
{

    private $accountModel;


    public function __construct()
    {
        $this->loadModel('AccountModel');
        $this->accountModel = new AccountModel;
    }

    public function index()
    {
        return $this->view('client.pages.account.index');
    }

    public function verification()
    {
        return $this->view('client.pages.account.verification');
    }

}