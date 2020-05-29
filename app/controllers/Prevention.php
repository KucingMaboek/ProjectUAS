<?php

class Prevention extends Controller {
    public function index()
    {
        $this->view('templates/header');
        $this->view('prevention/prevention');
        $this->view('templates/footer');
    }

    public function symptoms()
    {
        $this->view('templates/header');
        $this->view('prevention/symptoms');
        $this->view('templates/footer');
    }

    public function symptom_checker()
    {
        $this->view('templates/header');
        $this->view('prevention/symptom_checker');
        $this->view('templates/footer');
    }

    public function virus_checker()
    {
        $this->view('prevention/virus_checker');
    }

    public function tracker()
    {
        $this->view('templates/header');
        $this->view('prevention/tracker');
        $this->view('templates/footer');
    }

    public function faq()
    {
        $this->view('templates/header');
        $this->view('prevention/faq');
        $this->view('templates/footer');
    }
}
