<?php 
class Portfolio extends CI_Controller {

	public function index()
	{
		$data['judul'] = 'Portfolio';
		$this->load->view('templates/header', $data);
		$this->load->view('Portfolio');
		$this->load->view('templates/footer');

	}
}
