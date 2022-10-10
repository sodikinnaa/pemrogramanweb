<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Develop extends CI_Controller {

	public function index()
	{
		$this->load->view('home');
	}

	public function page_1(){
		echo "sodikin";
	}
}
