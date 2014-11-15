<?php 
class Notify extends CI_Model {

    function __construct(){
	   parent::__construct();
    }

######  Attribute  ###### 
    var $notifyId ; ######  รหัสแจ้งเตือน  ######
    var $emId ; ######  รหัสพนักงาน  ######
    var $notifyDetail ; ######  รายละเอียดแจ้งเตือน  ######
    var $dateNotify ; ######  วันที่แจ้ง  ######
    var $dateRepair ; ######  วันที่ซ่อม  ######
    var $timeRepair ; ######  เวลาซ่อม(เช้า/บ่าย)  ######
    var $notifyStatus ; ######  สถานะการซ่อม  ######
###### End Attribute  ###### 

 ###### SET : $notifyId ######
    function setNotifyId($notifyId){
        $this->notifyId = $notifyId; 
     }
###### End SET : $notifyId ###### 


###### GET : $notifyId ######
    function getNotifyId(){
        return $this->notifyId; 
     }
###### End GET : $notifyId ###### 


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


 ###### SET : $notifyDetail ######
    function setnotifyDetail($notifyDetail){
        $this->notifyDetail = $notifyDetail; 
     }
###### End SET : $notifyDetail ###### 


###### GET : $notifyDetail ######
    function getnotifyDetail(){
        return $this->notifyDetail; 
     }
###### End GET : $notifyDetail ###### 


 ###### SET : $dateNotify ######
    function setDateNotify($dateNotify){
        $this->dateNotify = $dateNotify; 
     }
###### End SET : $dateNotify ###### 


###### GET : $dateNotify ######
    function getDateNotify(){
        return $this->dateNotify; 
     }
###### End GET : $dateNotify ###### 


 ###### SET : $dateRepair ######
    function setDateRepair($dateRepair){
        $this->dateRepair = $dateRepair; 
     }
###### End SET : $dateRepair ###### 


###### GET : $dateRepair ######
    function getDateRepair(){
        return $this->dateRepair; 
     }
###### End GET : $dateRepair ###### 


 ###### SET : $timeRepair ######
    function setTimeRepair($timeRepair){
        $this->timeRepair = $timeRepair; 
     }
###### End SET : $timeRepair ###### 


###### GET : $timeRepair ######
    function getTimeRepair(){
        return $this->timeRepair; 
     }
###### End GET : $timeRepair ###### 


 ###### SET : $notifyStatus ######
    function setNotifyStatus($notifyStatus){
        $this->notifyStatus = $notifyStatus; 
     }
###### End SET : $notifyStatus ###### 


###### GET : $notifyStatus ######
    function getNotifyStatus(){
        return $this->notifyStatus; 
     }
###### End GET : $notifyStatus ###### 
function add()
	{	
		$data=array(
		'notifyId'=> $this->getnotifyId(),
		'emId'=> $this->getemId(),
		'notifyDetail'=> $this->getnotifyDetail(),
		'dateNotify'=> $this->getdateNotify(),
		'dateRepair'=> $this->getdateRepair(),
		'notifyStatus'=> $this->getnotifyStatus(),
		);
	$this->db->insert('aircondition',$data);
	echo $this->db->insert_id();
	}
}
?>