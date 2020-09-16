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

		shuffle($testimonies);

		$this->load->view('main', array(
			'banners' => $banners,
			'partners' => $partners,
			'testimonies' => array_slice($testimonies, 0, 2),
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

	public function list($page, $message = FALSE){
		if($this->logged()){
			switch($page){
				case "banners":
					$this->load->model('banner_m');
					$list = $this->banner_m->get();
					$links = array(
						'edit' => 'admin/banners/editar/',
						'delete' => 'admin/lista/banners/delete/',
						'new' => 'admin/banners/criar/'
					);
				break;
				case "depoimentos":
					$this->load->model('testimony_m');
					$list = $this->testimony_m->get();
					$links = array(
						'edit' => 'admin/depoimentos/editar/',
						'delete' => 'admin/lista/depoimentos/delete/',
						'new' => 'admin/depoimentos/criar/'
					);
				break;
				case "parceiros":
					$this->load->model('partner_m');
					$list = $this->partner_m->get();
					$links = array(
						'edit' => 'admin/parceiros/editar/',
						'delete' => 'admin/lista/parceiros/delete/',
						'new' => 'admin/parceiros/criar/'
					);
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
				'links' => $links,
				'message' => $message,
				'user' => $_SESSION['user']
			));		
		}
	}

	public function list_delete($page, $id){
		switch($page){
			case "banners":
				$this->load->model('banner_m');
				$this->banner_m->delete($id);
			break;
			case "depoimentos":
				$this->load->model('testimony_m');
				$this->testimony_m->delete($id);
			break;
			case "parceiros":
				$this->load->model('partner_m');
				$this->partner_m->delete($id);
			break;
		}

		
		$this->list($page, "Deletado com sucesso!");	
	}

	public function banner($id){
		
		if($id){
			$this->load->model('banner_m');
			$banner = $this->banner_m->get($id);
		}

		$this->load->view('main', array(
			'content' => 'admin',
			'title' => "Banners",
			'container' => 'form-banner',
			'banner' => $banner,
			'user' => $_SESSION['user']
		));	
	}

	public function testimony($id){
		
		if($id){
			$this->load->model('testimony_m');
			$testimony = $this->testimony_m->get($id);
		}

		$this->load->view('main', array(
			'content' => 'admin',
			'title' => "Depoimentos",
			'container' => 'form-testimony',
			'testimony' => $testimony,
			'user' => $_SESSION['user']
		));	
	}

	public function testimony_save($id = FALSE){
		$data = $this->input->post();

		$this->load->model('testimony_m');

		if($id){
			$this->testimony_m->update($data, $id);
		}
		else{
			$this->testimony_m->insert($data);
		}

		$this->list("depoimentos", "Salvo com sucesso!");
	}

	public function partner($id){
		
		if($id){
			$this->load->model('partner_m');
			$partner = $this->partner_m->get($id);
		}

		$this->load->view('main', array(
			'content' => 'admin',
			'title' => "Parceiros",
			'container' => 'form-partner',
			'partner' => $partner,
			'user' => $_SESSION['user']
		));	
	}
}
