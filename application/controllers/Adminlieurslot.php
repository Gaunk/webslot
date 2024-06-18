<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminlieurslot extends CI_Controller {

	public function index()
	{
		$data['judul'] = 'Admin Panel - Situs Bandar Judi Online Terbaik';
		
		$this->load->view('adminlieurslot', $data);
	}

	
}
