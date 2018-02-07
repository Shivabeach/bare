<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$data['title'] = "Trial Grid";
		$data["main_content"] = "welcome_message";
		$this->load->view("pages/template", $data);
	}

	public function trial()
	{
		$data['title'] = "Trial Grid";
		$data["main_content"] = "welcome_message";
		$this->load->view("pages/template", $data);
	}
}
