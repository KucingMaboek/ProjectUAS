<?php

class Contact extends Controller {
    public function index()
    {
        $this->view('templates/header_a');
        $this->view('contact/contact');
        $this->view('templates/footer_user');
    }

}
