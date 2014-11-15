<?php 
class Employees extends CI_Controller {

   function __construct()
 	{
	   parent::__construct();
	   $this->load->Model('employee');
	   
 	}

function index()
	{  	 
		$this->load->view('addem');	

 	}
	function add()
	{
		
		$emId = $this->input->post('emId');
		$emName = $this->input->post('emName');
		$emLastname = $this->input->post('emLastname');
		$emEmail = $this->input->post('emEmail');
		$emAddress = $this->input->post('emAddress');
		$emTel = $this->input->post('emTel');
		$emStatus = $this->input->post('emStatus');
		$emUsername = $this->input->post('emUsername');
		$emPassword = $this->input->post('emPassword');
		
		var_dump($_POST);
		
		
		$this->Employee->setemId($emId);
		$this->Employee->setemName($emName);
		$this->Employee->setemLastname($emLastname);
		$this->Employee->setemEmail($emEmail);
		$this->Employee->setemAddress($emAddress);
		$this->Employee->setemTel($emTel);
		$this->Employee->setemStatus($emStatus);
		$this->Employee->setemUsername($emUsername);
		$this->Employee->setemPassword($emPassword);
		$id=$this->Employee->add();
		
		header('Location: '.base_url().'index.php/home');
		
	}
	function searchData(){
	$text = $this->input->post('textSearch');
	$this->Employee->setTextSearch($text);
	$data['result'] = $this->Employee->searchData();
	$this->load->view('showem',$data);
}

#############################################################
/*
function show()
	

*/
#############################################################
function showAllEmData(){
		$data['showAll'] = $this->Employee->showAllData();
		$this->load->view('showem',$data);
		return $data;
	}

function upDate($emId){
		$data['update']= $this->Employee->updateem($emId);
		$this->load->view('editem',$data);
		}
	function doUpdate()
	{
		$this->Employee->setemId($this->input->post('emId'));
		$this->Employee->setemName($this->input->post('emName'));
		$this->Employee->setemLastname($this->input->post('emLastname'));
		$this->Employee->setemEmail($this->input->post('emEmail'));
		$this->Employee->setemAddress($this->input->post('emAddress'));
		$this->Employee->setemTel($this->input->post('emTel'));
		$this->Employee->setemStatus($this->input->post('emStatus'));				
		$this->Employee->upDateem2();
		echo "OKOK";
	}
	function doDelete($emId)
	{    
		$this->Employee->delete($emId);
		echo "OK";
	}
}
?>