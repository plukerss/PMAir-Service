
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Homelogin extends CI_Controller {

function index(){  	  //// ฟังชั่นในการเรียกใช้งานครั้งแรก 
	$session_data = $this->session->userdata('loginData'); /// แรกข้อมูลที่เก็บใน session
 	if($session_data){ /// เช็คว่า session มีค่า จริง หรือ เท็จ
		header( 'Location: '.base_url().'index.php/CheckLogin/redirects' ); /// ถ้าจริง ให้ไปที่ Contorller CheckLogin ฟังชั่น redirects
	}else{
		$data['error']=""; /// set ค่า ตั้งต้น ข้อความ error ให้เป็นค่าว่าง เพื่อ กันไม่ให้ error
 		$this->load->view('home_login',$data); /// loadview ชื่อ home_login ส่ง array $data ขึ้นไปด้วย
	}
 }
 
 function logout(){  /// ฟังชั่น ออกจากระบบ
	 $this->session->unset_userdata('loginData'); /// ลบค่าใน session ชื่อ loginData
	 header( 'Location: '.base_url().'index.php/CheckLogin/redirects' ); //ไปที่ Contorller CheckLogin ฟังชั่น redirects
 }
}

?>