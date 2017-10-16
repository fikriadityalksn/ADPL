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