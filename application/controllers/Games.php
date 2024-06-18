<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Games extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('Games_model', 'users_sub_menu_games');
		$this->load->model('Games_model', 'users_games');
		$data['judul'] = 'Lieurslot - Official Judi Online Terbaik';
		$data['users_sub_menu_games'] = $this->users_sub_menu_games->getAllGames();
		$data['users_games'] = $this->users_games->getAllGamesJoin();
		$this->load->view('dashboard/header', $data);
		$this->load->view('dashboard/navbar', $data);
		$this->load->view('games', $data);
		$this->load->view('dashboard/footer');
	}

	function tambahgames()
	{
		$data['judul'] = 'Lieurslot - Official Judi Online Terbaik';
		$this->load->view('dashboard/header', $data);
		$this->load->view('dashboard/navbar', $data);
		$this->load->view('tambahgames', $data);
		$this->load->view('dashboard/footer');
	}

	function subgames()
	{
		$data['judul'] = 'Lieurslot - Official Judi Online Terbaik';
		$this->load->view('dashboard/header', $data);
		$this->load->view('dashboard/navbar', $data);
		$this->load->view('subgames', $data);
		$this->load->view('dashboard/footer');
	}
}
