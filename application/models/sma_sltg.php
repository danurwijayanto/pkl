<?php

	Class Sma_sltg extends CI_Model {

		
	// Insert registration data in database
	function simpan_artikel($data) {
		$query = $this->db->insert('artikel',$data);
		if ($this->db->affected_rows() > 0) {
			return TRUE;
		}else {
			return FALSE;
		}

		}
	}