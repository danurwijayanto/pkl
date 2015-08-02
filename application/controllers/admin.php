<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

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

		if ($this->session->userdata('logged_in')==NULL) {
			redirect('masukadmin', 'refresh');
		}else{
			$this->session_data = $this->session->userdata('logged_in');
			$this->data_sesi = $this->user_auth->read_user_information($this->session_data);
		}
	}

	/**
		* Default Page Admin
	*/	

	public function index()
	{
		
		$data=array(
			'totalartikel' => count($this->sma_sltg->get_semuaartikel()),
			'totalkategori' => count($this->sma_sltg->get_semuakat()),
			'session' => $this->data_sesi,
			'title'=>'Admin Page',
			'isi' =>'admin_konten/home'
		);
		$data['active_parent']= '';
		$data['parent'] = '';
		$this->load->view('admin_wrapper', $data);
	}
	/**
		* End Default Page Admin
	*/


	/**
		* Fungsi dan Halaman Artikel
	*/
	public function artikel()
	{
		$this->load->database();
		$data=array('title'=>'Kelola Artikel',
					'isi' =>'admin_konten/artikel',
					'session' => $this->data_sesi
					);
		$data['artikel'] = $this->sma_sltg->get_semuaartikel();
		$data['active_parent']= 'artikel';
		$data['active'] = 'daftar_artikel';
		$this->load->view('admin_wrapper', $data);
	}

	public function tambah_artikel()
	{
		$this->load->database();
		$this->load->library('ckeditor');
		$this->load->helper('ckeditor_helper');
		$this->ckeditor->basePath = base_url().'assets/ckeditor/';
		$this->ckeditor->config['toolbar'] = "Full";
		$this->ckeditor->config['language'] = 'en';
	    
		$data=array('title'=>'Tambah Artikel',
					'isi' =>'admin_konten/tambah_artikel',
					'session' => $this->data_sesi
					);
		$data['kategori'] = $this->sma_sltg->get_semuakat();
		$data['active_parent']= 'artikel';
		$data['active'] = 'tambah_artikel';
		$this->load->view('admin_wrapper', $data);
	}

	/**
		* End Fungsi dan Halaman Artikel
	*/

	/**
		* Fungsi mendapatkan semua Kategori
	*/

	public function kategori(){
		$this->load->database();
		$data=array('title'=>'Kelola Kategori',
					'isi' =>'admin_konten/kategori',
					'session' => $this->data_sesi
					);

		$data['kategori'] = $this->sma_sltg->get_list_kategori();
		$data['active_parent']= 'artikel';
		$data['active'] = 'kategori';
		$this->load->view('admin_wrapper', $data);
	}

	/**
		* End Fungsi mendapatkan semua Kategori
	*/

	public function edit_artikel(){
		$this->load->database();
		$id = $_GET['id'];
		$data=array('title'=>'Kelola Kategori',
					'isi' =>'admin_konten/tambah_artikel',
					'session' => $this->data_sesi
					);
		$data['artikel'] = $this->sma_sltg->get_artikelbyid($id);
		$data['kategori'] = $this->sma_sltg->get_list_kategori();
		$data['active_parent']= 'artikel';
		$data['active'] = 'none';
		//mengganti tombol simpan dengan edit
		$data['simpan_edit'] = TRUE;
		$this->load->view('admin_wrapper', $data);
	}

	/**
		* Fungsi theme slider
	*/

	public function slider(){
		$this->load->database();
		$data=array('title'=>'Kelola Kategori',
					'isi' =>'admin_konten/theme_slider',
					'session' => $this->data_sesi
					);
		$data['slider_one'] = $this->sma_sltg->get_slider(0);
		$data['slider_two'] = $this->sma_sltg->get_slider(1);
		$data['active_parent']= 'tampilan';
		$data['active'] = 'slider';
		//$data['kategori'] = $this->sma_sltg->get_list_kategori();
		//$data['simpan_edit'] = TRUE;
		$this->load->view('admin_wrapper', $data);
	}

	/**
		* End Fungsi theme slider
	*/

	/**
		* Fungsi theme slider
	*/

	public function akunku(){
		$this->load->database();
		$data=array('title'=>'My Account',
					'isi' =>'admin_konten/akun_detail',
					'session' => $this->data_sesi
					);
		$this->load->view('admin_wrapper', $data);
	}

	/**
		* End Fungsi theme slider
	*/

	public function manage_images(){
		$this->load->database();
		$data=array('title'=>'Kelola Gambar',
					'isi' =>'admin_konten/manage_files',
					'session' => $this->data_sesi,
					'kcfinder' => 'images'
					);
		$data['active_parent']= 'files';
		$data['active'] = 'images';
		$this->load->view('admin_wrapper', $data);
	}

	/**
		* End Fungsi theme slider
	*/

	/**
		* End Fungsi manage files
	*/

	public function manage_files(){
		$this->load->database();
		$data=array('title'=>'Kelola Files',
					'isi' =>'admin_konten/manage_files',
					'session' => $this->data_sesi,
					'kcfinder' => 'files'
					);
		$data['active_parent']= 'files';
		$data['active'] = 'file';
		$this->load->view('admin_wrapper', $data);
	}

	/**
		* End Fungsi manage_files
	*/
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */