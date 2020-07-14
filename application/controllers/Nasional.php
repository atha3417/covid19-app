<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nasional extends CI_Controller {

	public function index()
	{
		$nasional = json_decode(file_get_contents("https://api.kawalcorona.com/indonesia"), true);
		$prov = json_decode(file_get_contents("https://api.kawalcorona.com/indonesia/provinsi"), true);
		$data = [
			'title' => "Data Corona Indonesia",
			'nasional' => $nasional,
			'prov' => $prov
		];
		$this->load->view('template/header');
		$this->load->view('indonesia', $data);
		$this->load->view('template/footer');
	}

}
