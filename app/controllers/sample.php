<?php

class Sample extends Controller
{

    public function index()
    {
        $this->view('default');
    }

    public function sample()
    {
        echo 'hi';
    }
}