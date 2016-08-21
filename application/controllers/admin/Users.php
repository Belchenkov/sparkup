<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

    public function index()
    {
        //Load Template
        $this->template->load('admin', 'default', 'users/index');
    }

    public function add()
    {
        //Load Template
        $this->template->load('admin', 'default', 'users/add');
    }

    public function edit()
    {
        //Load Template
        $this->template->load('admin', 'default', 'users/edit');
    }

    public function delete()
    {

    }

    public function login()
    {

    }

    public function logout()
    {

    }
}
