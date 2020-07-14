<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Internasional extends CI_Controller {

	public function index()
	{
		$positif = json_decode(file_get_contents("https://api.kawalcorona.com/positif"), true);
		$sembuh = json_decode(file_get_contents("https://api.kawalcorona.com/sembuh"), true);
		$meninggal = json_decode(file_get_contents("https://api.kawalcorona.com/meninggal"), true);
		$negara = json_decode(file_get_contents("https://api.kawalcorona.com/"), true);
		$data = [
			'title' => "Data Corona Internasional",
			'positif' => $positif,
			'sembuh' => $sembuh,
			'meninggal' => $meninggal,
			'negara' => $negara
		];
		$this->load->view('template/header');
		$this->load->view('inter', $data);
		$this->load->view('template/footer');
	}

}
