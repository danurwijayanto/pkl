<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Operation extends CI_Controller {

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
					'isi' =>'admin_konten/home'
					);
		$this->load->view('admin_wrapper', $data);
	}

	public function simpan_artikel(){
		$this->load->database();
		$data = array(
					'id'=>'',
					'text' => $this->input->post('ckeditor')
				);
		$result=$this->sma_sltg->simpan_artikel($data);
		if ($result == TRUE){
			echo "<script type='text/javascript'>alert('Upload Berhasil !')</script>";
		} else {
			echo "<script type='text/javascript'>alert('Upload Gagal !')</script>";
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */