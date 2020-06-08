<?php

class Pages extends Controller {
    public function index()
    {
        $this->view('templates/header_a');
        $this->view('pages/about');
        $this->view('templates/footer_user');
    }

    public function doctors()
    {
        $this->view('templates/header_a');
        $this->view('pages/doctors');
        $this->view('templates/footer_user');
    }

}
