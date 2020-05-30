<?php

class Appointment extends Controller {
    public function index()
    {
        $this->view('templates/header_a');
        $this->view('appointment/appointment');
        $this->view('templates/footer');
    }

}
