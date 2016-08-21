<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subjects extends CI_Controller {

    public function index()
    {
        //Load Template
        $this->template->load('admin', 'default', 'subjects/index');
    }

    public function add()
    {
        //Load Template
        $this->template->load('admin', 'default', 'subjects/add');
    }

    public function edit()
    {
        //Load Template
        $this->template->load('admin', 'default', 'subjects/edit');
    }

    public function delete()
    {

    }
}
