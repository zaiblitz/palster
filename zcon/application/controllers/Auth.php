<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		//echo 'Under Development';
	 	$this->load->view('dashboard/list');
	}
}