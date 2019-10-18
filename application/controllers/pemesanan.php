<?php
class Pemesanan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Pemesanan_model');
		$this->load->helper(array('form', 'url'));
	}

	public function index()
	{
		$data['judul'] = 'Pemesanan';
		$this->load->view('templates/header', $data);
		$this->load->view('Pemesanan');
		$this->load->view('templates/footer');
	}

	public function komplain()
	{
		$this->Pemesanan_model->add();
		$id = $this->Pemesanan_model->getData();
		// var_dump($id[0]['id']);
		// die;
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
			$config['upload_path'] = './img/komplain';
			$config['allowed_types'] = 'jpg|png|gif|jpeg';
			$config['file_name'] = uniqid() . $extensiGambar;

			$this->load->library('upload', $config);
			$this->upload->initialize($config);


			if ($this->upload->do_upload('file')) {
				$fileData = $this->upload->data();

				//membuat variable untuk ke database
				$dataGambar[$i]['gambar'] = $fileData['file_name'];
				$dataGambar[$i]['id_komplain'] = $id[0]['id'];
			}

		endfor;

		if ($dataGambar !== null) {
			$insert = $this->Pemesanan_model->addMultiple($dataGambar);
			if ($insert) {
				redirect('admin/gambar');
			} else {
				echo "gagal, mungkin bukan gambar.";
				die();
			}
		}
	}
}
