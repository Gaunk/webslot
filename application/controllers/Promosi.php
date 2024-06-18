<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Promosi extends CI_Controller {

	public function index()
	{
		$data['judul'] = 'Lieurslot - Official Judi Online Terbaik';
		$this->load->view('dashboard/header', $data);
		$this->load->view('dashboard/navbar', $data);
		$this->load->view('promosi', $data);
		$this->load->view('dashboard/footer');
	}
}
