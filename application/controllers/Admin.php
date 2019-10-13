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
        $data['aplikasi'] = $this->Admin_model->getAllData('aplikasi');

        $this->load->view('templatesAdmin/header', $data);
        $this->load->view('templatesAdmin/sidebar');
        $this->load->view('admin/aplikasi');
        $this->load->view('templatesAdmin/footer');
    }

    public function gambar()
    {
        $data['judul'] = 'Pengelolaan Gambar Aplikasi';
        $data['aplikasi'] = $this->Admin_model->getAllData('aplikasi');
        $data['gambar'] = $this->Admin_model->getAllData('gambar');

        $this->load->view('templatesAdmin/header', $data);
        $this->load->view('templatesAdmin/sidebar');
        $this->load->view('admin/gambar');
        $this->load->view('templatesAdmin/footer');
    }

    public function addData()
    {
        $photo = $_FILES['photo'];

        //upload file
        if (!$photo == '') {
            //pengambilan extensi
            $namaFile = $_FILES['photo']['name'];
            $extensiGambar = explode('.', $namaFile);
            $extensiGambar = strtolower(end($extensiGambar));

            //config upload
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
        redirect('admin/aplikasi');
    }

    public function addDataMultiple()
    {
        $jumlahData = count($_FILES['gambar']['name']);

        for ($i = 0; $i < $jumlahData; $i++) :
            //inisialisasi pengambilan data
            $_FILES['file']['name'] = $_FILES['gambar']['name'][$i];
            $_FILES['file']['type'] = $_FILES['gambar']['type'][$i];
            $_FILES['file']['tmp_name'] = $_FILES['gambar']['tmp_name'][$i];
            $_FILES['file']['size'] = $_FILES['gambar']['size'][$i];

            //pengambilan extensi
            $namaFile = $_FILES['file']['name'];
            $extensiGambar = explode('.', $namaFile);
            $extensiGambar = strtolower(end($extensiGambar));

            //config upload
            $config['upload_path'] = './img/moreApp';
            $config['allowed_types'] = 'jpg|png|gif|jpeg';
            $config['file_name'] = uniqid() . $extensiGambar;

            $this->load->library('upload', $config);
            $this->upload->initialize($config);


            if ($this->upload->do_upload('file')) {
                $fileData = $this->upload->data();

                //membuat variable untuk ke database
                $dataGambar[$i]['gambar'] = $fileData['file_name'];
                $dataGambar[$i]['id_aplikasi'] =  $this->input->post('aplikasi', true);
            }

        endfor;

        if ($dataGambar !== null) {
            $insert = $this->Admin_model->addMultiple($dataGambar);
            if ($insert) {
                redirect('admin/gambar');
            } else {
                echo "gagal, mungkin bukan gambar.";
                die();
            }
        }
    }

    public function deleteData($id, $photo)
    {
        $this->Admin_model->delete($id);
        unlink('./img/app/' . $photo);
        redirect('admin/aplikasi');
    }

    public function editPage($id)
    {
        $data['judul'] = 'Edit Aplikasi';
        $data['aplikasi'] = $this->Admin_model->getDataById($id);

        $this->load->view('templatesAdmin/header', $data);
        $this->load->view('templatesAdmin/sidebar');
        $this->load->view('admin/editAplikasi');
        $this->load->view('templatesAdmin/footer');
    }

    public function editData()
    {
        $photo_old = $this->input->post('photo_old', true);
        //upload file
        if ($_FILES['photo']['error'] === 4) {
            $photo = $_POST['photo_old'];
        } else {
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
            unlink('./img/app/' . $photo_old);
        }

        $this->Admin_model->edit($photo);
        redirect('admin/aplikasi');
    }
}
