<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class crud extends CI_Controller {
public fuction index(){
	$data = $rhis->model->GetMahasiswa();
	$this->load->view('view',array('data' => $data));
}
	
}
