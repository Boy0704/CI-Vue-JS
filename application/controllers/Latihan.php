<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Latihan extends CI_Controller {

	
	public function index()
	{
		$data = array(
			'konten' => 'lat/list_data',
		);
	}
}
