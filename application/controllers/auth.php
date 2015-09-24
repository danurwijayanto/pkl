<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {

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

	public function user_login_process()
	{
		$this->load->database();
		$this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');

			if ($this->form_validation->run() == FALSE) {
				//Jika validasi gagal user akan diarahkan kembali ke halaman login
				redirect('masukadmin', 'refresh');
			} 
			else {
				$data = array(
					'email' => $this->input->post('email'),
					'password' => $this->input->post('password')
				);

				$result = $this->user_auth->login($data);
				if($result == TRUE){
					$sess_array = array(
						'email' => $this->input->post('email')
					);

					// Add user data in session
					$this->session->set_userdata('logged_in', $sess_array);
					redirect('admin', 'refresh');
					
				}else{
					$data = array(
						'message' => 'Invalid Username or Password'
					);
					$this->load->view('admin_konten/login', $data);
					//redirect('kelbar', 'refresh');
				}
			}
	}

	// Logout from admin page
	public function logout() {

		// Removing session data
		$sess_array = array(
			'email' => ''
		);
		$this->session->unset_userdata('logged_in', $sess_array);
		$data['message'] = 'Successfully Logout';
		$this->load->view('admin_konten/login', $data);
	}

	//function request password
	public function request_lupa_password(){
		// Genereate link reset password
		$this->load->model('user_auth');
		$this->load->model('reset_password');
		$data['title'] = "Reset Password";
		//$data['useSimple'] = true;
		
		if(isset($_POST['submit'])){
			$email = $this->user_auth->cekEmail();
			
			if($email !== 0){
				$dataAdmin = $this->admin->getAdminbyEmail($email);
				$tujuanEmail = $dataAdmin->email;
				$kontenEmail = $this->reset_password->sendRequestKey($tujuanEmail);
					
				// Kirim email
				$this->load->library('email');
					
				$this->email->from('panitia@carakafest.org', 'MSDNAA FSM');
				$this->email->to($tujuanEmail);
					
				$this->email->subject("[MSDNAA FSM] Reset Password");
				$this->email->message($kontenEmail);
					
				$berhasil = $this->email->send();
					
				$reportToLog = "\r\n[".date('j F Y, H:i:s')."]\t: mailto [".$tujuanEmail."]\t: ";
					
				if (!$berhasil) {
					$reportToLog .= "Mailer Error!";
					$data['submitErrors'] = "Maaf, gagal mengirim email";
				} else {
					$reportToLog .= "Message sent...";
					$dateChunk = date("Ymd-His");
					$reportToLog .= "\t[MSDNAA FSM] | [".$dateChunk.".html]";
						
					file_put_contents(APPPATH."/logs/email.log", $reportToLog, FILE_APPEND);
					file_put_contents(APPPATH."/logs/emails/".$dateChunk.".html", $kontenEmail);
						
					$data['submitSukses'] = "Password anda berhasil di-reset. <br>Silahkan periksa email Anda untuk melakukan tahap berikutnya";
				}
			}else{
				$data['submitErrors'] = "Maaf, email anda tidak ditemukan";
			}
		}
		$this->load->view('admin_konten/request_lupa_password', $data);		
	}
	
	public function lupa_password($requestKey = null){
		$data['pageTitle'] = "Reset Password";
		$data['useSimple'] = true;
		
		$now = new DateTime ();
		$sekarang = $now->format ( 'Y-m-d H:i:s' );
		if ($requestKey != null) {
			$this->load->model("reset_password");
			$dataRequest = $this->reset_password->getRequestKey($requestKey);
			if ($dataRequest != null) {
				if (($dataRequest->expiredRequest >= $sekarang) && ($dataRequest->statusRequest == 1)) {
					if (isset($_POST['submit'])) {
						$passBaru1	= ($this->input->post("newPassword"));
						
						if ($this->form_validation->run() == FALSE){
						
						}else {
							$this->load->model("admin");
							$admin = $this->admin->getAdminbyId($dataRequest->idAdmin);	
							$queryResult = $this->admin->set_hashed_password($admin['username'], $passBaru1);
							if ($queryResult == null) {
								$this->reset_password->deactivateKey($requestKey);
								$data['submitSukses'] = "<span class=\"fa fa-check\"></span> Kata sandi berhasil direset.";
								$data['hideForm'] = true;
							} else {
								$data['errors'] = $queryResult;
							}
						}
					} // End if POST
				} else {
					$data['errors'] = "Request sudah tidak berlaku. Silakan request ulang.";
					$data['hideForm'] = true;
				}
			} else {
				$data['errors'] = "Kunci request tidak valid.";
				$data['hideForm'] = true;
			}
		} else {
			$this->output->set_header("Location: ".site_url("/control_autentikasi"));
			return;
		}
		$data['formAction'] = "/control_autentikasi/lupa_password/".$requestKey;
		$this->load->template_admin("reset_lupa_password", $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */