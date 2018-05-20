<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		//echo 'Home';
		
		$data['home'] = 'This is from Home controller.';
		
		$this->load->view('home', $data);
	}
}
