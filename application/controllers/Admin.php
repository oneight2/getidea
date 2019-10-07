<?php
class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');
    }

    public function index()
    {

        if (isset($_POST)) {
            if ($this->Admin_model->login()) {
                $this->session->set_userdata('login', true);
                redirect('admin/aplikasi');
            }
        }

        $data['judul'] = 'Login';
        $this->load->view('templatesAdmin/header', $data);
        $this->load->view('admin/index');
        $this->load->view('templatesAdmin/footer');
    }

    public function aplikasi()
    {
        $data['judul'] = 'Pengelolaan Aplikasi';
        $this->load->view('templatesAdmin/header', $data);
        $this->load->view('templatesAdmin/sidebar');
        $this->load->view('admin/aplikasi');
        $this->load->view('templatesAdmin/footer');
    }
}
