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
function indexnews() {   
	$data['err_message']="";
	$this->load->view('postingberita', $data);  
	}   

function indexcreate() {   
	$data['err_message']="";
	$this->load->view('adminregister', $data);  
	}  

function indexdataDasar() {   
	$data['err_message']="";
	$this->load->view('datadasarpuskes', $data);  
	} 

function indexdataPegawai() {   
	$data['err_message']="";
	$this->load->view('datapegawai', $data);  
	}

function create() {  
	$data = array(     
		'nama_Puskes' => $this->input->post('nama_Puskes'),         
		'jumlah_Pasien_Umum' => $this->input->post('jumlah_Pasien_Umum'),     
		'jumlah_pasien_gigi' => $this->input->post('jumlah_pasien_gigi'),     
		'jumlah_pasien_kb' => $this->input->post('jumlah_pasien_kb')); 

		 $this->mymodel->addData($data);   
 		 $this->indexdataDasar(); 
	}

function createdatapegawai() {  
		$data = array(  
		'nip' => $this->input->post('nip'),     
		'nama' => $this->input->post('nama'),         
		'alamat' => $this->input->post('alamat'),
		'golongan_terakhir' => $this->input->post('golongan_terakhir'),
		'pendidikan_pertama' => $this->input->post('pendidikan_pertama'),
		'pendidikan_terakhir' => $this->input->post('pendidikan_terakhir'),
		'eselon' => $this->input->post('eselon'),
		'gol_jabatan' => $this->input->post('gol_jabatan'),
		'unit_kerja' => $this->input->post('unit_kerja')); 

		 $this->mymodel->addDataPegawai($data);   
 		 $this->load->view('form-pegawai'); 
	}

function createdatadasar() {  
	$data = array(     
		'kode_puskes' => $this->input->post('kode_puskes'),
		'nama_puskes' => $this->input->post('nama_puskes'),
		'jenis_puskes' => $this->input->post('jenis_puskes'),
		'kecamatan' => $this->input->post('kecamatan'),
		'desa' => $this->input->post('desa'),         
		'alamat' => $this->input->post('alamat'),     
		'kodepos' => $this->input->post('kodepos'),     
		'tlep' => $this->input->post('tlep'),
		'fax' => $this->input->post('fax'),
		'email' => $this->input->post('email'),
		'latitude' => $this->input->post('latitude'),
		'longtitude' => $this->input->post('longtitude'),
		'kondisi_bangunan' => $this->input->post('kondisi_bangunan'),
		'status_akreditasi' => $this->input->post('status_akreditasi'),
		'jumlah_dokter' => $this->input->post('jumlah_dokter'),
		'jumlah_doktergigi' => $this->input->post('jumlah_doktergigi'),
		'jumlah_perawat' => $this->input->post('jumlah_perawat'),
		'jumlah_bidan' => $this->input->post('jumlah_bidan'),
		'jumlah_TKM' => $this->input->post('jumlah_TKM'),
		'jumlah_TKL' => $this->input->post('jumlah_TKL'),
		'jumlah_ahliGizi' => $this->input->post('jumlah_ahliGizi'),
		'jumlah_ahliLab' => $this->input->post('jumlah_ahliLab'),
		'jumlah_farmasi' => $this->input->post('jumlah_farmasi'),
		'jumlah_tenagapenunjang' => $this->input->post('jumlah_tenagapenunjang'),
		'jumlah_tenaga' => $this->input->post('jumlah_tenaga'));
 
  $this->mymodel->addDataDasar($data);   
  $this->puskes1(); 
	}

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

function readData() { 
	$data = $this->mymodel->getData();  
	$this->load->view('view', array('data' => $data)); 
	} 
