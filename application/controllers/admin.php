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
		}
	}

	/**
		* Default Page Admin
	*/	

	public function index()
	{
		$session_data = $this->session->userdata('logged_in');
		$result = $this->user_auth->read_user_information($session_data);
		$data=array(
			'totalartikel' => count($this->sma_sltg->get_semuaartikel()),
			'totalkategori' => count($this->sma_sltg->get_semuakat()),
			'session' => $result,
			'title'=>'Admin Page',
			'isi' =>'admin_konten/home'
		);
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
					'isi' =>'admin_konten/artikel'
					);
		$data['artikel'] = $this->sma_sltg->get_semuaartikel();
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
					'isi' =>'admin_konten/tambah_artikel'
					);
		$data['kategori'] = $this->sma_sltg->get_semuakat();
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
					'isi' =>'admin_konten/kategori'
					);

		$data['kategori'] = $this->sma_sltg->get_list_kategori();
		$this->load->view('admin_wrapper', $data);
	}

	/**
		* End Fungsi mendapatkan semua Kategori
	*/

	public function edit_artikel(){
		$this->load->database();
		$id = $_GET['id'];
		$data=array('title'=>'Kelola Kategori',
					'isi' =>'admin_konten/tambah_artikel'
					);
		$data['artikel'] = $this->sma_sltg->get_artikelbyid($id);
		$data['kategori'] = $this->sma_sltg->get_list_kategori();
		//mengganti tombol simpan dengan edit
		$data['simpan_edit'] = TRUE;
		$this->load->view('admin_wrapper', $data);
	}

	/**
		* End Fungsi theme slider
	*/

	public function slider(){
		$this->load->database();
		$data=array('title'=>'Kelola Kategori',
					'isi' =>'admin_konten/theme_slider'
					);
		$data['slider_one'] = $this->sma_sltg->get_slider(0);
		$data['slider_two'] = $this->sma_sltg->get_slider(1);
		//$data['kategori'] = $this->sma_sltg->get_list_kategori();
		//$data['simpan_edit'] = TRUE;
		$this->load->view('admin_wrapper', $data);
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */