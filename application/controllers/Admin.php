<?php
class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');
        $this->load->helper(array('form', 'url'));
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
        $data['aplikasi'] = $this->Admin_model->getAllApp();

        $this->load->view('templatesAdmin/header', $data);
        $this->load->view('templatesAdmin/sidebar');
        $this->load->view('admin/aplikasi');
        $this->load->view('templatesAdmin/footer');
    }

    public function add_data()
    {
        $photo = $_FILES['photo'];

        //upload file
        if (!$photo == '') {
            $config['upload_path'] = base_url() . 'img/app/';
            $config['allowes_types'] = 'jpg|png|gif|jpeg';

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('photo')) { //didieu gagal wae
                $photo = $this->upload->data('file_name');
                var_dump($photo);
            } else {
                $photo = $this->upload->data('file_name');
            }
        }

        $this->Admin_model->add($photo);
    }
}
