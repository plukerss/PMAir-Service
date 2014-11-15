<?php 
class Customer extends CI_Model {

    function __construct(){
	   parent::__construct();
    }

######  Attribute  ###### 
    var $cusId ; ######  รหัสลูกค้า  ######
    var $cusName ; ######  ชื่อลูกค้า  ######
    var $cusLastname ; ######  นามสกุลลูกค้า  ######
    var $cusEmail ; ######  อีเมลลูกค้า  ######
    var $cusAddress ; ######  ที่อยู่ลูกค้า  ######
    var $cusTel ; ######  เบอร์โทรลูกค้า  ######
    var $cusLatitude ; ######  ละจิจูด  ######
    var $cusLongitude ; ######  ลองติจูด  ######
    var $cusUsername ; ######  Usernameลูกค้า  ######
    var $cusPassword ; ######  Passwordลูกค้า  ######
	var $textSearch;
###### End Attribute  ###### 

 ###### SET : $cusId ######
    function setCusId($cusId){
        $this->cusId = $cusId; 
     }
###### End SET : $cusId ###### 


###### GET : $cusId ######
    function getCusId(){
        return $this->cusId; 
     }
###### End GET : $cusId ###### 


 ###### SET : $cusName ######
    function setCusName($cusName){
        $this->cusName = $cusName; 
     }
###### End SET : $cusName ###### 


###### GET : $cusName ######
    function getCusName(){
        return $this->cusName; 
     }
###### End GET : $cusName ###### 


 ###### SET : $cusLastname ######
    function setCusLastname($cusLastname){
        $this->cusLastname = $cusLastname; 
     }
###### End SET : $cusLastname ###### 


###### GET : $cusLastname ######
    function getCusLastname(){
        return $this->cusLastname; 
     }
###### End GET : $cusLastname ###### 


 ###### SET : $cusEmail ######
    function setCusEmail($cusEmail){
        $this->cusEmail = $cusEmail; 
     }
###### End SET : $cusEmail ###### 


###### GET : $cusEmail ######
    function getCusEmail(){
        return $this->cusEmail; 
     }
###### End GET : $cusEmail ###### 


 ###### SET : $cusAddress ######
    function setCusAddress($cusAddress){
        $this->cusAddress = $cusAddress; 
     }
###### End SET : $cusAddress ###### 


###### GET : $cusAddress ######
    function getCusAddress(){
        return $this->cusAddress; 
     }
###### End GET : $cusAddress ###### 


 ###### SET : $cusTel ######
    function setCusTel($cusTel){
        $this->cusTel = $cusTel; 
     }
###### End SET : $cusTel ###### 


###### GET : $cusTel ######
    function getCusTel(){
        return $this->cusTel; 
     }
###### End GET : $cusTel ###### 


 ###### SET : $cusLatitude ######
    function setCusLatitude($cusLatitude){
        $this->cusLatitude = $cusLatitude; 
     }
###### End SET : $cusLatitude ###### 


###### GET : $cusLatitude ######
    function getCusLatitude(){
        return $this->cusLatitude; 
     }
###### End GET : $cusLatitude ###### 


 ###### SET : $cusLongitude ######
    function setCusLongitude($cusLongitude){
        $this->cusLongitude = $cusLongitude; 
     }
###### End SET : $cusLongitude ###### 


###### GET : $cusLongitude ######
    function getCusLongitude(){
        return $this->cusLongitude; 
     }
###### End GET : $cusLongitude ###### 


 ###### SET : $cusUsername ######
    function setCusUsername($cusUsername){
        $this->cusUsername = $cusUsername; 
     }
###### End SET : $cusUsername ###### 


###### GET : $cusUsername ######
    function getCusUsername(){
        return $this->cusUsername; 
     }
###### End GET : $cusUsername ###### 


 ###### SET : $cusPassword ######
    function setCusPassword($cusPassword){
        $this->cusPassword = $cusPassword; 
     }
###### End SET : $cusPassword ###### 


###### GET : $cusPassword ######
    function getCusPassword(){
        return $this->cusPassword; 
     }
###### End GET : $cusPassword ###### 
function add()
	{	
		$data=array(
		
		'cusId'=> $this->getcusId(),
		'cusName'=> $this->getcusName(),
		'cusLastname'=> $this->getcusLastname(),
		'cusEmail'=> $this->getcusEmail(),
		'cusAddress'=> $this->getcusAddress(),
		'cusTel'=> $this->getcusTel(),
		'cusLatitude'=> $this->getcusLatitude(),
		'cusLongitude'=> $this->getcusLongitude(),	
		'cusUsername'=> $this->getcusUsername(),
		'cusPassword'=> MD5($this->getcusPassword()),
		);
	$this->db->insert('customer',$data);
	echo $this->db->insert_id();
	}
	
function setTextSearch($textSearch){
        $this->$textSearch = $textSearch;
}
    function getTextSearch(){
        return $this->textSearch;
     }



function searchData(){
	$this->db->like('cusId ', $this->getTextSearch());
	$this->db->or_like('cusName ', $this->getTextSearch());
	return $this->db->get('customer')->result_array();

}

function findByAll()
	{
		$query = $this->db->get('customer')->result_array();
		return $query;
	}
	
	
function getPK()
	{
		$this->db->where('customer.cusId',$this->getcusId());
		$query = $this->db->get('customer')->result_array();
		return $query;

	}
	function findByKeyword($field, $value)
	{

		$this->db->like($field, $value);	
		
		$query = $this->db->get('customer')->result_array();

		return $query;
	}
	
	function updatecus($cusId)
	{
		$this->db->where('customer.cusId', $cusId);
		$query = $this->db->get('customer')->result_array();
		return $query;
	}
	function upDateCus2()
	{
		$data = array(
					   'cusId'			=> $this->getcusId(),
					   'cusName' 		=> $this->getcusName(),
					   'cusLastname' 	=> $this->getcusLastname(),
					   'cusEmail' 		=> $this->getcusEmail(),
					   'cusAddress' 	=> $this->getcusAddress(),
					   'cusLatitude' 	=> $this->getcusLatitude(),
					   'cusLongitude' 	=> $this->getcusLongitude(),
					   
					);
			$this->db->where('customer.cusId',$this->getCusId());
			$this->db->update('customer',$data);
	}
	function showAllData(){
		$query = $this->db->get('customer')->result_array();
		return $query;
	}
	
	function delete($cusId)
	{
	$this->db->from('customer');
	$this->db->where('customer.cusId',$cusId);
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