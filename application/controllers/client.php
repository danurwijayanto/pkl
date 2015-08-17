<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Client extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct() {
		parent::__construct();
		
			$this->load->database();

			if(!$this->session->userdata('bahasa')){
		    // do something when doesn't exist
		    $this->lang->load("menu", "indonesia");
			$sess_data=array(
					'logo' => $this->lang->line('logo'),
					'selected' => 'indonesia',
					'sejarah' => $this->lang->line('sejarah'),
					'visimisi' => $this->lang->line('visimisi'),
					'tujuan' => $this->lang->line('tujuan'),
					'logomoto' => $this->lang->line('loggomotto'),
					'strukturor' => $this->lang->line('strukturorganisasi'),
					'kepegawaian' => $this->lang->line('kepegawaian'),
					'guru' => $this->lang->line('guru'),
					'karyawan' => $this->lang->line('karyawan'),
					'pengumuman' => $this->lang->line('pengumuman'),
					'agenda' => $this->lang->line('agendaterdekat'),
					'berita' => $this->lang->line('berita'),
					'artikel' => $this->lang->line('artikel'),
					'informasi' => $this->lang->line('informasi'),
					'kemitraan' => $this->lang->line('kemitraan'),
					'perguruan' => $this->lang->line('perguruan'),
					'pemerintah' => $this->lang->line('pemerintah'),
					'masyarakat' => $this->lang->line('masyarakat'),
					'bahanajar' => $this->lang->line('bahanajar'),
					'materibelajar' => $this->lang->line('materibelajar'),
					'mediabelajar' => $this->lang->line('mediabelajar'),
					'kontak' => $this->lang->line('kontak'),
					'tautan' => $this->lang->line('tautan'),
					'staff' => $this->lang->line('staff'),
					'kualitasmanagemen' => $this->lang->line('kualitasmanagemen'),
					'kurikulum' => $this->lang->line('kurikulum'),
					'student' => $this->lang->line('student'),
					'infrastruktur' => $this->lang->line('infrastruktur'),
					'humas' => $this->lang->line('humas'),
					'lihatsemua' => $this->lang->line('lihatsemua'),
					'slidertaktersedia' => $this->lang->line('slidertaktersedia'),
					'tidakadapost' => $this->lang->line('tidakadapost')
				);
			// Set values in session
			$this->session->set_userdata('bahasa', $sess_data);
		}
	}

	public function index()
	{	
		//$this->session->unset_userdata('bahasa');
		
		// Retrieve session values
		$session = $this->session->userdata('bahasa');
		if ($session['selected']=='indonesia'){
			$data=array(
					'title'=>'SMA 2 Salatiga',
					'isi' =>'client_konten/home',
					'agenda' => $this->sma_sltg->get_artikelbykat(4,0,8,1,2),
					'pengumuman' => $this->sma_sltg->get_artikelbykat(4,0,6,1,2),
					'artikel' => $this->sma_sltg->get_artikelbykat(4,0,3,1,2),
					'berita' => $this->sma_sltg->get_artikelbykat(4,0,9,1,2),
					'slider_one' => $this->sma_sltg->get_slider(0),
					'slider_two' => $this->sma_sltg->get_slider(1),
					'language' => $this->session->userdata('bahasa')
			);
		}else{
			$data=array(
					'title'=>'SMA 2 Salatiga',
					'isi' =>'client_konten/home',
					'agenda' => $this->sma_sltg->get_artikelbykat(4,0,8,1,1),
					'pengumuman' => $this->sma_sltg->get_artikelbykat(4,0,6,1,1),
					'artikel' => $this->sma_sltg->get_artikelbykat(4,0,3,1,1),
					'berita' => $this->sma_sltg->get_artikelbykat(4,0,9,1,1),
					'slider_one' => $this->sma_sltg->get_slider(0),
					'slider_two' => $this->sma_sltg->get_slider(1),
					'language' => $this->session->userdata('bahasa')
			);
		}
		
		$this->load->view('client_wrapper', $data);
	}

	public function visimisi(){
		$this->load->database();
		$data=array('title'=>'SMA 2 Salatiga',
					'isi' =>'client_konten/profile',
					 'sidebar_kanan' => 'client_konten/sidebar_kanan',
					 'tautan'=> TRUE,
					 'language' => $this->session->userdata('bahasa')
					);
		if ($data['language']['selected']=='indonesia'){
			$data['konten'] = $this->sma_sltg->get_artikelbyid(13);
		}else{
			$data['konten'] = $this->sma_sltg->get_artikelbyid(33);
		}
		$this->load->view('client_wrapper', $data);
	}

	public function artikel(){
		$data=array('title'=>'SMA 2 Salatiga',
					'isi' =>'client_konten/artikel',
					'sidebar_kanan' => 'client_konten/sidebar_kanan',
					'language' => $this->session->userdata('bahasa')
					);
		$this->load->view('client_wrapper', $data);
	}

	public function sejarah(){
		$this->load->database();
		$data=array('title'=>'SMA 2 Salatiga',
					'isi' =>'client_konten/profile',
					 'sidebar_kanan' => 'client_konten/sidebar_kanan',
					 'tautan'=> TRUE,
					 'language' => $this->session->userdata('bahasa')
					);
		if ($data['language']['selected']=='indonesia'){
			$data['konten'] = $this->sma_sltg->get_artikelbyid(12);
		}else{
			$data['konten'] = $this->sma_sltg->get_artikelbyid(34);
		}
		$this->load->view('client_wrapper', $data);
	}

	public function tujuan(){
		$this->load->database();
		$data=array('title'=>'SMA 2 Salatiga',
					'isi' =>'client_konten/profile',
					 'sidebar_kanan' => 'client_konten/sidebar_kanan',
					 'tautan'=> TRUE,
					 'language' => $this->session->userdata('bahasa')
					);
		if ($data['language']['selected']=='indonesia'){
			$data['konten'] = $this->sma_sltg->get_artikelbyid(14);
		}else{
			$data['konten'] = $this->sma_sltg->get_artikelbyid(35);
		}
		$this->load->view('client_wrapper', $data);
	}

	public function logo_motto(){
		$this->load->database();
		$data=array('title'=>'SMA 2 Salatiga',
					'isi' =>'client_konten/profile',
					 'sidebar_kanan' => 'client_konten/sidebar_kanan',
					 'tautan'=> TRUE,
					 'language' => $this->session->userdata('bahasa')
					);
		if ($data['language']['selected']=='indonesia'){
			$data['konten'] = $this->sma_sltg->get_artikelbyid(15);
		}else{
			$data['konten'] = $this->sma_sltg->get_artikelbyid(36);
		}
		$this->load->view('client_wrapper', $data);
	}

	public function struktur_organisasi(){
		$this->load->database();
		$data=array('title'=>'SMA 2 Salatiga',
					'isi' =>'client_konten/profile',
					 'sidebar_kanan' => 'client_konten/sidebar_kanan',
					 'tautan'=> TRUE,
					 'language' => $this->session->userdata('bahasa')
					);
		if ($data['language']['selected']=='indonesia'){
			$data['konten'] = $this->sma_sltg->get_artikelbyid(16);
		}else{
			$data['konten'] = $this->sma_sltg->get_artikelbyid(37);
		}	
		$this->load->view('client_wrapper', $data);
	}

	public function news($data){
		$this->load->database();
		$data=array('title'=>'SMA 2 Salatiga',
					'isi' =>'client_konten/artikel',
					 'sidebar_kanan' => 'client_konten/sidebar_kanan',
					 'konten' => $this->sma_sltg->get_artikelbyid($data),
					 'agenda' => $this->sma_sltg->get_artikelbykat(4,0,8,1,2),
					 'language' => $this->session->userdata('bahasa'),
					 'artikel' => $this->sma_sltg->get_artikelbykat(4,0,3,1,2)
					);
		$this->load->view('client_wrapper', $data);
	}

	public function kategori($data=0,$offset=0){
		$this->load->database();
		$this->load->library('pagination');

		$id = $this->input->get('id');
		if ($id == NULL) show_404();
		//config pagination
		$config['base_url'] = base_url().'/client/kategori/';
		//setting supaya link pagination terdatap parameter
		if (count($_GET) > 0) $config['suffix'] = '?' . http_build_query($_GET, '', "&");
		$config['first_url'] = $config['base_url'].'?'.http_build_query($_GET);
		$config['per_page'] = 3; 
		$config['uri_segment'] = 3;

		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data=array('title'=>'SMA 2 Salatiga',
					'isi' =>'client_konten/art_bykat',
					 'sidebar_kanan' => 'client_konten/sidebar_kanan',
					 'konten' => $this->sma_sltg->get_artikelbykat($config['per_page'],$page,$id,1,2),
					 'konten_row' => $this->sma_sltg->get_artikelbykat(0,$offset,$id,1,2),
					 'agenda' => $this->sma_sltg->get_artikelbykat(4,0,8,1,2),
					 'artikel' => $this->sma_sltg->get_artikelbykat(4,0,3,1,2),
					 'language' => $this->session->userdata('bahasa')
					);
		$row = count($data['konten_row']);
		$config['total_rows'] = $row;
		$this->pagination->initialize($config);
		$data['pagging'] = $this->pagination->create_links(); 

		$this->load->view('client_wrapper',$data);

		
		
	}

	public function guru(){
		$this->load->database();
		$data=array('title'=>'SMA 2 Salatiga',
					'isi' =>'client_konten/profile',
					 'sidebar_kanan' => 'client_konten/sidebar_kanan',
					 'tautan'=> TRUE,
					 'language' => $this->session->userdata('bahasa')
					);
		if ($data['language']['selected']=='indonesia'){
			$data['konten'] = $this->sma_sltg->get_artikelbyid(20);
		}else{
			$data['konten'] = $this->sma_sltg->get_artikelbyid(39);
		}	
		$this->load->view('client_wrapper', $data);
	}

	public function karyawan(){
		$this->load->database();
		$data=array('title'=>'SMA 2 Salatiga',
					'isi' =>'client_konten/profile',
					 'sidebar_kanan' => 'client_konten/sidebar_kanan',
					 'tautan'=> TRUE,
					 'language' => $this->session->userdata('bahasa')
					);
		if ($data['language']['selected']=='indonesia'){
			$data['konten'] = $this->sma_sltg->get_artikelbyid(21);
		}else{
			$data['konten'] = $this->sma_sltg->get_artikelbyid(40);
		}	
		$this->load->view('client_wrapper', $data);
	}

	public function perguruan_tinggi(){
		$this->load->database();
		$data=array('title'=>'SMA 2 Salatiga',
					'isi' =>'client_konten/profile',
					 'sidebar_kanan' => 'client_konten/sidebar_kanan',
					 'tautan'=> TRUE,
					 'language' => $this->session->userdata('bahasa')
					);
		if ($data['language']['selected']=='indonesia'){
			$data['konten'] = $this->sma_sltg->get_artikelbyid(41);
		}else{
			$data['konten'] = $this->sma_sltg->get_artikelbyid(42);
		}	
		$this->load->view('client_wrapper', $data);
	}

	public function pemerintah(){
		$this->load->database();
		$data=array('title'=>'SMA 2 Salatiga',
					'isi' =>'client_konten/profile',
					 'sidebar_kanan' => 'client_konten/sidebar_kanan',
					 'tautan'=> TRUE,
					 'language' => $this->session->userdata('bahasa')
					);
		if ($data['language']['selected']=='indonesia'){
			$data['konten'] = $this->sma_sltg->get_artikelbyid(43);
		}else{
			$data['konten'] = $this->sma_sltg->get_artikelbyid(44);
		}	
		$this->load->view('client_wrapper', $data);
	}

	public function masyarakat(){
		$this->load->database();
		$data=array('title'=>'SMA 2 Salatiga',
					'isi' =>'client_konten/profile',
					 'sidebar_kanan' => 'client_konten/sidebar_kanan',
					 'tautan'=> TRUE,
					 'language' => $this->session->userdata('bahasa')
					);
		if ($data['language']['selected']=='indonesia'){
			$data['konten'] = $this->sma_sltg->get_artikelbyid(45);
		}else{
			$data['konten'] = $this->sma_sltg->get_artikelbyid(46);
		}	
		$this->load->view('client_wrapper', $data);
	}

	public function kontak(){
		$this->load->database();
		$data=array('title'=>'SMA 2 Salatiga',
					'isi' =>'client_konten/profile',
					 'sidebar_kanan' => 'client_konten/sidebar_kanan',
					 'konten' => $this->sma_sltg->get_artikelbyid(22),
					 'tautan'=> TRUE,
					 'language' => $this->session->userdata('bahasa')
					);
		$this->load->view('client_wrapper', $data);
	}

	public function manajemen_mutu(){
		$this->load->database();
		$data=array('title'=>'SMA 2 Salatiga',
					'isi' =>'client_konten/profile',
					 'sidebar_kanan' => 'client_konten/sidebar_kanan',
					 'tautan'=> TRUE,
					 'language' => $this->session->userdata('bahasa')
					);
		if ($data['language']['selected']=='indonesia'){
			$data['konten'] = $this->sma_sltg->get_artikelbyid(50);
		}else{
			$data['konten'] = $this->sma_sltg->get_artikelbyid(51);
		}	
		$this->load->view('client_wrapper', $data);
	}

	public function kurikulum(){
		$this->load->database();
		$data=array('title'=>'SMA 2 Salatiga',
					'isi' =>'client_konten/profile',
					 'sidebar_kanan' => 'client_konten/sidebar_kanan',
					 'tautan'=> TRUE,
					 'language' => $this->session->userdata('bahasa')
					);
		if ($data['language']['selected']=='indonesia'){
			$data['konten'] = $this->sma_sltg->get_artikelbyid(52);
		}else{
			$data['konten'] = $this->sma_sltg->get_artikelbyid(53);
		}	
		$this->load->view('client_wrapper', $data);
	}

	public function kemahasiswaan(){
		$this->load->database();
		$data=array('title'=>'SMA 2 Salatiga',
					'isi' =>'client_konten/profile',
					 'sidebar_kanan' => 'client_konten/sidebar_kanan',
					 'tautan'=> TRUE,
					 'language' => $this->session->userdata('bahasa')
					);
		if ($data['language']['selected']=='indonesia'){
			$data['konten'] = $this->sma_sltg->get_artikelbyid(54);
		}else{
			$data['konten'] = $this->sma_sltg->get_artikelbyid(55);
		}	
		$this->load->view('client_wrapper', $data);
	}

	public function infrastruktur(){
		$this->load->database();
		$data=array('title'=>'SMA 2 Salatiga',
					'isi' =>'client_konten/profile',
					 'sidebar_kanan' => 'client_konten/sidebar_kanan',
					 'tautan'=> TRUE,
					 'language' => $this->session->userdata('bahasa')
					);
		if ($data['language']['selected']=='indonesia'){
			$data['konten'] = $this->sma_sltg->get_artikelbyid(56);
		}else{
			$data['konten'] = $this->sma_sltg->get_artikelbyid(57);
		}	
		$this->load->view('client_wrapper', $data);
	}

	public function humas(){
		$this->load->database();
		$data=array('title'=>'SMA 2 Salatiga',
					'isi' =>'client_konten/profile',
					 'sidebar_kanan' => 'client_konten/sidebar_kanan',
					 'tautan'=> TRUE,
					 'language' => $this->session->userdata('bahasa')
					);
		if ($data['language']['selected']=='indonesia'){
			$data['konten'] = $this->sma_sltg->get_artikelbyid(58);
		}else{
			$data['konten'] = $this->sma_sltg->get_artikelbyid(59);
		}	
		$this->load->view('client_wrapper', $data);
	}

	public function materibelajar(){
		$this->load->database();
		$data=array('title'=>'SMA 2 Salatiga',
					'isi' =>'client_konten/profile',
					 'sidebar_kanan' => 'client_konten/sidebar_kanan',
					 'tautan'=> TRUE,
					 'language' => $this->session->userdata('bahasa')
					);
		if ($data['language']['selected']=='indonesia'){
			$data['konten'] = $this->sma_sltg->get_artikelbyid(50);
		}else{
			$data['konten'] = $this->sma_sltg->get_artikelbyid(50);
		}	
		$this->load->view('client_wrapper', $data);
	}

	public function mediabelajar(){
		$this->load->database();
		$data=array('title'=>'SMA 2 Salatiga',
					'isi' =>'client_konten/profile',
					 'sidebar_kanan' => 'client_konten/sidebar_kanan',
					 'tautan'=> TRUE,
					 'language' => $this->session->userdata('bahasa')
					);
		if ($data['language']['selected']=='indonesia'){
			$data['konten'] = $this->sma_sltg->get_artikelbyid(51);
		}else{
			$data['konten'] = $this->sma_sltg->get_artikelbyid(51);
		}	
		$this->load->view('client_wrapper', $data);
	}

	public function download(){
		$this->load->database();
		$data=array('title'=>'SMA 2 Salatiga',
					'isi' =>'client_konten/profile',
					 'sidebar_kanan' => 'client_konten/sidebar_kanan',
					 'tautan'=> TRUE,
					 'language' => $this->session->userdata('bahasa')
					);
		if ($data['language']['selected']=='indonesia'){
			$data['konten'] = $this->sma_sltg->get_artikelbyid(52);
		}else{
			$data['konten'] = $this->sma_sltg->get_artikelbyid(52);
		}	
		$this->load->view('client_wrapper', $data);
	}


}


/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */

