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
		
		$data=array('title'=>'SMA 2 Salatiga',
					'isi' =>'client_konten/home'
					);
		$this->load->view('client_wrapper', $data);
	}

	public function visimisi(){
		$this->load->database();
		$data=array('title'=>'SMA 2 Salatiga',
					'isi' =>'client_konten/visimisi',
					 'sidebar_kanan' => 'client_konten/sidebar_kanan',
					 'visi_misi' => $this->sma_sltg->get_artikelbyid(13)
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
					'isi' =>'client_konten/sejarah',
					 'sidebar_kanan' => 'client_konten/sidebar_kanan',
					 'sejarah' => $this->sma_sltg->get_artikelbyid(12)
					);
		$this->load->view('client_wrapper', $data);
	}

	public function tujuan(){
		$this->load->database();
		$data=array('title'=>'SMA 2 Salatiga',
					'isi' =>'client_konten/tujuan',
					 'sidebar_kanan' => 'client_konten/sidebar_kanan',
					 'tujuan' => $this->sma_sltg->get_artikelbyid(14)
					);
		$this->load->view('client_wrapper', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */