<?php

class Blog extends Controller {
    public function index($page = 1)
    {
        $halaman = 10;
        $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
        $total = count($this->model('Blog_model')->getAllBlogs());
        $data['pages'] = ceil($total/$halaman);
        $data['current_page'] = $page;
        $data['blogs'] = $this->model('Blog_model')->getBlogsByPage($mulai, $halaman);
        $this->view('templates/header_a');
        $this->view('blog/blog', $data);
        $this->view('templates/footer_user');
    }

    public function single_blog($id)
    {
        $data['blog'] = $this->model('Blog_model')->getAllBlogsById($id);
        $this->view('templates/header_b');
        $this->view('blog/single_blog', $data);
        $this->view('templates/footer_user');
    }

}
