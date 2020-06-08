<?php

class Admin extends Controller
{
    public function index()
    {
        $data['total_users'] = count($this->model('User_model')->getAllUsers());
        $data['total_blogs'] = count($this->model('Blog_model')->getAllBlogs());
        $data['total_appointment'] = count($this->model('Appointment_model')->getAllAppointments());
        $data['total_message'] = count($this->model('Message_model')->getAllMessages());
        $this->view('templates/auth');
        $this->view('templates/header_admin');
        $this->view('templates/sidebar_admin');
        $this->view('admin/dashboard', $data);
        $this->view('templates/footer_admin');
    }

    public function users_list()
    {
        $this->view('templates/auth');
        if ($_SESSION['user']['role'] == 'Administrator') {
            $data['users'] = $this->model('User_model')->getAllUsers();
            $this->view('templates/header_admin');
            $this->view('templates/sidebar_admin');
            $this->view('admin/users_list', $data);
            $this->view('templates/footer_admin');
        } else {
            header("Location: " . BASEURL . "/Admin");
        }
    }

    public function create_user()
    {
        $this->view('templates/auth');
        if ($_SESSION['user']['role'] == 'Administrator') {
            $this->view('templates/header_admin');
            $this->view('templates/sidebar_admin');
            $this->view('admin/create_user');
            $this->view('templates/footer_admin');
        } else {
            header("Location: " . BASEURL . "/Admin");
        }
    }

    public function user_details($id)
    {
        $this->view('templates/auth');
        if ($_SESSION['user']['role'] == 'Administrator') {
            $data['users'] = $this->model('User_model')->getAllUsersById($id);
            $this->view('templates/header_admin');
            $this->view('templates/sidebar_admin');
            $this->view('admin/user_details', $data);
            $this->view('templates/footer_admin');
        } else {
            header("Location: " . BASEURL . "/Admin");
        }
    }

    public function deleteUser($id)
    {
        $this->view('templates/auth');
        if ($_SESSION['user']['role'] == 'Administrator') {
            try {
                $this->model('User_model')->deleteUser($id);
                header("Location: " . BASEURL . "/Admin/users_list");
            } catch (Exception $e) {
                $this->users_list();
                echo '<script type="text/javascript">alert("Failed to execute delete, please delete all blog made by this user first");</script>';
            }
        } else {
            header("Location: " . BASEURL . "/Admin");
        }
    }

    public function blogs_list()
    {
        $this->view('templates/auth');
        if ($_SESSION['user']['role'] == 'Administrator') {
            $data['blogs'] = $this->model('Blog_model')->getAllBlogs();
        } else {
            $data['blogs'] = $this->model('Blog_model')->getAllBlogsByAuthId($_SESSION['user']['id']);
        }
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
        $this->view('templates/auth');
        $data['blogs'] = $this->model('Blog_model')->getAllBlogsById($id);
        if ($data['blogs']['authId'] == $_SESSION['user']['id']) {
            $this->view('templates/header_admin');
            $this->view('templates/sidebar_admin');
            $this->view('admin/blog_details', $data);
            $this->view('templates/footer_admin');
        } else {
            header("Location: " . BASEURL . "/Admin");
        }
    }

    public function deleteBlog($id)
    {
        $this->view('templates/auth');
        $data['blogs'] = $this->model('Blog_model')->getAllBlogsById($id);
        if ($data['blogs']['authId'] == $_SESSION['user']['id'] || $_SESSION['user']['role']=='Administrator') {
            try {
                $this->model('Blog_model')->deleteBlog($id);
                header("Location: " . BASEURL . "/Admin/blogs_list");
            } catch (Exception $e) {
                $this->blogs_list();
                echo '<script type="text/javascript">alert("Failed to execute delete");</script>';
            }
        } else {
            header("Location: " . BASEURL . "/Admin");
        }
    }

    public function appointments_list()
    {
        $this->view('templates/auth');
        $data['appointments'] = $this->model('Appointment_model')->getAllAppointments();
        $this->view('templates/header_admin');
        $this->view('templates/sidebar_admin');
        $this->view('admin/appointments_list', $data);
        $this->view('templates/footer_admin');
    }

    public function appointment_details($id)
    {
        $this->view('templates/auth');
        $data['appointments'] = $this->model('Appointment_model')->getAllAppointmentsById($id);
        $this->view('templates/header_admin');
        $this->view('templates/sidebar_admin');
        $this->view('admin/appointment_details', $data);
        $this->view('templates/footer_admin');
    }

    public function deleteAppointment($id)
    {
        $this->view('templates/auth');
        try {
            $this->model('Appointment_model')->deleteAppointment($id);
            header("Location: " . BASEURL . "/Admin/appointments_list");
        } catch (Exception $e) {
            $this->blogs_list();
            echo '<script type="text/javascript">alert("Failed to execute delete");</script>';
        }
    }

    public function messages_list()
    {
        $this->view('templates/auth');
        $data['messages'] = $this->model('Message_model')->getAllMessages();
        $this->view('templates/header_admin');
        $this->view('templates/sidebar_admin');
        $this->view('admin/messages_list', $data);
        $this->view('templates/footer_admin');
    }

    public function message_details($id)
    {
        $this->view('templates/auth');
        $data['messages'] = $this->model('Message_model')->getAllMessagesById($id);
        $this->view('templates/header_admin');
        $this->view('templates/sidebar_admin');
        $this->view('admin/message_details', $data);
        $this->view('templates/footer_admin');
    }

    public function deleteMessage($id)
    {
        $this->view('templates/auth');
        try {
            $this->model('Message_model')->deleteMessage($id);
            header("Location: " . BASEURL . "/Admin/messages_list");
        } catch (Exception $e) {
            $this->blogs_list();
            echo '<script type="text/javascript">alert("Failed to execute delete");</script>';
        }
    }

    public function edit_profile()
    {
        $this->view('templates/auth');
        $data['users'] = $_SESSION["user"];
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


}
