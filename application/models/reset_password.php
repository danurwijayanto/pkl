<?php
class reset_password extends CI_Model {
	private $idRequest, $idAdmin, $requestKey, $tanggalRequest, $expiredRequest, $statusRequest;
	
	public function sendRequestKey($tujuanEmail) {
		$this->load->database();
		
		$admin = $this->user_auth->get_userby_email($tujuanEmail);

		$this->idAdmin = $admin['id'];
		$rand = substr ( md5 ( $admin['email'] ), rand ( 0, 26 ), 3 );
		$rand .= substr ( md5 ( microtime () ), rand ( 0, 26 ), 5 );
		$this->requestKey = $rand;
		$now = new DateTime ();
		$this->tanggalRequest = $now->format ( 'Y-m-d H:i:s' );
		$now->add(new DateInterval('PT1H'));
		$this->expiredRequest = $now->format('Y-m-d H:i:s');
		$this->statusRequest = 1;
		
		$data = array (
				'idAdmin' => $this->idAdmin,
				'requestKey' => $this->requestKey,
				'tanggalRequest' => $this->tanggalRequest,
				'expiredRequest' => $this->expiredRequest,
				'statusRequest' => $this->statusRequest 
		);
		
		$this->db->insert ( 'reset_password', $data );
		
		$content = "
			<html>
				<title>[MSDNAA] Lupa Password</title>
				<style>
					body {sans-serif; color: #1B253F; font-size: 12pt;}
					a {color: #00496D;text-decoration: none;}
				</style>
				<body>
					<p>Kami turut bersimpati atas kehilangan password anda.</p>
					<p>Tetapi jangan khawatir! Anda dapat menggunakan link berikut untuk mereset password anda:</p>
					<p>" . site_url ( "auth/lupa_password/" . $this->requestKey ) . "</p>
					<p>Jika anda tidak menggunakan link ini dalam waktu 1 jam, maka link akan dinonaktifkan.</p>
					<p>Terimakasih<br>Administrator WebsiteSMANDA2</p>
				</body>
			</html>";

		return $content;
	}
	
	public function getRequestKey($requestKey) {
		$this->db->where("requestKey", $requestKey);
		$result = $this->db->get("reset_password");
		$row = $result->row();
		return $row;
	}
	
	public function deactivateKey($requestKey) {
		$this->db->where("requestKey",$requestKey);
		$result = $this->db->update("reset_password",array(
				"statusRequest" => 0
		));
		return $result;
	}
}