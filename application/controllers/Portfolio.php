<?php
class Portfolio extends CI_Controller
{

	public function index()
	{
		$this->load->model('Portfolio_model');
		$data['aplikasi'] = $this->Portfolio_model->getAll('aplikasi');

		$data['judul'] = 'Portfolio';
		$this->load->view('templates/header', $data);
		$this->load->view('Portfolio');
		$this->load->view('templates/footer');
	}
}
