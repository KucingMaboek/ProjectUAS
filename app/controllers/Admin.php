<?php

class Admin extends Controller {
    public function index()
    {
        $this->view('adin/index');
    }

    public function login()
    {
        $this->view('admin/login');
    }

}
