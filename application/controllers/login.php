<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {
	public function index()
	{
		$fas = $this->db->get('F_Hotel')->result();
		$this->load->view('master/fasilitas',['fas'=>$fas]);
	}
}
