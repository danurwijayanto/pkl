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
				SET judul='$data[judul]', text='$data[text]', kategori='$data[kategori]' , time='$data[time]' , bahasa='$data[bahasa]'
				WHERE id=$data[id]";
			$result = $this->db->query($query);
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
			*Delete Kategori Berdasarkan ID
			*data : 
		*/
		function del_kat_byid($data){
			$query = "DELETE FROM kategori
				WHERE id=$data[id]";
	        $result = $this->db->query($query);
	        if($this->db->affected_rows() > 0){
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
	        if($this->db->affected_rows() > 0){
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
			* Mendapatkan list artikel sesuak status
			* data : 
		*/
		function get_artikelbystat($status, $bahasa=NULL){
			if ($bahasa==0){
				$query = "SELECT artikel.* , kategori.nama , status.nama_status
				FROM artikel, kategori, status
				WHERE artikel.status=$status AND artikel.kategori=kategori.id AND artikel.status=status.id_status";
	        	$result = $this->db->query($query);
			}else{
				$query = "SELECT artikel.* , kategori.nama , status.nama_status
				FROM artikel, kategori, status
				WHERE artikel.status=$status AND artikel.kategori=kategori.id AND artikel.status=status.id_status AND artikel.bahasa=$bahasa";
	        	$result = $this->db->query($query);
			}
			
	        if($result){
	            return $result->result_array();
	        } else {
	            return FALSE;
	        }

		}

		/**
			* Mendapatkan list kategori kecuali kategori admin
			* data : 
		*/
		function get_kat(){
			$query = "SELECT * 
				FROM kategori
				LIMIT 1, 18446744073709551615";
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
			$query = "SELECT artikel.* , kategori.nama, user.nama_user, bahasa.nama_bahasa
				FROM artikel, kategori, user, bahasa
				WHERE artikel.kategori = kategori.id AND artikel.id=$data AND artikel.user_id=user.id AND artikel.bahasa=bahasa.id_bahasa";
	        $result = $this->db->query($query);
	      
			$query_result = array();
			foreach ($result->result_array() as $row){
				$query_result['id'] = $row['id'];
				$query_result['judul'] = $row['judul'];
				$query_result['text'] = $row['text'];
				$query_result['nama'] = $row['nama'];
				$query_result['kategori'] = $row['kategori'];
				$query_result['time'] = $row['time'];
				$query_result['nama_user'] = $row['nama_user'];
				$query_result['status'] = $row['status'];
				$query_result['bahasa'] = $row['bahasa'];
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
		function get_artikelbykat($limit=null, $offset=null, $data=null, $status, $bahasa){
			if (($limit <= 0) AND ($offset<= 0)){
				if ($bahasa <=0){
					$query = "SELECT artikel.* , kategori.nama 
					FROM artikel, kategori
					WHERE artikel.kategori = kategori.id AND kategori.id=$data AND artikel.status=$status
					ORDER BY artikel.time DESC";
				}else{
					$query = "SELECT artikel.* , kategori.nama 
					FROM artikel, kategori
					WHERE artikel.kategori = kategori.id AND kategori.id=$data AND artikel.status=$status AND artikel.bahasa=$bahasa
					ORDER BY artikel.time DESC";
				}
				
		        $result = $this->db->query($query);
		      
		        if($result){
		            return $result->result_array();
		        } else {
		            return FALSE;
		        }
		    }else{
		    	$query = "SELECT artikel.* , kategori.nama, user.nama_user
					FROM artikel, kategori, user
					WHERE artikel.kategori = kategori.id AND kategori.id=$data AND artikel.user_id=user.id AND artikel.status=$status AND artikel.bahasa=$bahasa
					ORDER BY artikel.time DESC
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

		/**
			* Upload Gambar	
			* data : 
		*/
		function upload_gambar($data){
			$query = $this->db->insert('slider',$data);
			if ($this->db->affected_rows() > 0) {
				return TRUE;
			}else {
				return FALSE;
			}
		}

		/**
			* Get Semua Slider gambar	
			* data : 
		*/
		function get_slider($data){
			$query = "SELECT *  
				FROM slider
				WHERE type=$data";
	        $result = $this->db->query($query);
	        if($result){
	            return $result->result_array();
	        } else {
	            return FALSE;
	        }
		}

		/**
			* Get Semua Slider gambar	
			* data : 
		*/
		function get_sliderid($data){
			$query = "SELECT *  
				FROM slider
				WHERE id=$data";
	        $result = $this->db->query($query);
	        if($result){
	            return $result->result_array();
	        } else {
	            return FALSE;
	        }
		}

		/**
			* Delete artikel berdasarkan ID
			* data : 
		*/
		function del_slider($data){
			$get_detail = $this->get_sliderid($data);
			$query = "DELETE FROM slider
				WHERE id=$data";
	        $result = $this->db->query($query);

	        if($this->db->affected_rows() >= 1){
		        return TRUE;
		    } else {
		        return FALSE;
		    }
		}

		/**
			* Change username dan email
			* data : 
		*/
		function change_useremail($data){
			$query = "UPDATE user 
				SET nama_user='$data[nama]', email='$data[email]', role=$data[role]
				WHERE id=$data[id]";
			$result = $this->db->query($query);
			if ($query) {
				return TRUE;
			}else {
				return FALSE;
			}
		}

		/**
			* Change password
			* data : 
		*/
		function ganti_password($data){
			// == Generate hash untuk password baru
			//$salt = '123NgopoNdes**//';
			//encrypt password inputan lama
			/*$password = md5(md5($data['pass']));
			//Cek Password Lama
			$cek = "SELECT password
					FROM user
					WHERE id=$data[id] AND password='$password'";
			$cek = $this->db->query($cek);
			$pass_lama = $cek->result_array();

			//Membandingkan Dengan Password Baru
			if ($pass_lama!=NULL){
			*/
				//Encrypt password baru
				$passwordHash = md5(md5($data['passbaru']));

				$query = "UPDATE user 
				SET password='$passwordHash'
				WHERE id=$data[id]";
				$result = $this->db->query($query);
				if ($query) {
					return TRUE;
				}else {
					return FALSE;
				}
			/*	
			}else {
				return FALSE;
			}*/
		}

		/**
			*Ganti slider one Berdasarkan ID
			*data : 
		*/
		function ganti_slider_one($data){
			$query = "UPDATE slider SET keterangan='$data[keterangan]', gambar='$data[file_gambar]'
				WHERE id=$data[id]";
	        $result = $this->db->query($query);
	        if($result){
	            return TRUE;
	        } else {
	            return FALSE;
	        }

		}

		/**
			*Ganti slider two Berdasarkan ID
			*data : 
		*/
		function ganti_slider_two($data){
			$query = "UPDATE slider SET link='$data[link]', gambar='$data[file_gambar]'
				WHERE id=$data[id]";
	        $result = $this->db->query($query);
	        if($result){
	            return TRUE;
	        } else {
	            return FALSE;
	        }

		}

		/**
			*Mendapatkan list seluruh user
			*data : 
		*/
		function get_alluser(){
			$query = "SELECT user.*, kategori.nama 
				FROM user, kategori
				WHERE user.role = kategori.id";
	        $result = $this->db->query($query);
	        if($result){
	            return $result->result_array();
	        } else {
	            return FALSE;
	        }
		}

		/**
			* Fungsi Edit User By Id 
		*/
		public function get_userbyid($data) {
			$query = "SELECT user.*, kategori.nama, kategori.id as kat_id  
				FROM user, kategori
				WHERE user.id='$data' AND user.role=kategori.id";
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

		/**
			* Tambah User
			* data : 
		*/
		function tambah_user($data){
			$query = $this->db->insert('user',$data);
			if ($this->db->affected_rows() > 0) {
				return TRUE;
			}else {
				return FALSE;
			}
		}

		/**
			* Deletevuser berdasarkan ID
			* data : 
		*/
		function del_user_byid($data){
			$query = "DELETE FROM user
				WHERE id=$data[id]";
	        $result = $this->db->query($query);

	        if($this->db->affected_rows() >= 1){
		        return TRUE;
		    } else {
		        return FALSE;
		    }
		}

		/**
			* Mengemablikan author artikel ke super admin
		*/
		function change_superadmin($data){
			$query = "SELECT * FROM artikel
				WHERE user_id=$data[id]";
			$result = $this->db->query($query);

			foreach ($result->result_array() as $row)
			{
			   $update = "UPDATE artikel SET user_id=1 where user_id=$row[user_id]";
			   $hasil =  $this->db->query($update);			
			}
		}

		/**
			* Publish Artikel Berdasarkan id
			* data : 
		*/
		function publish($data){
			$query = "UPDATE artikel
				SET status=1
				WHERE id=$data[id]";
	        $result = $this->db->query($query);
	        if($this->db->affected_rows() >= 1){
		        return TRUE;
		    } else {
		        return FALSE;
		    }
		}

		/**
			* Memasukkan Artikel Berdasarkan id
			* data : 
		*/
		function draft($data){
			$query = "UPDATE artikel
				SET status=2
				WHERE id=$data[id]";
	        $result = $this->db->query($query);
	        if($this->db->affected_rows() >= 1){
		        return TRUE;
		    } else {
		        return FALSE;
		    }
		}

		/**
			*Mendapatkan list bahasa
			*data : 
		*/
		function get_bahasa(){
			$query = "SELECT *
				FROM bahasa";
	        $result = $this->db->query($query);
	        if($result){
	            return $result->result_array();
	        } else {
	            return FALSE;
	        }
		}

	}	
	/* End of file sma_sltg.php */
	/* Location: ./application/models/sma_sltg.php */
	