<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mymodel extends CI_Model {

function addData($data) {  
$this->db->insert('data', $data);  
}

function addDataDasar($data) {  
$this->db->insert('datadasar_puskes', $data);  
}  

function addDataIP($data) {  
$this->db->insert('dataip', $data);  
}

function addNews($data) {  
$this->db->insert('posting', $data);  
} 

public function cek_login($username, $password) {
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		return $this->db->get('user');
}

function addUser($data) {  
	$this->db->insert('user', $data);  
} 

function addDataPegawai($data) {  
	$this->db->insert('datapegawai', $data);  
} 

function getData() {  
	$query = $this->db->get('data');  
	return $query->result_array();  
	}

function getDataIP() {  
	$query = $this->db->get('dataip');  
	return $query->result_array();  
}
 
function getLa() {  
	$query = $this->db->get('datadasar_puskes');  
	return $query->result_array();  
	} 

function getDataPegawai() {  
	$query = $this->db->get('datapegawai');  
	return $query->result_array();  
}

function getGedungAdmin() {  
	$query = $this->db->get('posting');  
	return $query->result_array();  
} 

function getDataPuskes() {  
	$query = $this->db->get('datadasar_puskes');  
	return $query->result_array();  
}

function getDataNews() {  
	$query = $this->db->get('posting');  
	return $query->result_array();  
}

function getDataGedung($where) {
	$info = $this->db->query('select * from posting '.$where);
	return $info->result_array();
}

function DeleteData($data, $where){
	$res = $this->db->delete('data', $where );
	return $res;
}


function deleteDataPegawai($where){  
	$this->db->where_in('nip', $where);  
	$res = $this->db->delete('datapegawai'); 
	return $res;
}

function deleteGedung($where){  
	$this->db->where_in('news_id', $where);  
	$res = $this->db->delete('posting'); 
	return $res;
}

function deleteDataPuskes($where){  
	$this->db->where_in('kode_puskes', $where);  
	$res = $this->db->delete('datadasar_puskes'); 
	return $res;
}

function UpdateData($data,$where){
	$this->db->where_in('ID_Puskes', $where);
	$res = $this->db->update('data',$data);
	return $res;
}

function UpdateDataPegawai($data,$where){
	$this->db->where_in('nip', $where);
	$res = $this->db->update('datapegawai',$data);
	return $res;
}

function UpdateDataGedung($data,$where){
	$this->db->where_in('news_id', $where);
	$res = $this->db->update('posting',$data);
	return $res;
}

function UpdateDataPuskes($data,$where){
	$this->db->where_in('kode_puskes', $where);
	$res = $this->db->update('datadasar_puskes',$data);
	return $res;
}

public function GetBarang($where=""){
	$data = $this->db->query('select * from data ' .$where);
	return $data->result_array();
}

function login_authen($username, $password){
	$sql =  "select * from user where username = '$username' and password = '$password'";
	// $this->db->select('*'); 
	// $this->db->where('username', $username); 
	// $this->db->where('password', $password); 
	// $this->db->from('user'); 
 
	$query = $this->db->query($sql); 
 
	if ($query->num_rows() == 1) {  
		return true;
		// return $query->row();
	} 
	else{  
		return false; 
	}
}

function authen_user($username){  
	$this->db->select('authentication');  
	$this->db->where('username', $username);  
	$this->db->from('user');  

	$query = $this->db->get();  
	return $query->result_array(); } 

function wrong_password($username, $value){  
	$sql =  "update user set authentication = $value where username = '$username'";
		$query = $this->db->query($sql);
	// $this->db->set('authentication', $value);  
	// $this->db->where("username", $username);  
	// $this->db->update('user'); 
	} 

function cek_admin($username, $password) {
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		return $this->db->get('user');
	}

} 
?>