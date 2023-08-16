<?php

class index
{
    //注册类
    public function __construct()
    {
        var_dump('hello world');
    }

    public function index()
    {
        echo 'headmaster-it/register/index';
    }

    public function edit()
    {
        echo 'headmaster-it/register/edit';
    }
}