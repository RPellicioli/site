<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}

	public function index()
	{
		$this->load->model('banner_m');
		$this->load->model('partner_m');

		$banners = $this->banner_m->get();
		$partners = $this->partner_m->get();

		$this->load->view('main', array(
			'banners' => $banners,
			'partners' => $partners
		));
	}
}
