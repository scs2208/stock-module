<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class before extends CI_Controller{
	public function print_before(){
		$this->load->view('before_ass');
	}
}