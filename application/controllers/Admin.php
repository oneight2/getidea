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
            //basic manual config
            $namaFile = $_FILES['photo']['name'];
            $extensiGambar = explode('.', $namaFile);
            $extensiGambar = strtolower(end($extensiGambar));

            $config['upload_path'] = './img/app';
            $config['allowed_types'] = 'jpg|png|gif|jpeg';
            $config['file_name'] = uniqid() . $extensiGambar;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('photo')) {
                $error = array('error' => $this->upload->display_errors());
                var_dump($error);
                die();
            } else {
                $photo = $this->upload->data('file_name');
            }
        }

        $this->Admin_model->add($photo);
    }
}
