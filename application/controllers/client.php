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
			$this->lang->load("menu", "english");
			//$this->load->database();

			/**if ($this->session->userdata('logged_in')==NULL) {
				redirect('masukadmin', 'refresh');
			}else{
				$this->session_data = $this->session->userdata('logged_in');
				$this->data_sesi = $this->user_auth->read_user_information($this->session_data);
			}
			**/
	}

	public function index()
	{	
		$this->load->database();
		$data=array('title'=>'SMA 2 Salatiga',
					'isi' =>'client_konten/home',
					'agenda' => $this->sma_sltg->get_artikelbykat(4,0,8,1),
					'pengumuman' => $this->sma_sltg->get_artikelbykat(4,0,6,1),
					'artikel' => $this->sma_sltg->get_artikelbykat(4,0,3,1),
					'berita' => $this->sma_sltg->get_artikelbykat(4,0,9,1),
					'slider_one' => $this->sma_sltg->get_slider(0),
					'slider_two' => $this->sma_sltg->get_slider(1)
					);
		$this->load->view('client_wrapper', $data);
	}

	public function visimisi(){
		$this->load->database();
		$data=array('title'=>'SMA 2 Salatiga',
					'isi' =>'client_konten/profile',
					 'sidebar_kanan' => 'client_konten/sidebar_kanan',
					 'konten' => $this->sma_sltg->get_artikelbyid(13),
					 'tautan'=> TRUE
					);
		$this->load->view('client_wrapper', $data);
	}

	public function artikel(){
		$data=array('title'=>'SMA 2 Salatiga',
					'isi' =>'client_konten/artikel',
					 'sidebar_kanan' => 'client_konten/sidebar_kanan'
					);
		$this->load->view('client_wrapper', $data);
	}

	public function sejarah(){
		$this->load->database();
		$data=array('title'=>'SMA 2 Salatiga',
					'isi' =>'client_konten/profile',
					 'sidebar_kanan' => 'client_konten/sidebar_kanan',
					 'konten' => $this->sma_sltg->get_artikelbyid(12),
					 'tautan'=> TRUE
					);
		$this->load->view('client_wrapper', $data);
	}

	public function tujuan(){
		$this->load->database();
		$data=array('title'=>'SMA 2 Salatiga',
					'isi' =>'client_konten/profile',
					 'sidebar_kanan' => 'client_konten/sidebar_kanan',
					 'konten' => $this->sma_sltg->get_artikelbyid(14),
					 'tautan'=> TRUE
					);
		$this->load->view('client_wrapper', $data);
	}

	public function logo_motto(){
		$this->load->database();
		$data=array('title'=>'SMA 2 Salatiga',
					'isi' =>'client_konten/profile',
					 'sidebar_kanan' => 'client_konten/sidebar_kanan',
					 'konten' => $this->sma_sltg->get_artikelbyid(15),
					 'tautan'=> TRUE
					);
		$this->load->view('client_wrapper', $data);
	}

	public function struktur_organisasi(){
		$this->load->database();
		$data=array('title'=>'SMA 2 Salatiga',
					'isi' =>'client_konten/profile',
					 'sidebar_kanan' => 'client_konten/sidebar_kanan',
					 'konten' => $this->sma_sltg->get_artikelbyid(16),
					 'tautan'=> TRUE
					);
		$this->load->view('client_wrapper', $data);
	}

	public function news($data){
		$this->load->database();

		$data=array('title'=>'SMA 2 Salatiga',
					'isi' =>'client_konten/artikel',
					 'sidebar_kanan' => 'client_konten/sidebar_kanan',
					 'konten' => $this->sma_sltg->get_artikelbyid($data),
					 'agenda' => $this->sma_sltg->get_artikelbykat(4,0,8,1)
					);
		$this->load->view('client_wrapper', $data);
	}

	public function kategori($data=0,$offset=0){
		$this->load->database();
		$this->load->library('pagination');

		$id = $this->input->get('id');
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
					 'konten' => $this->sma_sltg->get_artikelbykat($config['per_page'],$page,$id,1),
					 'konten_row' => $this->sma_sltg->get_artikelbykat(0,$offset,$id,1),
					 'agenda' => $this->sma_sltg->get_artikelbykat(4,0,8,1),
					 'artikel' => $this->sma_sltg->get_artikelbykat(4,0,3,1)
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
					 'konten' => $this->sma_sltg->get_artikelbyid(20),
					 'tautan'=> TRUE
					);
		$this->load->view('client_wrapper', $data);
	}

	public function karyawan(){
		$this->load->database();
		$data=array('title'=>'SMA 2 Salatiga',
					'isi' =>'client_konten/profile',
					 'sidebar_kanan' => 'client_konten/sidebar_kanan',
					 'konten' => $this->sma_sltg->get_artikelbyid(21),
					 'tautan'=> TRUE
					);
		$this->load->view('client_wrapper', $data);
	}

	public function kontak(){
		$this->load->database();
		$data=array('title'=>'SMA 2 Salatiga',
					'isi' =>'client_konten/profile',
					 'sidebar_kanan' => 'client_konten/sidebar_kanan',
					 'konten' => $this->sma_sltg->get_artikelbyid(22),
					 'tautan'=> TRUE
					);
		$this->load->view('client_wrapper', $data);
	}
}


/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */

