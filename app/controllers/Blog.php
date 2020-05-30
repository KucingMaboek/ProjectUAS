<?php

class Blog extends Controller {
    public function index()
    {
        $this->view('templates/header_a');
        $this->view('blog/blog');
        $this->view('templates/footer');
    }

    public function single_blog()
    {
        $this->view('templates/header_b');
        $this->view('blog/single_blog');
        $this->view('templates/footer');
    }

}
