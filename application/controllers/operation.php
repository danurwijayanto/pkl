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

	public function __construct() {
		parent::__construct();
		$this->load->database();

		$this->session_data = $this->session->userdata('logged_in');
		$this->data_sesi = $this->user_auth->read_user_information($this->session_data);

	}

	public function index()
	{
		
		$data=array('title'=>'SMA 2 Salatiga',
					'isi' =>'admin_konten/home'
					);
		$this->load->view('admin_wrapper', $data);
	}

	/**
		* Fungsi untuk menyimpan artikel ke database
	*/

	public function simpan_artikel(){
		$this->load->database();
		$data = array(
					'id'=> '',
					'judul' => $this->input->post('judul'),
					'text' => $this->input->post('ckeditor'),
					'kategori' => $this->input->post('kategori'),
					'time' => date("Ymd"),
					'user_id' => $this->data_sesi['id']
				);
		$result=$this->sma_sltg->simpan_artikel($data);
		if ($result == TRUE){
			echo "<script type='text/javascript'>alert('Simpan Berhasil !')</script>";
		} else {
			echo "<script type='text/javascript'>alert('Simpan Gagal !')</script>";
		}
		redirect('admin/tambah_artikel', 'refresh');
	}

	/**
		* End Fungsi untuk menyimpan artikel ke database
	*/

	/**
		* Fungsi untuk Mengganti Artikel
	*/

	public function rubah_artikel(){
		$this->load->database();
		$data = array(
				'id' => $this->input->post('id'),
				'judul' => $this->input->post('judul'),
				'text' => $this->input->post('ckeditor'),
				'kategori' => $this->input->post('kategori'),
				'time' => date("Ymd"),
				'user_id' => $this->data_sesi['id']
			);
		$result=$this->sma_sltg->rubah_artikel($data);
		if ($result == TRUE){
			echo "<script type='text/javascript'>alert('Perubahan Berhasil !')</script>";
		} else {
			echo "<script type='text/javascript'>alert('Perubahan Gagal !')</script>";
		}
		redirect('admin/artikel', 'refresh');
		
	}

	/**
		* End Fungsi untuk Menghapus Artikel
	*/

	public function del_art_byid(){
		$this->load->database();
		$data = array('id' =>  $_GET['id']);
		$result=$this->sma_sltg->del_art_byid($data['id']);
		if ($result == TRUE){
			echo "<script type='text/javascript'>alert('Delete Berhasil !')</script>";
		} else {
			echo "<script type='text/javascript'>alert('Delete Gagal !')</script>";
		}
		redirect('admin/artikel', 'refresh');

	}

	/**
		* Fungsi untuk menyimpan kategori ke database
	*/

	public function simpan_kategori(){
		$this->load->database();
		$data = array('nama' => $this->input->post('kategori'));
		$result=$this->sma_sltg->simpan_kategori($data);
		if ($result == TRUE){
			echo "<script type='text/javascript'>alert('Simpan Berhasil !')</script>";
		} else {
			echo "<script type='text/javascript'>alert('Simpan Gagal !')</script>";
		}
		redirect('admin/kategori', 'refresh');

	}

	/**
		* End Fungsi untuk menyimpan artikel ke database
	*/

	/**
		* Fungsi untuk delete kategori ke berdasarkan id
	*/

	public function del_kat_byid(){
		$this->load->database();
		$id = $_GET['id'];
		$data = array('id' => $id);
		$result=$this->sma_sltg->del_kat_byid($data);
		if ($result == TRUE){
			echo "<script type='text/javascript'>alert('Delete Berhasil !')</script>";
		} else {
			echo "<script type='text/javascript'>alert('Delete Gagal !')</script>";
		}
		redirect('admin/kategori', 'refresh');

	}

	/**
		* End Fungsi untuk delete kategori ke berdasarkan id
	*/

	/**
		* Fungsi untuk mendapatkan kategori ke berdasarkan id dengan AJAX
	*/

	public function get_kat_byid(){
		$this->load->database();
		$id = $_GET['id'];
		$data = array('id' => $id);
		$result=$this->sma_sltg->get_kat_byid($data);
		echo json_encode($result);
	}

	/**
		* End Fungsi untuk mendapatkan kategori ke berdasarkan id dengan AJAX
	*/


	/**
		* Fungsi untuk mendapatkan slider ke berdasarkan id dengan AJAX
	*/

	public function get_slider_byid(){
		$this->load->database();
		$id = $_GET['id'];
		$result=$this->sma_sltg->get_sliderid($id);
		
		foreach ($result as $row){
			$result = array(
					'id' => $row['id'],
					'keterangan' => $row['keterangan'],
					'gambar' => $row['gambar'],
					'link' => $row['link']
				);
		}
		echo json_encode($result);
	}

	/**
		* End Fungsi untuk mendapatkan slider ke berdasarkan id dengan AJAX
	*/


	/**
		* Fungsi untuk Mengganti Kategori using ajax
	*/

	public function ganti_kategori(){
		$this->load->database();
		$data = array(
				'id' => $_GET['id'],
				'value' => $_POST['value']
			);
		$result=$this->sma_sltg->ganti_kategori($data);
		
	}

	/**
		* End Fungsi untuk Mengganti Kategori using ajax
	*/

	/**
		* Fungsi untuk Mengganti slider one using ajax
	*/

	public function ganti_slider_one(){
		$this->load->database();
		$data = array(
				'id' => $_GET['id'],
				'keterangan' => $_POST['keterangan_edit'],
				'file_gambar' => $_POST['file_gambar_edit']
			);
		$result=$this->sma_sltg->ganti_slider_one($data);
		
	}

	/**
		* End Fungsi untuk Mengganti slider one using ajax
	*/

	/**
		* Fungsi untuk Mengganti slider two using ajax
	*/

	public function ganti_slider_two(){
		$this->load->database();
		$data = array(
				'id' => $_GET['id'],
				'link' => $_POST['link_edit'],
				'file_gambar' => $_POST['file_gambar_edit2']
			);
		$result=$this->sma_sltg->ganti_slider_two($data);
		
	}

	/**
		* End Fungsi untuk Mengganti slider two using ajax
	*/

	/**
		* Fungsi untuk Mendapatkan Artikel Berdasarkan Kategori --jkljlkj
	*/

	public function get_artikelbykat(){
		$this->load->database();
		$data = $_GET['id'];
		$result=$this->sma_sltg->get_artikelbykat(0,0,$data);
		
	}

	/**
		* End Fungsi untuk Mendapatkan Artikel Berdasarkan Kategori --jkljlkj
	*/

	/**
		* End Fungsi untuk upload slider admin
	*/

	public function do_upload(){
		$this->load->database();
		//$config['upload_path'] = 'upload\Gambar\images';
		//$config['file_name'] = 'gbr_'.date("YmdYmdHis");
		//$config['allowed_types'] = 'gif|jpg|png';
		//$config['max_size']	= '1000';
 
		//$this->load->library('upload', $config);
 
		//if (!$this->upload->do_upload()){			
       		//$data['message'] = array('error' => $this->upload->display_errors());
       		//echo "<script type='text/javascript'>alert('".$data['message']['error']."')</script>";
        	//$this->load->view('layout/wrapper', $data);
       		//redirect('admin/slider', 'refresh');
		//}
		//else{
			//$gambar = $this->upload->data();
			$data = array(
					'id' => '',
					'keterangan' =>  $this->input->post('keterangan'),
					//'gambar' => $gambar['raw_name'].$gambar['file_ext'],
					'gambar' => $_POST['file_gambar'],
					'tanggal' => date("Ymd"),
					'type' => $_POST['type'],
					'link' =>  $this->input->post('link')
				);
			$result=$this->sma_sltg->upload_gambar($data);
			if ($result == TRUE){
				echo "<script type='text/javascript'>alert('Upload Berhasil !')</script>";
			} else {
				echo "<script type='text/javascript'>alert('Upload Gagal !')</script>";
			}
			//$pesan = 'sukses';
			redirect('admin/slider', 'refresh');
 			//$data = array(
          	//	'isi' => 'konten/admin_kelbar'
       		//);
       		//$data['message'] = array('error' => $this->upload->data());
        	//$this->load->view('layout/wrapper', $data);    
		//}
	}

	/**
		* End Fungsi untuk Upload slider 
	*/

	/**
		* Fungsi untuk Mendapatkan Artikel Berdasarkan Kategori --jkljlkj
	*/

	public function del_slider(){
		$this->load->database();
		$data = $_GET['id'];
		$result=$this->sma_sltg->del_slider($data);
		if ($result == TRUE){
			echo "<script type='text/javascript'>alert('Delete Berhasil !')</script>";
		} else {
			echo "<script type='text/javascript'>alert('Delete Gagal !')</script>";
		}
		redirect('admin/slider', 'refresh');
	}

	/**
		* End Fungsi untuk Mendapatkan Artikel Berdasarkan Kategori --jkljlkj
	*/

	/**
		* Fungsi untuk mengganti username dan email
	*/

	public function change_useremail(){
		$this->load->database();
		$data = array(
			'id' => $_POST['id'],
			'nama' => $_POST['nama'],
			'email' => $_POST['email']
			);
		$result=$this->sma_sltg->change_useremail($data);
		if ($result == TRUE){
			echo "<script type='text/javascript'>alert('Pergantian Berhasil !')</script>";
			$sess_array = array(
						'email' => $_POST['email']
					);

					// Add user data in session
					$this->session->set_userdata('logged_in', $sess_array);
		} else {
			echo "<script type='text/javascript'>alert('Pergantian Gagal !')</script>";
		}
		redirect('admin/akunku', 'refresh');
	}

	/**
		* End Fungsi untuk mengganti username dan email
	*/

	/**
		* Fungsi untuk mengganti password
	*/

	public function ganti_password(){
		$this->load->database();
		$data = array(
			'id' => $_POST['id'],
			'pass' => $_POST['pass'],
			'passbaru' => $_POST['passbaru'],
		);
		$result=$this->sma_sltg->ganti_password($data);
		if ($result == TRUE){
			echo "<script type='text/javascript'>alert('Pergantian Password Berhasil !')</script>";
		} else {
			echo "<script type='text/javascript'>alert('Pergantian Password Gagal !')</script>";
		}
		redirect('admin/akunku', 'refresh');
	}

	/**
		* End Fungsi untuk mengganti password
	*/

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */