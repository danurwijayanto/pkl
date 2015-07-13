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

	/**
		* Default Page Admin
	*/
	public function index()
	{
		
		$data=array('title'=>'Admin Page',
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
		
		$data=array('title'=>'Kelola Artikel',
					'isi' =>'admin_konten/artikel'
					);
		$this->load->view('admin_wrapper', $data);
	}

	public function tambah_artikel()
	{
		
		$this->load->library('ckeditor');
		$this->load->helper('ckeditor_helper');
		$this->ckeditor->basePath = base_url().'assets/ckeditor/';
		$this->ckeditor->config['toolbar'] = "Full";
		$this->ckeditor->config['language'] = 'en';
	            
		$data=array('title'=>'Tambah Artikel',
					'isi' =>'admin_konten/tambah_artikel'
					);
		$this->load->view('admin_wrapper', $data);
	}

	/**
		* End Fungsi dan Halaman Artikel
	*/

	/**
		* Fungsi dan Halaman Kategori
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
		* End Fungsi dan Halaman Kategori
	*/

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */