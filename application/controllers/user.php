<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User extends CI_Controller {
function __construct()
 {
	   parent::__construct();
	   $this->checkStatus();
 }

function index(){  	  //// ฟังชั่นในการเรียกใช้งานครั้งแรก 
		$loginData['loginData'] = $this->session->userdata('loginData'); /// แรกข้อมูลที่เก็บใน session ชื่อ loginData
 		$this->load->view('home_user',$loginData); //// ส่งข้อมูล loginData ที่อยู่ใน session พร้อมกับ loadview ชื่อ home_user

 }
 
 function checkStatus(){ 
	 $session_data = $this->session->userdata('loginData'); /// แรกข้อมูลที่เก็บใน session ชื่อ loginData
	 $emStatus = $session_data['emStatus'];/// ให้ข้อมูลใน array session_data ชื่อ status เท่ากับ $satus
	 if($emStatus!="user"){//เช็คค่า $satus ว่าเป็น user หรือไม่ ถ้าไม่ให้ทำตาม Process
		   echo '<script> alert("!!!คุณไม่มีสิทธิในการใช้งานส่วนนี้");
		   	 window.location.assign("'.base_url().'index.php/CheckLogin/redirects"); 
			 </script>';/// ไปยัง contorller CheckLogin ฟังชั่น redirects โดยใช้ Javascript
	 }
  }
}

?>