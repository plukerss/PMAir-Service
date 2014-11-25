<?php 
class Brands extends CI_Controller {

   function __construct()
 	{
	   parent::__construct();
	   $this->load->Model('brand');
	   
 	}

function index()
	{  	 
		$this->load->view('addbrand');	

 	}
	function add()
	{
		
		$brandId = $this->input->post('brandId');
		$brandName = $this->input->post('brandName');
		
		var_dump($_POST);
		
		
		$this->Brand->setbrandId($brandId);
		$this->Brand->setbrandName($brandName);
		$id=$this->Brand->add();
		
		header('Location: '.base_url().'index.php/home');
		
	}
	function searchData(){
	$text = $this->input->post('textSearch');
	$this->Brand->setTextSearch($text);
	$data['result'] = $this->Brand->searchData();
	$this->load->view('showbrand',$data);
}

#############################################################
/*
function show()
	

*/
#############################################################
function showAllbrand(){
		$data['showAll'] = $this->Brand->showAllbrand();
		$this->load->view('showbrand',$data);
		return $data;
	}

function upDate($brandId){
		$data['update']= $this->Brand->updateem($brandId);
		$this->load->view('editbrand',$data);
		}
	function doUpdate()
	{
		$this->Brand->setbrandId($this->input->post('brandId'));
		$this->Brand->setbrandName($this->input->post('brandName'));			
		$this->Brand->upDatebrand();
		echo "OKOK";
	}
	function doDelete($brandId)
	{    
		$this->Brand->delete($brandId);
		echo "OK";
	}
	function getBrand($brandname)
	{
		$this->Brand->setBrandName($brandname);
		$data['showAll'] = $this->Brand->getairbybrand();
		$this->load->view('showairbybrand',$data);
		}
}
?>