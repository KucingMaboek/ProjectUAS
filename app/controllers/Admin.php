<?php

class Admin extends Controller
{
    public function index()
    {
        $data['total_users'] = count($this->model('User_model')->getAllUsers());
        $data['total_blogs'] = count($this->model('Blog_model')->getAllBlogs());
        $this->view('templates/auth');
        $this->view('templates/header_admin');
        $this->view('templates/sidebar_admin');
        $this->view('admin/dashboard', $data);
        $this->view('templates/footer_admin');
    }

    public function blogs_list()
    {
        $data['blogs'] = $this->model('Blog_model')->getAllBlogs();
        $this->view('templates/auth');
        $this->view('templates/header_admin');
        $this->view('templates/sidebar_admin');
        $this->view('admin/blogs_list', $data);
        $this->view('templates/footer_admin');
    }

    public function create_blog()
    {
        $this->view('templates/auth');
        $this->view('templates/header_admin');
        $this->view('templates/sidebar_admin');
        $this->view('admin/create_blog');
        $this->view('templates/footer_admin');
    }

    public function blog_details($id)
    {
        $data['blogs'] = $this->model('Blog_model')->getAllBlogsById($id);
        $this->view('templates/auth');
        $this->view('templates/header_admin');
        $this->view('templates/sidebar_admin');
        $this->view('admin/blog_details', $data);
        $this->view('templates/footer_admin');
    }

    public function users_list()
    {
        $data['users'] = $this->model('User_model')->getAllUsers();
        $this->view('templates/auth');
        $this->view('templates/header_admin');
        $this->view('templates/sidebar_admin');
        $this->view('admin/users_list', $data);
        $this->view('templates/footer_admin');
    }

    public function create_user()
    {
        $this->view('templates/auth');
        $this->view('templates/header_admin');
        $this->view('templates/sidebar_admin');
        $this->view('admin/create_user');
        $this->view('templates/footer_admin');
    }

    public function user_details($id)
    {
        $data['users'] = $this->model('User_model')->getAllUsersById($id);
        $this->view('templates/auth');
        $this->view('templates/header_admin');
        $this->view('templates/sidebar_admin');
        $this->view('admin/user_details', $data);
        $this->view('templates/footer_admin');
    }

    public function login()
    {
        $this->view('templates/header_admin');
        $this->view('admin/login');
        $this->view('templates/footer_admin');
    }

    public function logout()
    {
        session_start();
        session_destroy();
        header("Location: " . BASEURL . "/Admin/login");
    }

    public function deleteUser($id)
    {
        try {
            $this->model('User_model')->deleteUser($id);
            header("Location: " . BASEURL . "/Admin/users_list");
        } catch (Exception $e) {
            $this->users_list();
            echo '<script type="text/javascript">alert("Failed to execute delete, please delete all blog made by this user first");</script>';
        }
    }

    public function deleteBlog($id)
    {
        try {
            $this->model('Blog_model')->deleteBlog($id);
            header("Location: " . BASEURL . "/Admin/blogs_list");
        } catch (Exception $e) {
            $this->blogs_list();
            echo '<script type="text/javascript">alert("Failed to execute delete, error message: ");</script>';
        }
    }

}