function readPass() { 
	$data = $this->decript();  
	$this->load->view('forgot', array('user' => $data)); 
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



public function indexmaps(){

	$this->load->library('googlemaps');

	$config = array();
	$config['center'] = '-7.717, 110.019997';
	$config['zoom'] = 10;
	$this->googlemaps->initialize($config);

	$position = $this->mymodel->getDataPuskes();
	
		// $latitude = $x['latitude'];
		// $longtitude = $x['longtitude'];

		// $latitude = ;
		// $longtitude = ;
		foreach ($position as $x) { 
		$marker = array();
		$marker['position'] = $x['latitude'].','.$x['longtitude'];
		//$marker['position'] = '-7.717, 110.019997';
		$marker['infowindows_content'] = 'Puskesmas TegalSari';
		$marker['onclick'] = 'alert(\'Dinas Kesehahatan\')';
		$this->googlemaps->add_marker($marker);
		}

		print_r($marker);
		// $marker = array();
		// $marker['position'] = '-7.78605, 110.019997';
		// $marker['infowindow_content'] = 'Puskesmas TegalSari';
		// $marker['onclick'] = 'alert(\'Puskesmas\')';
		// $this->googlemaps->add_marker($marker);

	$data['map'] = $this->googlemaps->create_map();
	$this->load->view('puskesmas', $data);


	// $marker = array();
	// $marker['position'] = '-7.725183, 110.027733';
	// $marker['infowindow_content'] = 'Puskesmas TegalSari';
	// $this->googlemaps->add_marker($marker);


	// $marker = array();
	// $marker['position'] = '-7.715983, 110.079567';
	// $this->googlemaps->add_marker($marker);
	// $data['map'] = $this->googlemaps->create_map();

	// $this->load->view('peta', $data);

	// $this->load->library('googlemaps');
	// //$data = $this->mymodel->getDataMaps();
	

	// //$this->load->view('view', array('data' => $data));
	// //$config = array();
	// $config['center'] = 'surabaya, indonesia';
	// $config['zoom'] = 'auto';
	// $this->googlemaps->initialize($config);

	// $marker = array();
	// $marker['position'] = 'sidoarjo, indonesia';
	// $this->googlemaps->add_marker($marker);
	// $data['map'] = $this->googlemaps->create_map();

}

function deletePegawai($id){ 
	// $delete = $this->input->post('data');
	$where = array('nip' => $id ); 
	$res = $this->mymodel->deleteDataPegawai($where); 
		if ($res>=1) {
			$this->tablepegawai();
		}	 
}

function deleteGedung($id){ 
	// $delete = $this->input->post('data');
	$where = array('news_id' => $id ); 
	$res = $this->mymodel->deleteGedung($where); 
		if ($res>=1) {
			$this->tablegedung();
		}	 
}

function deleteDataDasar($id){ 
	// $delete = $this->input->post('data');
	$where = array('kode_puskes' => $id ); 
	$res = $this->mymodel->deleteDataPuskes($where); 
		if ($res>=1) {
			$this->tablepuskesmas();
		}
}

function updatePegawai($id){ 
  	$update = $this->mymodel->getDataPegawai("where nip = '$id'");
  	$data = array(     
		'nip' => $update[0]['nip'],         
		'nama' => $update[0]['nama'],     
		'alamat' => $update[0]['alamat'],     
		'golongan_terakhir' => $update[0]['golongan_terakhir'],
		'pendidikan_pertama' => $update[0]['pendidikan_pertama'],
		'pendidikan_terakhir' => $update[0]['pendidikan_terakhir'],
		'eselon' => $update[0]['eselon'],
		'gol_jabatan' => $update[0]['gol_jabatan'],
		'unit_kerja' => $update[0]['unit_kerja'],); 

  	$this->load->view('updatePegawai',$data); 
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

function updateDataDasar($id){ 
  	$update = $this->mymodel->getDataPuskes("where kode_puskes = '$id'"); 
  	$data = array(     
		'kode_puskes' => $update[0]['kode_puskes'],
		'nama_puskes' => $update[0]['nama_puskes'],
		'jenis_puskes' => $update[0]['jenis_puskes'],
		'kecamatan' => $update[0]['kecamatan'],
		'desa' => $update[0]['desa'],
		'alamat' => $update[0]['alamat'],
		'kodepos' => $update[0]['kodepos'],     
		'tlep' => $update[0]['tlep'],
		'fax' => $update[0]['fax'],
		'email' => $update[0]['email'],
		'latitude' => $update[0]['latitude'],
		'longtitude' => $update[0]['longtitude'],
		'kondisi_bangunan' => $update[0]['kondisi_bangunan'],
		'status_akreditasi' => $update[0]['status_akreditasi'],
		'jumlah_dokter' => $update[0]['jumlah_dokter'],
		'jumlah_doktergigi' => $update[0]['jumlah_doktergigi'],
		'jumlah_perawat' => $update[0]['jumlah_perawat'],
		'jumlah_bidan' => $update[0]['jumlah_bidan'],
		'jumlah_TKM' => $update[0]['jumlah_TKM'],
		'jumlah_TKL' => $update[0]['jumlah_TKL'],
		'jumlah_ahliGizi' => $update[0]['jumlah_ahliGizi'],
		'jumlah_ahliLab' => $update[0]['jumlah_ahliLab'],
		'jumlah_farmasi' => $update[0]['jumlah_farmasi'],
		'jumlah_tenagapenunjang' => $update[0]['jumlah_tenagapenunjang'],
		'jumlah_tenaga' => $update[0]['jumlah_tenaga']);

  	$this->load->view('updatepuskesmas',$data); 
	}

function do_updatePegawai(){
	$id = $_POST['nip'];
	$where = array('nip' => $id );
	$data_update = array(  
	'nip' => $this->input->post('nip'),     
	'nama' => $this->input->post('nama'),         
	'alamat' => $this->input->post('alamat'),
	'golongan_terakhir' => $this->input->post('golongan_terakhir'),
	'pendidikan_pertama' => $this->input->post('pendidikan_pertama'),
	'pendidikan_terakhir' => $this->input->post('pendidikan_terakhir'),
	'eselon' => $this->input->post('eselon'),
	'gol_jabatan' => $this->input->post('gol_jabatan'),
	'unit_kerja' => $this->input->post('unit_kerja')); 

 
  	$this->mymodel->updateDataPegawai($data_update,$where); 
  	$data = $this->mymodel->getDataPegawai();  
  	$this->load->view('tablepegawai', array('pegawai' => $data));
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

function do_updateDataDasar(){
	$id = $_POST['kode_puskes'];
	$where = array('kode_puskes' => $id );
	$data_update = array(     
		'kode_puskes' => $this->input->post('kode_puskes'),
		'nama_puskes' => $this->input->post('nama_puskes'),
		'jenis_puskes' => $this->input->post('jenis_puskes'),
		'kecamatan' => $this->input->post('kecamatan'),
		'desa' => $this->input->post('desa'),         
		'alamat' => $this->input->post('alamat'),     
		'kodepos' => $this->input->post('kodepos'),     
		'tlep' => $this->input->post('tlep'),
		'fax' => $this->input->post('fax'),
		'email' => $this->input->post('email'),
		'latitude' => $this->input->post('latitude'),
		'longtitude' => $this->input->post('longtitude'),
		'kondisi_bangunan' => $this->input->post('kondisi_bangunan'),
		'status_akreditasi' => $this->input->post('status_akreditasi'),
		'jumlah_dokter' => $this->input->post('jumlah_dokter'),
		'jumlah_doktergigi' => $this->input->post('jumlah_doktergigi'),
		'jumlah_perawat' => $this->input->post('jumlah_perawat'),
		'jumlah_bidan' => $this->input->post('jumlah_bidan'),
		'jumlah_TKM' => $this->input->post('jumlah_TKM'),
		'jumlah_TKL' => $this->input->post('jumlah_TKL'),
		'jumlah_ahliGizi' => $this->input->post('jumlah_ahliGizi'),
		'jumlah_ahliLab' => $this->input->post('jumlah_ahliLab'),
		'jumlah_farmasi' => $this->input->post('jumlah_farmasi'),
		'jumlah_tenagapenunjang' => $this->input->post('jumlah_tenagapenunjang'),
		'jumlah_tenaga' => $this->input->post('jumlah_tenaga'));
 
  	$this->mymodel->updateDataPuskes($data_update,$where); 
  	$data = $this->mymodel->getDataPuskes();  
  	$this->load->view('tablepuskesmas', array('puskes' => $data));
}

function update($id){ 
  	$update = $this->mymodel->getData("where ID_Puskes = '$id'");
	  	$data = array(     
			'nama_Puskes' => $update[0]['nama_Puskes'],         
			'jumlah_Pasien_Umum' => $update[0]['jumlah_Pasien_Umum'],     
			'jumlah_pasien_gigi' => $update[0]['jumlah_pasien_gigi'],     
			'jumlah_pasien_kb' => $update[0]['jumlah_pasien_kb']);
	  	$this->load->view('update',$data); 
 	}

 	function do_update(){
 		$id = $_POST['nama_Puskes'];
 		$where = array('nama_Puskes' => $id );
 		$data_update = array(     
			'nama_Puskes' => $this->input->post('nama_Puskes'),         
			'jumlah_Pasien_Umum' => $this->input->post('jumlah_Pasien_Umum'),     
			'jumlah_pasien_gigi' => $this->input->post('jumlah_pasien_gigi'),     
			'jumlah_pasien_kb' => $this->input->post('jumlah_pasien_kb')); 
	 
	  	$this->mymodel->updateData($data_update,$where); 
	  	$data = $this->mymodel->getData();  
	  	$this->load->view('view', array('data' => $data));
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
	function sendemail() {
		$this->load->library('email');

		$config['proxy_ips'] = '';
		$config['protocol'] = 'smtp';
		$config['smtp_host'] = 'ssl://smtp.gmail.com';
		$config['smtp_port'] = '465';
		$config['smtp_timeout'] = '30';
		$config['smtp_user'] = 'fadhilaalfi2@gmail.com';
		$config['smtp_pass'] = '19971997aa';
		$config['charset'] = 'utf-8';
		$config['newline'] = "\r\n";
		$config['mailtype'] = 'html';
		$config['validation'] = TRUE;
		$config['wordwrap'] = TRUE;

		$this->email->initialize($config);

		$this->email->to('fania.aristya@gmail.com');
		$this->email->from($this->input->post('email'));
		$this->email->subject('Pesan Dari Web');
		$this->email->message($this->input->post('name').'<br>'.$this->input->post('email').'<br>'.$this->input->post('subject').'<br>'.$this->input->post('message'));
		$this->email->send();

		echo '<script>alert("Pesan Terkirim!")</script>';
		$this->kontak();
	}
} ?>