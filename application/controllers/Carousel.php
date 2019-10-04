<?php 
class Carousel extends CI_Controller {

	public function index()
	{
		$data['judul'] = 'Carousel';
		$this->load->view('templates/header', $data);
		$this->load->view('Carousel');
		$this->load->view('templates/footer');

	}
}
