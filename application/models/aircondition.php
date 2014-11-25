<?php 
class Aircondition extends CI_Model {

    function __construct(){
	   parent::__construct();
    }

######  Attribute  ###### 
    var $airId ; ######  รหัสแอร์  ######
    var $airModel ; ######  ชื่อรุ่น  ######
    var $airPic ; ######  รูปภาพ  ######
    var $airDetail ; ######  รายละเอียด  ######
    var $airBrand ; ######  ยี่ห้อ  ######
###### End Attribute  ###### 

 ###### SET : $airId ######
    function setAirId($airId){
        $this->airId = $airId; 
     }
###### End SET : $airId ###### 


###### GET : $airId ######
    function getAirId(){
        return $this->airId; 
     }
###### End GET : $airId ###### 


 ###### SET : $airModel ######
    function setAirModel($airModel){
        $this->airModel = $airModel; 
     }
###### End SET : $airModel ###### 


###### GET : $airModel ######
    function getAirModel(){
        return $this->airModel; 
     }
###### End GET : $airModel ###### 


 ###### SET : $airPic ######
    function setAirPic($airPic){
        $this->airPic = $airPic; 
     }
###### End SET : $airPic ###### 


###### GET : $airPic ######
    function getAirPic(){
        return $this->airPic; 
     }
###### End GET : $airPic ###### 


 ###### SET : $airDetail ######
    function setAirDetail($airDetail){
        $this->airDetail = $airDetail; 
     }
###### End SET : $airDetail ###### 


###### GET : $airDetail ######
    function getAirDetail(){
        return $this->airDetail; 
     }
###### End GET : $airDetail ###### 


 ###### SET : $airBrand ######
    function setAirBrand($airBrand){
        $this->airBrand = $airBrand; 
     }
###### End SET : $airBrand ###### 


###### GET : $airBrand ######
    function getAirBrand(){
        return $this->airBrand; 
     }
###### End GET : $airBrand ###### 

###### SET : $airBtu ######
    function setAirBtu($airBtu){
        $this->airBtu = $airBtu; 
     }
###### End SET : $airBtu ###### 


###### GET : $airBtu ######
    function getAirBtu(){
        return $this->airBtu; 
     }
###### End GET : $airBtu ######

function add()
	{	
		$data=array
		(
		'airId'=> $this->getairId(),
		'airModel'=> $this->getairModel(),
		'airPic'=> $this->getairPic(),
		'airDetail'=> $this->getairDetail(),
		'brandId'=> $this->getairBrand(),
		'airBtu'=> $this->getairBtu(),
		);
		
		$this->db->insert('aircondition',$data);
	    return $this->db->insert_id();
	}
	function setTextSearch($textSearch){
        $this->$textSearch = $textSearch;
}
    function getTextSearch(){
        return $this->textSearch;
     }



function searchData(){
	$this->db->like('airId ', $this->getTextSearch());
	$this->db->or_like('airModel ', $this->getTextSearch());
	return $this->db->get('aircondition')->result_array();

}

function findByAll()
	{
		$this->db->join('brand','brand.brandId = aircondition.brandId');
		$query = $this->db->get('aircondition')->result_array();
		return $query;
	}
	function getAllbrand()
	{
		$query = $this->db->get('brand')->result_array();
		return $query;
	}
	
	
function getPK()
	{
		$this->db->join('brand','brand.brandId = aircondition.brandId');
		$this->db->where('aircondition.airId',$this->getairId());
		$query = $this->db->get('aircondition')->result_array();
		return $query;

	}
	function findByKeyword($field, $value)
	{
		$this->db->join('brand','brand.brandId = aircondition.brandId');
		$this->db->like($field, $value);
		$query = $this->db->get('aircondition')->result_array();

		return $query;
	}
	
	function updateair($airId)
	{	$this->db->join('brand','brand.brandId = aircondition.brandId');
		$this->db->where('aircondition.airId', $airId);
		$query = $this->db->get('aircondition')->result_array();
		return $query;
	}
	function upDateair2()
	{
		$data = array(
					   'airId'			=> $this->getairId(),
					   'airModel' 		=> $this->getairModel(),
					   'airPic' 		=> $this->getairPic(),
					   'airDetail' 		=> $this->getairDetail(),
					   'brandId' 		=> $this->getairBrand(),
					   'airBtu' 		=> $this->getairBtu(),
					  
					   
					);
			$this->db->where('aircondition.airId',$this->getairId());
			$this->db->update('aircondition',$data);
	}
	function showAllData(){
		$this->db->join('brand','brand.brandId = aircondition.brandId');
		$query = $this->db->get('aircondition')->result_array();
		return $query;
	}
	
	function delete($airId)
	{
	$this->db->from('aircondition');
	$this->db->where('aircondition.airId',$airId);
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