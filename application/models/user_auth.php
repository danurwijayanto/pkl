<?php

	Class User_auth extends CI_Model {		
		/**
			* Menambah artikel baru
			* data : 
		*/
		function login($data) {
			//$salt = '123NgopoNdes**//';
			//encrypt password inputan lama
			$password = md5(md5($data['password']));
			//Cek Password Lama
			$query = "SELECT *  
				FROM user
				WHERE email='$data[email]' AND password='$password'";
			$result = $this->db->query($query);
			if ($result->num_rows() > 0) {
				return TRUE;
			}else {
				return FALSE;
			}
		}

		public function read_user_information($data) {
			$query = "SELECT user.*, kategori.nama  
				FROM user, kategori
				WHERE email='$data[email]' AND user.role=kategori.id";
			$result = $this->db->query($query);
			$query_result = array();
			foreach ($result->result_array() as $row){
				$query_result['id'] = $row['id'];
				$query_result['nama_user'] = $row['nama_user'];
				$query_result['email'] = $row['email'];
				$query_result['password'] = $row['password'];
				$query_result['role'] = $row['nama'];
			}
	        if($result->num_rows() == 1){
	            return $query_result;
			}else {
				return FALSE;
			}	
		}
	}
	/* End of file sma_sltg.php */
	/* Location: ./application/models/sma_sltg.php */