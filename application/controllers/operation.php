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

	/**
		* Fungsi untuk menyimpan artikel ke database
	*/

	public function simpan_artikel(){
		$this->load->database();
		$txt = $_GET['ckeditor'];
		$data = array(
					'id'=>'',
					'text' => $txt
				);
		$result=$this->sma_sltg->simpan_artikel($data);
		if ($result == TRUE){
			echo "<script type='text/javascript'>alert('Simpan Berhasil !')</script>";
		} else {
			echo "<script type='text/javascript'>alert('Simpan Gagal !')</script>";
		}
	}

	/**
		* End Fungsi untuk menyimpan artikel ke database
	*/

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
		* Fungsi untuk Mengganti Kategori
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
		* End Fungsi untuk Mengganti Kategori
	*/
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */