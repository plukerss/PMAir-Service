<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to Impoer Exc</title>     
	<script type="text/javascript" src="<?php echo base_url();?>js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>js/fancy/source/jquery.fancybox.js?v=2.1.5"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>js/fancy/source/jquery.fancybox.css?v=2.1.5" media="screen" />
    <link rel="stylesheet" href="<?php echo base_url();?>css/ajxmenu.css" type="text/css">    
<link type="text/css" href="<?php echo base_url();?>css/menucss.css" rel="stylesheet"/>   
<script type="text/javascript">
		$(document).ready(function(){
			 $(".submenu").click(function(event) {
				    event.preventDefault();
                var href = $(this).attr('href');
                $('.load').fadeOut("fast").hide().load( href ).fadeIn('fast');
            });
			
		 });	

	    </script>
    <style type="text/css">
	.logo{
	
		display:inline;
		z-index:1000;
		height:100px;
		
	}
.header {
	font-family: Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
	line-height: none;
	text-decoration: underline overline;
	background-attachment: fixed;
	background: #ff6600; /* Old browsers */
background: -moz-linear-gradient(left,  #ff6600 33%, #c72200 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, right top, color-stop(33%,#ff6600), color-stop(100%,#c72200)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(left,  #ff6600 33%,#c72200 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(left,  #ff6600 33%,#c72200 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(left,  #ff6600 33%,#c72200 100%); /* IE10+ */
background: linear-gradient(to right,  #ff6600 33%,#c72200 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ff6600', endColorstr='#c72200',GradientType=1 ); /* IE6-9 */

	background-repeat: no-repeat;
	text-align: center;
	white-space: pre;
	display: inline-block;
	list-style-position: inside;
	list-style-type: none;
	overflow: visible;
	flex-wrap: no-wrap;
	visibility: visible;
	z-index: 100;
	height: 100px;
	width: 100%;
	font-size: 36px;
}
.load{
	width:60%;
	margin-left:20%;
	margin-top:50px;
	background-color:#D7D7D7;
	border-radius:5px;
	box-shadow:0px 0px 1px 1px #525252;
	min-height:400px;
	position:static;
	
	
}
.loginer{
	position:fixed;
	height:40px;
	width:200px;
	background-color:#FFF;
	margin-left:85%;
}
    </style>




</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<header class="header"><input class="logo" type="image" src="../../img/qqqq.png"></header>

<div class="menu">
  <!-- AJXFILE:ajxmenu.css -->
  
  <ul>
    <li><a href="<?php echo base_url();?>index.php/home/Home" class="submenu" title="home">Home</a></li>
    <li><a href="<?php echo base_url();?>index.php/home/Register" class="submenu">Register</a></li>
  <?php
if($emUsername==""){?>  <li><a href="<?php echo base_url();?>index.php/home/Login" class="submenu">Login</a></li><?php }?>
    <li><a href="<?php echo base_url();?>index.php/home/Notify" class="submenu">แจ้งซ่อม</a></li>
   
  </ul>
</div>
</body><div class="loginer"><?php
if($emUsername!=""){
 echo 'สวัสดีคุณ : '.$emUsername;?><br><?php echo 'สถานะ : '.$emStatus;?><br><a href="<?php echo base_url();

 ?>index.php/home/logout">logout</a><?php } ?></div>
 <div class="wrapper">
  <nav class="vertical">
    <ul>
      <li>
        <label for="home">Product</label>
        <input type="radio" name="verticalMenu" id="home" />
        <div>
          <ul>
          <?php foreach($Brand as $b){ ?>
           <li>
           <a href="<?php echo base_url();?>index.php/brands/getBrand/<?php echo $b['brandName'];?>" class="submenu" title="home"><?php echo $b['brandName'];?></a>
           </li>   
            <?php }?>
          </ul>
          
        </div>
      </li>
      <li>
        <label for="blog">บริการ</label>
        <input type="radio" name="verticalMenu" id="blog" />
        <div>
          <ul>
            <li><a href="<?php echo base_url();?>index.php/airconditions/calAir" class="submenu">คำนวนขนาดห้อง</a></li>
            <li><a href="#">คำนวนค่าไฟ</a></li>
          </ul>
        </div>
      </li>
      <li>
        <label for="work">จัดการข้อมูล</label>
        <input type="radio" name="verticalMenu" id="work" />
        <div>
          <ul>
            <li><a href="<?php echo base_url();?>index.php/home/addem" class="submenu">เพิ่มพนักงาน</a></li>
            <li><a href="<?php echo base_url();?>index.php/home/addair" class="submenu">เพิ่มเครื่องปรับอากาศ</a></li>
             <li><a href="<?php echo base_url();?>index.php/home/addbrand" class="submenu">เพิ่มBrand</a></li>
             <li><a class="submenu" href="<?php echo base_url();?>index.php/customers/showAllCusData" >จัดการข้อมูลลูกค้า</a></li>
            <li><a class="submenu" href="<?php echo base_url();?>index.php/employees/showAllEmData" >จัดการข้อมูลพนักงาน</a></li>
           <li><a class="submenu" href="<?php echo base_url();?>index.php/airconditions/showAllAirData" >จัดการข้อมูลแอร์</a></li>
           <li><a class="submenu" href="<?php echo base_url();?>index.php/brands/showAllbrand" >จัดการBrand</a></li>
          </ul>
        </div>
      </li>
    </ul>
  </nav>
</div>
<div class="load">
</div>

</body>
</html>
