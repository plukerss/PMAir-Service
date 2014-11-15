<?php 
class Queue extends CI_Model {

    function __construct(){
	   parent::__construct();
    }

######  Attribute  ###### 
    var $queueId ; ######  รหัสคิว  ######
    var $emId ; ######  รหัสพนักงาน  ######
    var $notifyId ; ######  รหัสแจ้งเตือน  ######
    var $queueStatus ; ######  สถานะการซ่อม  ######
###### End Attribute  ###### 

 ###### SET : $queueId ######
    function setQueueId($queueId){
        $this->queueId = $queueId; 
     }
###### End SET : $queueId ###### 


###### GET : $queueId ######
    function getQueueId(){
        return $this->queueId; 
     }
###### End GET : $queueId ###### 


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


 ###### SET : $notifyId ######
    function setnotifyId($notifyId){
        $this->notifyId = $notifyId; 
     }
###### End SET : $notifyId ###### 


###### GET : $notifyId ######
    function getnotifyId(){
        return $this->notifyId; 
     }
###### End GET : $notifyId ###### 


 ###### SET : $queueStatus ######
    function setQueueStatus($queueStatus){
        $this->queueStatus = $queueStatus; 
     }
###### End SET : $queueStatus ###### 


###### GET : $queueStatus ######
    function getQueueStatus(){
        return $this->queueStatus; 
     }
###### End GET : $queueStatus ###### 
function add()
	{	
		$data=array(
		'queueId'=> $this->getqueueId(),
		'emId'=> $this->getemId(),
		'notifyId'=> $this->getnotifyId(),
		'queueStatus'=> $this->getqueueStatus(),
		);
	$this->db->insert('queue',$data);
	echo $this->db->insert_id();
	}
}
?>