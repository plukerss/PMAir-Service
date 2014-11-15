
<script type="text/javascript" src="<?php echo base_url()?>js/jquery-1.11.1.min.js"></script>
   	<script type="text/javascript">
 $("#empBirthDay").datepicker({dateFormat: 'dd-M-yy'});

	  </script>
 <!--#############################################################################################################-->
  <form action="<?php echo base_url()?>index.php/customers/doUpdate" method="post">
  <?php foreach($update as $row){?>
<table width="" border="0" cellspacing="0" cellpadding="0">

  <tr>
    <td height="" align="left">ชื่อ</td>
    <td><input class="checkInput" type="text" name="cusName" id="cusName" value="<?php echo $row['cusName']?>"; />     </tr>
  <tr>
    <td height="">นามสกุล</td>
    <td><input class="checkInput" type="text" name="cusLastname" id="cusLastname" value="<?php echo $row['cusLastname']?>" /></td>
  </tr>
  <tr>
    <td height="">อีเมล</td>
    <td><input class="checkInput" type="text" name="cusEmail" id="cusEmail" value="<?php echo $row['cusEmail']?>" /></td>
  </tr>
  <tr>
    <td height="">ที่อยู่</td>
    <td><textarea class="checkInput" name="cusAddress" id="cusAddress" cols="45" rows="5" value="<?php echo $row['cusAddress']?>"> </textarea></td>
  </tr>
  <tr>
    <td height="">เบอร์โทร</td>
    <td><input class="checkInput" type="text" name="cusTel" id="cusTel" value="<?php echo $row['cusTel']?>" /></td>
  </tr>
  <tr>
   <td height="">ลองติจูด</td>
    <td><input class="checkInput" type="text" name="cusLatitude" id="cusLatitude" value="<?php echo $row['cusLatitude']?>" /></td>
  </tr>
  
  <td height="">ละจิจูด</td>
    <td><input class="checkInput" type="text" name="cusLongitude" id="cusLongitude" value="<?php echo $row['cusLongitude']?>" /></td>
  </tr>
  
  <tr>
    <td height=""></td>
    <td><input class="checkInput" type="hidden" name="cusId" id="cusId" value="<?php echo $row['cusId']?>" />
    <input type="submit" name="Add" id="Add" value="save"  /></td>
  </tr>
</table><?php } ?>
</form>

