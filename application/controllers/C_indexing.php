<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_indexing extends CI_Controller {

	public function index(){
		$this->halamanutama();
	}

	private function halamanutama(){
		//$this->load->view('header');
		$this->load->view('index');
		//$this->load->view('footer');
	}
}
