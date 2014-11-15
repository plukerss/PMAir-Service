<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class CheckLogin extends CI_Controller {

 function __construct()
 {
   parent::__construct();
 }

 function index()
 {  
 	$emUsername =  $this->input->post('emUsername'); /// รับค่า input ชื่อ username
	$emPassword =  $this->input->post('emPassword');/// รับค่า input ชื่อ password
	
	$this->Employee->setemUsername($emUsername); //// set ค่า username ใน Model Member
	$this->Employee->setemPassword($emPassword); //// set ค่า password ใน Model Member
	
	$data = $this->Employee->login();  ///// เรียกใช้ ฟังชั่น login ใน Model Member และน้ำตัวแปล $data มารับค่าที่ return กลับมา
	
	if($data){ /// เช็คค่า $data ว่ามีหรือไม่
		foreach($data as $r)  // สั่งวน เพื่อเก็บค่าที่อบู่ใน $data
		$sesData = array();
				$sesData = array(
				  'emUsername' => $r->emUsername,
				  'emStatus' => $r->emStatus
				);
	
 	 		$this->session->set_userdata('loginData',$sesData); ////นำค่า $sesData ที่เป็น array มาเก็บใน session ชื่อ loginData
	   		$this->redirects(); /// เรียกใช้ ฟังชั่น redirects
			return TRUE;
 		}else{ //// ถ้าค่า $data เป็นเท็จ

				$data['error'] = '<font color="RED" style="font-size:12px">!!Password หรือ Username ผิด</font>'; //ให้ $data['error'] เท่ากับข้อความ  เมื่อ ไม่มี user และ pass อยู่ในฐานข้อมูล
				$this->load->view('home_login',$data); /// ส่งข้อมูลขึ้นไป หน้า home_login
		
			return false; /// พร้อมกับ return false; 
		}
		
 }
 
  function redirects()
 {
   if($this->session->userdata('loginData')) /// แรกดู ข้อมูลที่เก็บใน session ชื่อ loginData พร้อมกับ เช็คเงื่อนไขว่า มีจิงหรือ เท็จ
   {
     $session_data = $this->session->userdata('loginData');  /// แรกดู ข้อมูลที่เก็บใน session ชื่อ loginData
	     $satus = $session_data['emStatus'];  /// ให้ข้อมูลใน array session_data ชื่อ status เท่ากับ $satus
			 if($satus=="admin"){ //เช็คค่า $satus ว่าเป็น admin
				  header( 'Location: '.base_url().'index.php/home' );
			 }else if($satus=="user"){//เช็คค่า $satus ว่าเป็น user
				  header( 'Location: '.base_url().'index.php/home' ); /// ไปยัง contorller user
			 }
	}else{ /// เมื่อไม่มีข้อมูลใน $this->session->userdata('loginData')
			   header( 'Location: '.base_url().'index.php/home' );/// ไปยัง contorller home
	}
 }


}

?>

