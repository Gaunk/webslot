<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rekening_anggota extends CI_Controller {

	public function index()
	{
		$data['judul'] = 'Lieurslot - Official Judi Online Terbaik';
		$this->load->view('dashboard/header', $data);
		$this->load->view('dashboard/navbar', $data);
		$this->load->view('rekening_anggota', $data);
		$this->load->view('dashboard/footer');
	}
}
