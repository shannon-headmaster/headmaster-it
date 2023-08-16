<?php

class Index
{
public function __construct()
    {
        var_dump('hello world');
    }

    public function index()
    {
        echo 'headmaster-it/queue/index';
    }

    public function edit()
    {
        echo 'headmaster-it/queue/edit';
    }

    public function delete()
    {
        echo 'headmaster-it/queue/delete';
    }
}