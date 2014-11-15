<?php 
class Test extends CI_Model {

    function __construct(){
	   parent::__construct();
    }

######  Attribute  ###### 
    var $CustomerID ; ######  CustomerID  ######
    var $Name ; ######  Name  ######
    var $Email ; ######  Email  ######
    var $CountryCode ; ######  CountryCode  ######
    var $Budget ; ######  Budget  ######
    var $Used ; ######  Used  ######
###### End Attribute  ###### 

 ###### SET : $CustomerID ######
    function setCustomerID($CustomerID){
        $this->CustomerID = $CustomerID; 
     }
###### End SET : $CustomerID ###### 


###### GET : $CustomerID ######
    function getCustomerID(){
        return $this->CustomerID; 
     }
###### End GET : $CustomerID ###### 


 ###### SET : $Name ######
    function setName($Name){
        $this->Name = $Name; 
     }
###### End SET : $Name ###### 


###### GET : $Name ######
    function getName(){
        return $this->Name; 
     }
###### End GET : $Name ###### 


 ###### SET : $Email ######
    function setEmail($Email){
        $this->Email = $Email; 
     }
###### End SET : $Email ###### 


###### GET : $Email ######
    function getEmail(){
        return $this->Email; 
     }
###### End GET : $Email ###### 


 ###### SET : $CountryCode ######
    function setCountryCode($CountryCode){
        $this->CountryCode = $CountryCode; 
     }
###### End SET : $CountryCode ###### 


###### GET : $CountryCode ######
    function getCountryCode(){
        return $this->CountryCode; 
     }
###### End GET : $CountryCode ###### 


 ###### SET : $Budget ######
    function setBudget($Budget){
        $this->Budget = $Budget; 
     }
###### End SET : $Budget ###### 


###### GET : $Budget ######
    function getBudget(){
        return $this->Budget; 
     }
###### End GET : $Budget ###### 


 ###### SET : $Used ######
    function setUsed($Used){
        $this->Used = $Used; 
     }
###### End SET : $Used ###### 


###### GET : $Used ######
    function getUsed(){
        return $this->Used; 
     }
###### End GET : $Used ###### 

function addAddress(){
	$data = array(
		'CustomerID' => $this->getCustomerID(),
		'Name' => $this->getName(),
		'Email' => $this->getEmail(),
		'CountryCode' => $this->getCountryCode(),
		'Budget' => $this->getBudget(),
		'Used' => $this->getBudget()
	);

	$this->db->insert('customer2',$data);
	
}

}
?>

