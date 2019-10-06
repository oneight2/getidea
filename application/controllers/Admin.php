<?php
class Admin extends CI_Controller
{

    public function index()
    {
        $this->load->view('templatesAdmin/header', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templatesAdmin/footer');
    }
}
