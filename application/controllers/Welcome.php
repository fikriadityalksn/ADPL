<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}

	function create() {   
		$data = array(     
			'nama_puskes' => $this->input->post('nama_puskes'),     
			'jumlah_pasien_Umum' => $this->input->post('jumlah_pasien_Umum'),     
			'jumlah_pasien_gigi' => $this->input->post('jumlah_pasien_gigi'),     
			'jumlah_pasien_kb' => $this->input->post('jumlah_pasien_kb'),); 
 
  $this->mymodel->addData($data);   
  $this->index(); } 
	function readData(){
		
	}

	public function doDelete($nama_puskes) {
$where = array('$nama_puskes' => $nama_puskes);
$res = $this->mymodel->DeleteData('data', $where);
if($res >= 1) {
	$data = $this->mymodel->getBarang();
	$this->load->view('tabel', array('data' => $data));
}	
}	
public function doUpdate($nama_puskes) {
	$nama_puskes = $_POST['nama_puskes'];
	$jumlah_pasien_Umum = $_POST['jumlah_pasien_Umum'];
	$jumlah_pasien_gigi = $_POST['jumlah_pasien_gigi'];
	$jumlah_pasien_kb = $_POST['jumlah_pasien_kb'];
	
	$data_update = array(
		'jumlah_pasien_Umum' => $jumlah_pasien_Umum,
		'jumlah_pasien_gigi' => $jumlah_pasien_gigi,
		'jumlah_pasien_kb' => $jumlah_pasien_kb,
		);
	$where = array('$nama_puskes' => $nama_puskes);
	$res = $this->mymodel->UpdateData('data', $data_update, $where);
	if($res >= 1) {
	$data = $this->mymodel->getBarang();
	$this->load->view('tabel', array('data' => $data));
}			
}
}

