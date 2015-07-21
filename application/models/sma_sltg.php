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
			* Merubah artikel 
			* data : 
		*/
		function rubah_artikel($data) {
			$query = "UPDATE artikel 
				SET judul='$data[judul]', text='$data[text]', kategori='$data[kategori]' , time='$data[time]'
				WHERE id=$data[id]";
			$result = $this->db->query($query);
			if ($query) {
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

		/**
			* Get Kategori Berdasarkan ID AJAX
			* data : 
		*/
		function get_kat_byid($data){
			$query = "SELECT nama FROM kategori
				WHERE id=$data[id]";
	        $result = $this->db->query($query);

	        $index = 0;
			$query_result = array();
			
			foreach ($result->result_array() as $row){
				$query_result[$index] = $row['nama'];
				$index++;
			}
			return $query_result;
		}

		/**
			*Ganti Kategori Berdasarkan ID
			*data : 
		*/
		function ganti_kategori($data){
			$query = "UPDATE kategori SET nama='$data[value]'
				WHERE id=$data[id]";
	        $result = $this->db->query($query);
	        if($result){
	            return TRUE;
	        } else {
	            return FALSE;
	        }

		}

		/**
			* Mendapatkan list kateogri
			* data : 
		*/
		function get_semuakat(){
			$query = "SELECT * 
				FROM kategori";
	        $result = $this->db->query($query);
	        if($result){
	            return $result->result_array();
	        } else {
	            return FALSE;
	        }

		}

		/**
			* Mendapatkan list artikel
			* data : 
		*/
		function get_semuaartikel(){
			$query = "SELECT artikel.* , kategori.nama 
				FROM artikel, kategori
				WHERE artikel.kategori = kategori.id";
	        $result = $this->db->query($query);
	        if($result){
	            return $result->result_array();
	        } else {
	            return FALSE;
	        }

		}

		/**
			* Mendapatkan artikel berdasarkan ID
			* data : 
		*/
		function get_artikelbyid($data){
			$query = "SELECT artikel.* , kategori.nama
				FROM artikel, kategori
				WHERE artikel.kategori = kategori.id AND artikel.id=$data";
	        $result = $this->db->query($query);
	      
			$query_result = array();
			foreach ($result->result_array() as $row){
				$query_result['id'] = $row['id'];
				$query_result['judul'] = $row['judul'];
				$query_result['text'] = $row['text'];
				$query_result['nama'] = $row['nama'];
				$query_result['kategori'] = $row['kategori'];
				$query_result['time'] = $row['time'];
			}
	        if($result){
	            return $query_result;
	        } else {
	            return FALSE;
	        }

		}

		/**
			* Mendapatkan artikel berdasarkan Kategori
			* data : 
		*/
		function get_artikelbykat($limit=null, $offset=null, $data=null){
			if (($limit <= 0) AND ($offset<= 0)){
				$query = "SELECT artikel.* , kategori.nama 
					FROM artikel, kategori
					WHERE artikel.kategori = kategori.id AND kategori.id=$data";
		        $result = $this->db->query($query);
		      
		        if($result){
		            return $result->result_array();
		        } else {
		            return FALSE;
		        }
		    }else{
		    	$query = "SELECT artikel.* , kategori.nama 
					FROM artikel, kategori
					WHERE artikel.kategori = kategori.id AND kategori.id=$data
					LIMIT $limit OFFSET $offset";
		        $result = $this->db->query($query);
		    	if($result){
		            return $result->result_array();
		        } else {
		            return FALSE;
		        }
		    }    
		}


		/**
			* Delete artikel berdasarkan ID
			* data : 
		*/
		function del_art_byid($data){
			$query = "DELETE FROM artikel
				WHERE id=$data";
	        $result = $this->db->query($query);

	        if($result){
	            return TRUE;
	        } else {
	            return FALSE;
	        }
		}

		/**
			* Menghitung jumlah row			
			* data : 
		*/
		function jumlah_row($tabel, $id, $kolom){
			$query = "SELECT * 
					FROM $tabel
					WHERE $tabel.$kolom=$id";
	        $result = $this->db->query($query);

	        if($result){
	            return $result->num_rows;
	        } else {
	            return FALSE;
	        }
		}
	}
	/* End of file sma_sltg.php */
	/* Location: ./application/models/sma_sltg.php */