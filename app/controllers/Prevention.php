<?php

class Prevention extends Controller {
    public function index()
    {
        $this->view('templates/header_b');
        $this->view('prevention/prevention');
        $this->view('templates/footer_user');
    }

    public function symptoms()
    {
        $this->view('templates/header_a');
        $this->view('prevention/symptoms');
        $this->view('templates/footer_user');
    }

    public function symptom_checker()
    {
        $this->view('templates/header_b');
        $this->view('prevention/symptom_checker');
        $this->view('templates/footer_user');
    }

    public function virus_checker()
    {
        $this->view('prevention/virus_checker');
    }

    public function tracker()
    {
        $this->view('templates/header_a');
        $this->view('prevention/tracker');
        $this->view('templates/footer_user');
    }

    public function faq()
    {
        $data['blogs'] = $this->model('Blog_model')->getBlogsByPage(0, 10);
        $this->view('templates/header_b');
        $this->view('prevention/faq', $data);
        $this->view('templates/footer_user');
    }
}
