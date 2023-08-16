<?php

class resume
{
        public function __construct()
        {
                var_dump('hello world');
        }

        public function index()
        {
                echo 'headmaster-it/resume/index';
        }

        public function edit()
        {
                echo 'headmaster-it/resume/edit';
        }

        public function delete()
        {
                echo 'headmaster-it/resume/delete';
        }
}