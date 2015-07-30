<?php

	Class User_auth extends CI_Model {		
		/**
			* Menambah artikel baru
			* data : 
		*/
		function login($data) {
			$query = "SELECT *  
				FROM user
				WHERE email='$data[email]' AND password='$data[password]'";
			$result = $this->db->query($query);
			if ($this->db->affected_rows() > 0) {
				return TRUE;
			}else {
				return FALSE;
			}
		}

		public function read_user_information($data) {
			$query = "SELECT *  
				FROM user
				WHERE email='$data[email]'";
			$result = $this->db->query($query);
			$query_result = array();
			foreach ($result->result_array() as $row){
				$query_result['id'] = $row['id'];
				$query_result['nama'] = $row['nama'];
				$query_result['email'] = $row['email'];
				$query_result['password'] = $row['password'];
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