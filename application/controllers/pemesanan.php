<?php 
class pemesanan extends CI_Controller {

	public function index()
	{
		$data['judul'] = 'Pemesanan';
		$this->load->view('templates/header', $data);
		$this->load->view('Pemesanan');
		$this->load->view('templates/footer');

	}
}
