<?php

class Pages extends Controller {
    public function index()
    {
        $this->view('templates/header');
        $this->view('pages/about');
        $this->view('templates/footer');
    }

    public function doctors()
    {
        $this->view('templates/header');
        $this->view('pages/doctors');
        $this->view('templates/footer');
    }

}
