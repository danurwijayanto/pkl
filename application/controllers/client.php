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
	public function index()
	{	
		$this->load->database();
		$data=array('title'=>'SMA 2 Salatiga',
					'isi' =>'client_konten/home',
					'agenda' => $this->sma_sltg->get_artikelbykat(0,0,8),
					'pengumuman' => $this->sma_sltg->get_artikelbykat(0,0,6),
					'artikel' => $this->sma_sltg->get_artikelbykat(0,0,3)
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
					 'agenda' => $this->sma_sltg->get_artikelbykat(0,0,8)
					);
		$this->load->view('client_wrapper', $data);
	}

	public function kategori($offset = 0){
		$this->load->database();
		$this->load->library('pagination');
		$id = $_GET['id'];
		$tabel = 'artikel';
		$kolom = 'kategori';

		$jumlah= $this->sma_sltg->jumlah_row($tabel,$id,$kolom);
		$config['base_url'] = base_url().'/client/kategori/';
		$config['total_rows'] = $jumlah;
		$config['per_page'] = 4; 
		//$config['uri_segment'] = 3;
		//$dari = $this->uri->segment(4,0);
		$this->pagination->initialize($config); 
		$data=array('title'=>'SMA 2 Salatiga',
					'isi' =>'client_konten/art_bykat',
					 'sidebar_kanan' => 'client_konten/sidebar_kanan',
					 'pagging' => $this->pagination->create_links(),
					 'konten' => $this->sma_sltg->get_artikelbykat($config['per_page'],$offset,$id),
					 'agenda' => $this->sma_sltg->get_artikelbykat(0,0,8)
					);

		$this->load->view('pagination',$data);
	}
}


/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */

