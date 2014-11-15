<?php 
class Employee extends CI_Model {

    function __construct(){
	   parent::__construct();
    }

######  Attribute  ###### 
    var $emId ; ######  รหัสพนักงาน  ######
    var $emName ; ######  ชื่อพนักงาน  ######
    var $emLastname ; ######  นามสกุลพนักงาน  ######
    var $emEmail ; ######  อีเมลพนักงาน  ######
    var $emAddress ; ######  ที่อยู่พนักงาน  ######
    var $emTel ; ######  เบอร์โทรพนักงาน  ######
    var $emStatus ; ######  สถานะบัญชี  ######
    var $emUsername ; ######  Username พนักงาน  ######
    var $emPassword ; ######  Password พนักงาน  ######
###### End Attribute  ###### 

 ###### SET : $emId ######
    function setEmId($emId){
        $this->emId = $emId; 
     }
###### End SET : $emId ###### 


###### GET : $emId ######
    function getEmId(){
        return $this->emId; 
     }
###### End GET : $emId ###### 


 ###### SET : $emName ######
    function setEmName($emName){
        $this->emName = $emName; 
     }
###### End SET : $emName ###### 


###### GET : $emName ######
    function getEmName(){
        return $this->emName; 
     }
###### End GET : $emName ###### 


 ###### SET : $emLastname ######
    function setEmLastname($emLastname){
        $this->emLastname = $emLastname; 
     }
###### End SET : $emLastname ###### 


###### GET : $emLastname ######
    function getEmLastname(){
        return $this->emLastname; 
     }
###### End GET : $emLastname ###### 


 ###### SET : $emEmail ######
    function setEmEmail($emEmail){
        $this->emEmail = $emEmail; 
     }
###### End SET : $emEmail ###### 


###### GET : $emEmail ######
    function getEmEmail(){
        return $this->emEmail; 
     }
###### End GET : $emEmail ###### 


 ###### SET : $emAddress ######
    function setEmAddress($emAddress){
        $this->emAddress = $emAddress; 
     }
###### End SET : $emAddress ###### 


###### GET : $emAddress ######
    function getEmAddress(){
        return $this->emAddress; 
     }
###### End GET : $emAddress ###### 


 ###### SET : $emTel ######
    function setEmTel($emTel){
        $this->emTel = $emTel; 
     }
###### End SET : $emTel ###### 


###### GET : $emTel ######
    function getEmTel(){
        return $this->emTel; 
     }
###### End GET : $emTel ###### 


 ###### SET : $emStatus ######
    function setEmStatus($emStatus){
        $this->emStatus = $emStatus; 
     }
###### End SET : $emStatus ###### 


###### GET : $emStatus ######
    function getEmStatus(){
        return $this->emStatus; 
     }
###### End GET : $emStatus ###### 


 ###### SET : $emUsername ######
    function setEmUsername($emUsername){
        $this->emUsername = $emUsername; 
     }
###### End SET : $emUsername ###### 


###### GET : $emUsername ######
    function getEmUsername(){
        return $this->emUsername; 
     }
###### End GET : $emUsername ###### 


 ###### SET : $emPassword ######
    function setEmPassword($emPassword){
        $this->emPassword = $emPassword; 
     }
###### End SET : $emPassword ###### 


###### GET : $emPassword ######
    function getEmPassword(){
        return $this->emPassword; 
     }
###### End GET : $emPassword ###### 
function add()
	{	
		$data=array(
		
		'emId'=> $this->getemId(),
		'emName'=> $this->getemName(),
		'emLastname'=> $this->getemLastname(),
		'emEmail'=> $this->getemEmail(),
		'emAddress'=> $this->getemAddress(),
		'emTel'=> $this->getemTel(),
		'emStatus'=> $this->getemStatus(),		
		'emUsername'=> $this->getemUsername(),
		'emPassword'=> MD5($this->getemPassword()),
		);
	$this->db->insert('employee',$data);
	echo $this->db->insert_id();
	}
	######################## function login #############################
function login()
 {
   $this -> db -> select('*');  						###########
   $this -> db -> from('employee'); 						 ########### เช็คข้อมูลใน DB 
   $this -> db -> where('emUsername', $this->getemUsername()); ###########
   $this -> db -> where('emPassword', md5($this->getemPassword())); ###########
   $this -> db -> limit(1); ############## ตำกัดให้คืนค่าแค่ record เดียว

   $query = $this -> db -> get(); ##############  สั่งดึงข้อมูลตามเงื่อนไข

   if($query -> num_rows() == 1)  ############  เมื่อมีข้อมูล 1 record 
   {
     return $query->result(); ############# ส่งค้าที่ดึงได้กลับ
   }
   else ########### เมื่อไม่ตรงตามเงื่อนไข
   {
		  return FALSE;  ############# ส่งค้า FALSE กลับ

   }
 }
 ######################## end function login #############################
 function setTextSearch($textSearch){
        $this->textSearch = $textSearch;
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
	
	function updateem($emId)
	{
		$this->db->where('employee.emId', $emId);
		$query = $this->db->get('employee')->result_array();
		return $query;
	}
	function upDateem2()
	{
		$data = array(
					   'emId'			=> $this->getemId(),
					   'emName' 		=> $this->getemName(),
					   'emLastname' 	=> $this->getemLastname(),
					   'emEmail' 		=> $this->getemEmail(),
					   'emAddress' 		=> $this->getemAddress(),
					   'emTel' 			=> $this->getemTel(),
					   'emStatus' 		=> $this->getemStatus(),
					   
					   
					);
			$this->db->where('employee.emId',$this->getemId());
			$this->db->update('employee',$data);
	}
	function showAllData(){
		$query = $this->db->get('employee')->result_array();
		return $query;
	}
	
	function delete($emId)
	{
	$this->db->from('employee');
	$this->db->where('employee.emId',$emId);
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