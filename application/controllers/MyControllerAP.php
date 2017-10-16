<?php   
 
class MyControllerAP extends CI_Controller {    
	public function __construct() {    
		parent::__construct();
        if(!$this->session->userdata('username'))
			redirect('MyControllerAdmin/adminlogin');
		
		$this->load->model('mymodel');

        $this->load->helper('url');
        $this->load->library('pagination');
        $this->load->database();
    
		// parent::__construct();   
		// $this->load->model('mymodel');
		// if(!$this->session->userdata('username') != null || $this->session->userdata('username') !="")
		// {
		// } else {
		// 	redirect(base_url('MyControllerAdmin/adminlogin'));
		// }  
	} 
 
// function index() {   
// 	$data['err_message']="";
// 	// $this->load->view('index', $data);  
// 	$news = $this->mymodel->getDataNews();  
// 	// $this->load->view('view', array('data' => $data));
// 	$this->load->view('index',array('news' => $news)); 
// 	}   

// function adminlogin() {   
// 	$data['err_message']="";
// 	$this->load->view('adminlogin', $data);  
// 	}   

function createPosting() {  
	$img=$this->upload->data();
	$image=$img['file_name'];
	$data = array(     
		'judul' => $this->input->post('judul'), 
		'deskripsi' => $this->input->post('deskripsi'),         
		// 'image' => $this->input->post('image')
		'image'=> $image
		);     
 
	  $this->mymodel->addNews($data);   
	  //$this->indexnews(); 
}   
function do_upload(){

		$this->load->library('upload');
		 $config['upload_path'] = './upload/';
		 $config['allowed_types'] = 'gif|jpg|png';
		 // $config['max_size'] = 100000;
		 // $config['max_width'] = 10000;
		 // $config['max_height'] = 10000;

		$this->upload->initialize($config);

		if ( ! $this->upload->do_upload('image')) {
			echo $this->upload->display_errors();
		 	echo "gagal upload";
		} else {
		 	$this->createPosting();
		 	$this->home();
		}
}

function createUser() {  
	$data = array(     
		'username' => $this->input->post('username'),         
		'password' => $this->encript(),
		'passdek'  => $this->decript()); 

 
  $this->mymodel->addUser($data);   
  $this->index(); 
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

function deleteGedung($id){ 
	// $delete = $this->input->post('data');
	$where = array('news_id' => $id ); 
	$res = $this->mymodel->deleteGedung($where); 
		if ($res>=1) {
			$this->tablegedung();
		}	 
}

function updateGedung($id){ 
  	$update = $this->mymodel->getGedungAdmin("where news_id = '$id'");
  	$data = array(  
  		'news_id' => $update[0]['news_id'],    
		'judul' => $update[0]['judul'],     
		'deskripsi' => $update[0]['deskripsi'],     
		'image' => $update[0]['image']); 

  	$this->load->view('updateGedung',$data); 
}

function do_updateGedung(){
	$id = $_POST['news_id'];
	$where = array('news_id' => $id );
	$data_update = array(  
	'judul' => $this->input->post('judul'),     
	'deskripsi' => $this->input->post('deskripsi'),         
	'image' => $this->input->post('image')); 
 
  	$this->mymodel->updateDataGedung($data_update,$where); 
  	$data = $this->mymodel->getGedungAdmin();  
  	$this->load->view('tablegedung', array('gedung' => $data));
	}

function home(){
	$this->load->view('indexadmin'); 
}
function home1(){
	$this->load->view('home'); 
}
function puskes1(){
	$this->load->view('form-common'); 
}
function pegawai1(){
	$this->load->view('form-pegawai'); 
}
function tablepegawai(){
	$pegawai = $this->mymodel->getDataPegawai();  
	// $this->load->view('view', array('data' => $data));
	$this->load->view('tablepegawai',array('pegawai' => $pegawai)); 
}
function tablepuskesmas(){
	$puskes = $this->mymodel->getDataPuskes();  
	$this->load->view('tablepuskesmas',array('puskes' => $puskes)); 
}
function tablegedung(){
	$gedung = $this->mymodel->getGedungAdmin();  
	// $this->load->view('view', array('data' => $data));
	$this->load->view('tablegedung',array('gedung' => $gedung)); 
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

function logout() {
		$this->session->sess_destroy();
		redirect(base_url('index.php/adminlog'));
}

} ?>