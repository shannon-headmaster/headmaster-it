<?php

class Index
{
        public function __construct()
        {
                var_dump('hello world');
        }

        public function index()
        {
                echo 'headmaster-it/index/index';
        }

        public function edit()
        {
                echo 'headmaster-it/index/edit';
        }

        public function delete()
        {
                echo 'headmaster-it/index/delete';
        }
}