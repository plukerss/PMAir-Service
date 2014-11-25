<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Airconditions extends CI_Controller {
function __construct()
 	{
	   parent::__construct();
	   $this->load->helper(array('form', 'url'));
	   
 	}

function index()
	{  	 
		$this->load->view('aircondition');	

 	}
function add()
	{	
		$config['upload_path'] = './imguploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '9999';
		$config['max_width']  = '5000';
		$config['max_height']  = '5000';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());

			var_dump($error);
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());

			$airPic = $data['upload_data']['file_name'];	
			$airModel = $this->input->post('airModel');

			$airDetail = $this->input->post('airDetail');
			$airBrand = $this->input->post('airBrand');
			$airBtu = $this->input->post('airBtu');
			$airBrand = $this->input->post('airBrand');
			
			
			$this->Aircondition->setairBtu($airBtu);
			$this->Aircondition->setairBrand($airBrand);
			$this->Aircondition->setairDetail($airDetail);
			$this->Aircondition->setairPic($airPic);
			$this->Aircondition->setairModel($airModel);
			$this->Aircondition->setairBrand($airBrand);		
			$id=$this->Aircondition->add();
			
				header('Location: '.base_url().'index.php/home');
			
		}

	
		
	}
	function searchData(){
	$text = $this->input->post('textSearch');
	$this->Aircondition->setTextSearch($text);
	$data['result'] = $this->Aircondition->searchData();
	$this->load->view('showair',$data);
}

#############################################################
/*
function show()
	

*/
#############################################################
function showAllAirData(){
		$data['showAll'] = $this->Aircondition->showAllData();
		$this->load->view('showair',$data);
	}

function upDate($airId){
		$data['update']= $this->Aircondition->updateair($airId);
		$this->load->view('editair',$data);
		}
	function doUpdate()
	{
		$this->Aircondition->setairId($this->input->post('airId'));
		$this->Aircondition->setairModel($this->input->post('airModel'));
		$this->Aircondition->setairPic($this->input->post('airPic'));
		$this->Aircondition->setairDetail($this->input->post('airDetail'));
		$this->Aircondition->setairBrand($this->input->post('airBrand'));
		$this->Aircondition->setairBrand($this->input->post('airBtu'));
		$this->Aircondition->upDateair2();
		echo "OKOK";
	}
	function doDelete($airId)
	{    
		$this->Aircondition->delete($airId);
		echo "OK";
	}
	function calAir(){
		$this->load->view('calAir');
	}

}
?>