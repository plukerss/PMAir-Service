<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Customers extends CI_Controller {
function __construct()
 	{
	   parent::__construct();
	   $this->load->Model('customer');
	   
 	}

function index()
	{  	 
		$this->load->view('customer');	

 	}
	function add()
	{
		
		$cusId = $this->input->post('cusId');
		$cusName = $this->input->post('cusName');
		$cusLastname = $this->input->post('cusLastname');
		$cusEmail = $this->input->post('cusEmail');
		$cusAddress = $this->input->post('cusAddress');
		$cusTel = $this->input->post('cusTel');
		$cusLatitude = $this->input->post('cusLatitude');
		$cusLongitude = $this->input->post('cusLongitude');
		$cusUsername = $this->input->post('cusUsername');
		$cusPassword = $this->input->post('cusPassword');
		
		var_dump($_POST);
		
		
		$this->Customer->setcusId($cusId);
		$this->Customer->setcusName($cusName);
		$this->Customer->setcusLastname($cusLastname);
		$this->Customer->setcusEmail($cusEmail);
		$this->Customer->setcusAddress($cusAddress);
		$this->Customer->setcusTel($cusTel);
		$this->Customer->setcusLatitude($cusLatitude);
		$this->Customer->setcusLongitude($cusLongitude);
		$this->Customer->setcusUsername($cusUsername);
		$this->Customer->setcusPassword($cusPassword);
		$id=$this->Customer->add();
		
			header('Location: '.base_url().'index.php/home');
		
	}
	
	function searchData(){
	$text = $this->input->post('textSearch');
	$this->Customer->setTextSearch($text);
	$data['result'] = $this->Customer->searchData();
	$this->load->view('showcustom',$data);
}

#############################################################
/*
function show()
	

*/
#############################################################
function showAllCusData(){
		$data['showAll'] = $this->Customer->showAllData();
		$this->load->view('showcustom',$data);
	}

function upDate($cusId){
		$data['update']= $this->Customer->updatecus($cusId);
		$this->load->view('editcustom',$data);
		}
	function doUpdate()
	{
		$this->Customer->setcusId($this->input->post('cusId'));
		$this->Customer->setcusName($this->input->post('cusName'));
		$this->Customer->setcusLastname($this->input->post('cusLastname'));
		$this->Customer->setcusEmail($this->input->post('cusEmail'));
		$this->Customer->setcusAddress($this->input->post('cusAddress'));
		$this->Customer->setcusLatitude($this->input->post('cusLatitude'));
		$this->Customer->setcusLongitude($this->input->post('cusLongitude'));
		
							
		$this->Customer->upDatecus2();
		echo "OKOK";
	}
	function doDelete($cusId)
	{    
		$this->Customer->delete($cusId);
		echo "OK";
	}

}
?>