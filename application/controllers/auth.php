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
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */