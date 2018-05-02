<?php

class Home extends Controller
{
    private $url;
    public function __construct()
    {
        $this->url = new Config();
    }

    public function index()
    {
        $this->view('default');
    }
}