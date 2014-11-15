<?php 
class Brand extends CI_Model {

    function __construct(){
	   parent::__construct();
    }

######  Attribute  ###### 
    var $brandId ; ######  แบรน ไอดี  ######
    var $brandName ; ######  ชื่อยี่ห้อ  ######
###### End Attribute  ###### 

 ###### SET : $brandId ######
    function setBrandId($brandId){
        $this->brandId = $brandId; 
     }
###### End SET : $brandId ###### 


###### GET : $brandId ######
    function getBrandId(){
        return $this->brandId; 
     }
###### End GET : $brandId ###### 


 ###### SET : $brandName ######
    function setBrandName($brandName){
        $this->brandName = $brandName; 
     }
###### End SET : $brandName ###### 


###### GET : $brandName ######
    function getBrandName(){
        return $this->brandName; 
     }
###### End GET : $brandName ###### 

function add()
	{	
		$data=array(
		
		'brandId'=> $this->getbrandId(),
		'brandName'=> $this->getbrandName(),

		);
	$this->db->insert('brand',$data);
	echo $this->db->insert_id();
	}
	
	function showAllbrand(){
		$query = $this->db->get('brand')->result_array();
		return $query;
	}
	
	function delete($brandId)
	{
	$this->db->from('brand');
	$this->db->where('brand.brandId',$brandId);
	if	($this->db->delete())
		{
		echo "OK";
		}
	else
		{
		echo "FAIL";
		}
	}

}
?>