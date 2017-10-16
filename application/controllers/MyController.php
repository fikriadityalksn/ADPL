<?php   
 
class MyController extends CI_Controller {    	
	
	public function __construct() {   
		parent::__construct();   
		$this->load->model('mymodel');  
	} 
    
function index() {  
	// $counter=0; 
	$data['err_message']="";
	$data = $this->mymodel->getDataNews(); 
	// $IP= $_SERVER['REMOTE_ADDR'];
	// $dataIP= array('dataIP' => $IP );
	// $ADDR = $this->mymodel->getDataIP();
	// foreach ($ADDR as $key) {
	// 	if ($_SERVER['REMOTE_ADDR']=!$key['dataIP']){
	// 		$this->mymodel->addDataIP($dataIP);
	// 	}
	// 	$counter = $key['ID'];
	// }

	$this->load->view('index', array('data' => $data));
}

function indexgedung($id) {
	// $data['err_message']="";
	// $where = array('news_id' => $id );
	$data = $this->mymodel->getDataGedung("where news_id = " .$id);
	$this->load->view('infogedung', array('data' => $data));
}

function deleteDataDasar($id){ 
	// $delete = $this->input->post('data');
	$where = array('kode_puskes' => $id ); 
	$res = $this->mymodel->deleteDataPuskes($where); 
		if ($res>=1) {
			$this->tablepuskesmas();
		}
}

function tablepuskesmas(){
	$puskes = $this->mymodel->getDataPuskes();  
	$this->load->view('tablepuskesmas',array('puskes' => $puskes)); 
}

// function adminlogin() {   
// 	$data['err_message']="";
// 	$this->load->view('adminlogin', $data);  
	// }   
 

function indexcreate() {   
	$data['err_message']="";
	$this->load->view('adminregister', $data);  
	}  


public function indexmaps(){

	$this->load->library('googlemaps');

	$config = array();
	$config['center'] = '-7.717, 110.019997';
	$config['zoom'] = 10;
	$this->googlemaps->initialize($config);

	$position = $this->mymodel->getDataPuskes();
	foreach ($position as $x) { 
		$marker = array();
		$marker['position'] = $x['latitude'].','.$x['longtitude'];
		$marker['infowindows_content'] = 'Puskesmas TegalSari';
		$marker['onclick'] = 'alert(\''.$x['nama_puskes'].'\')';
		$this->googlemaps->add_marker($marker);
	}

	$data['map'] = $this->googlemaps->create_map();
	$this->load->view('puskesmas', $data);

}

function sambutan(){
	$this->load->view('sambutan'); 
}
function visimisi(){
	$this->load->view('visimisi'); 
}
function perbup(){
	$this->load->view('perbud'); 
}
function puskesmas(){
	$this->load->view('puskesmas'); 
}
function rumahsakit(){
	$this->load->view('rumahsakit'); 
}
function kontak(){
	$this->load->view('kontakkami'); 
}

function sendemail() {
	$this->load->library('email');

	$config['proxy_ips'] = '';
	$config['protocol'] = 'smtp';
	$config['smtp_host'] = 'ssl://smtp.gmail.com';
	$config['smtp_port'] = '465';
	$config['smtp_timeout'] = '30';
	$config['smtp_user'] = 'creativeituise@gmail.com';
	$config['smtp_pass'] = 'AnakKece';
	$config['charset'] = 'utf-8';
	$config['newline'] = "\r\n";
	$config['mailtype'] = 'html';
	$config['validation'] = TRUE;
	$config['wordwrap'] = TRUE;
	$nama = $this->input->post('name');

	$this->email->initialize($config);
	$message = $this->input->post('message');
	$email = $this->input->post('email');

	$this->email->to('fikriadityalksn@gmail.com');
	$this->email->from($this->input->post('email'));
	$this->email->subject('Pesan Dari Web');
	//$this->email->message($this->input->post('name').'<br>'.$this->input->post('email').'<br>'.$this->input->post('subject').'<br>'.$this->input->post('message'));
	//$message="<html><body><h1>".$nama."</h1></body></html>";
	 $this->email->message('dari : '.$email.'<br> Pesan : '.$message);

	$this->email->send();

	// echo '<script>alert("Pesan Terkirim!")</script>';
	$this->kontak();
}

function viewberita(){
	$news = $this->mymodel->getDataNews(); 
	$this->load->view('berita', array('data' => $data)); 
}

function createUser() {  
	$data = array(     
		'username' => $this->input->post('username'),         
		'password' => $this->encript(),
		'passdek'  => $this->decript()); 

 
  	$this->mymodel->addUser($data);
  	$data['err_message']="";   
  	$this->load->view('adminlogin',$data);
}   

function createUserDek() {  
	$data = array(     
		'username' => $this->input->post('username'),         
		'password' => $this->encript()); 
 
  	$this->mymodel->addUserDek($data);   
  	$this->indexcreate(); 
}

function encript() {
	$str = $this->input->post('password');
	$input = base64_encode($str);

	$key = array(
	 'a' => 'G1',
	 'b' => 'H!',
	 'c' => 'I#',
	 'd' => 'J5',
	 'f' => 'KP',
	 'e' => 'LK',
	 'g' => 'M@',
	 'h' => 'N5',
	 'i' => 'O;',
	 'j' => 'P5',
	 'k' => 'QD',
	 'l' => 'R0',
	 'm' => 'S@',
	 'n' => 'T^',
	 'o' => 'U"',
	 'p' => 'VP',
	 'q' => 'W3',
	 'r' => 'XF',
	 's' => 'Y9',
	 't' => 'Z7',
	 'u' => 'A@',
	 'v' => 'BB',
	 'w' => 'C=',
	 'x' => 'D&',
	 'y' => 'E?',
	 'z' => 'F[',
	);
	//$input = strtolower($input);
	$output = str_replace(array_keys($key), $key, $input);
	//$dek = str_replace( $key, array_keys($key), $output);
	return $output;
}

function decript() {
	$input = $this->encript();

	$key = array(
	 'a' => 'G1',
	 'b' => 'H!',
	 'c' => 'I#',
	 'd' => 'J5',
	 'f' => 'KP',
	 'e' => 'LK',
	 'g' => 'M@',
	 'h' => 'N5',
	 'i' => 'O;',
	 'j' => 'P5',
	 'k' => 'QD',
	 'l' => 'R0',
	 'm' => 'S@',
	 'n' => 'T^',
	 'o' => 'U"',
	 'p' => 'VP',
	 'q' => 'W3',
	 'r' => 'XF',
	 's' => 'Y9',
	 't' => 'Z7',
	 'u' => 'A@',
	 'v' => 'BB',
	 'w' => 'C=',
	 'x' => 'D&',
	 'y' => 'E?',
	 'z' => 'F[',
	);
	//$input = strtolower($input);
	//$output = str_replace(array_keys($key), $key, $input);
	$dek = str_replace( $key, array_keys($key), $input);
	$dec = base64_decode($dek);
	return $dec;	
}

function server(){

	$this->load->view('server');
}

} ?>