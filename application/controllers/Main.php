<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}

	public function index()
	{
		$_SESSION['user'] = "";
		$this->load->model('banner_m');
		$this->load->model('partner_m');
		$this->load->model('testimony_m');

		$banners = $this->banner_m->get();
		$partners = $this->partner_m->get();
		$testimonies = $this->testimony_m->get();

		$this->load->view('main', array(
			'banners' => $banners,
			'partners' => $partners,
			'testimonies' => $testimonies,
			'content' => 'home'
		));		
	}

	public function logged(){
		if($_SESSION['user'] === ""){
			$this->login();

			return false;
		}

		return true;
	}

	public function login_send(){
		$data = $this->input->post();

		$this->load->model('user_m');
		$result = array('status' => FALSE);

		$user = $this->user_m->get(
			array(
				'where' => array(
					'email' => $data['email'],
					'password' => $data['password'] 
				)
			)
		);
		
		if($user){
			$_SESSION['user'] = $user[0]->name;
			$this->admin("list");
		}
		else{
			$this->login();
		}
	}

	public function login(){
		$this->load->view('main', array('content' => 'login'));
	}

	public function admin(){
		if($this->logged()){
			$this->load->view('main', array(
				'content' => 'admin',
				'user' => $_SESSION['user']
			));		
		}
	}

	public function list($page){
		if($this->logged()){
			switch($page){
				case "banners":
					$this->load->model('banner_m');
					$list = $this->banner_m->get();
				break;
				case "depoimentos":
					$this->load->model('testimony_m');
					$list = $this->testimony_m->get();
				break;
				case "parceiros":
					$this->load->model('partner_m');
					$list = $this->partner_m->get();
				break;
				default:
					$this->load->model('banner_m');
					$list = $this->banner_m->get();
				break;
			}

			$this->load->view('main', array(
				'content' => 'admin',
				'title' => $page,
				'container' => 'list',
				'list' => $list,
				'user' => $_SESSION['user']
			));		
		}
	}
}
