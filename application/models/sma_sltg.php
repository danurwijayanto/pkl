<?php

	Class Sma_sltg extends CI_Model {

		
		/**
			* Menambah artikel baru
			* data : 
		*/
		function simpan_artikel($data) {
			$query = $this->db->insert('artikel',$data);
			if ($this->db->affected_rows() > 0) {
				return TRUE;
			}else {
				return FALSE;
			}

		}

		/**
			*Menambah kategori baru 
			*data : 
		*/
		function simpan_kategori($data) {
			$query = $this->db->insert('kategori',$data);
			if ($this->db->affected_rows() > 0) {
				return TRUE;
			}else {
				return FALSE;
			}

		}

		/**
			*Menampilkan semua kategori
			*data : 
		*/
		function get_list_kategori(){
			$query = "SELECT *  
				FROM kategori";
	        $result = $this->db->query($query);
	        if($result->num_rows() > 0){
	            return $result->result_array();
	        } else {
	            return false;
	        }
		}

		/**
			*Delete Kategori Berdasarkan ID
			*data : 
		*/
		function del_kat_byid($data){
			$query = "DELETE FROM kategori
				WHERE id=$data[id]";
	        $result = $this->db->query($query);
	        if($result){
	            return TRUE;
	        } else {
	            return FALSE;
	        }
		}
	


	}