<?php
class Home extends CI_Controller {
    public function __construct() { 
        parent::__construct(); 
    } 
	function index()
	{
		$data = $this->session->userdata('loginData');
		if($data){
			$this->load->view('home',$data);
		}else{
			$data['emUsername']="";
			$data['emStatus']="";
			$this->load->view('home',$data);
		}
		
		
	}
	function logout(){
		 $this->session->unset_userdata('loginData');
		 $this->index();
	}
	function Home(){
		echo 'sssss';
	}
	
	function Notify(){
		echo 'แจ้งซ่อม';
	}
	
	function Showcustom(){
		$this->load->view('showcustom');
	}
	
	function Addem(){
		$this->load->view('addem');
	}
	function Register(){
		$this->load->view('register');
		
	}
	function addbrand(){
		$this->load->view('addbrand');
		
	}
	function Addair(){
		$data['brand']=$this->Aircondition->getAllbrand();
		
		$this->load->view('aircondition',$data);
	}
	
	function Login(){
		$this->load->view('home_login');
	}
	
	function Mitsu(){
		echo "Mitsu";
	}
	
	function Samsung(){
		echo "Samsung";
	}
	
	function LG(){
		echo "LG";
	}
	
	function Hitachi(){
		echo "Hitachi";
		
		
	}function Saijodenki(){
		echo "Saijodenki";
	}
	
	
	function Dikin(){
		echo "Dikin";
	}
	

	
}
?>

