
<script type="text/javascript" src="<?php echo base_url()?>js/jquery-1.11.1.min.js"></script>
   	<script type="text/javascript">
 $("#empBirthDay").datepicker({dateFormat: 'dd-M-yy'});

	  </script>
 <!--#############################################################################################################-->
  <form action="<?php echo base_url()?>index.php/employees/doUpdate" method="post">
  <?php foreach($update as $row){?>
<table width="" border="0" cellspacing="0" cellpadding="0">

  <tr>
    <td height="" align="left">ชื่อ</td>
    <td><input class="checkInput" type="text" name="emName" id="emName" value="<?php echo $row['emName']?>"; />     </tr>
  <tr>
    <td height="">นามสกุล</td>
    <td><input class="checkInput" type="text" name="emLastname" id="emLastname" value="<?php echo $row['emLastname']?>" /></td>
  </tr>
  <tr>
    <td height="">อีเมล</td>
    <td><input class="checkInput" type="text" name="emEmail" id="emEmail" value="<?php echo $row['emEmail']?>" /></td>
  </tr>
  <tr>
    <td height="">ที่อยู่</td>
    <td><textarea class="checkInput" name="emAddress" id="emAddress" cols="45" rows="5" value="<?php echo $row['emAddress']?>"> </textarea></td>
  </tr>
  <tr>
    <td height="">เบอร์โทร</td>
    <td><input class="checkInput" type="text" name="emTel" id="emTel" value="<?php echo $row['emTel']?>" /></td>
  </tr>
  <tr>
   <td height="">สถานะ</td>
    <td><input class="checkInput" type="text" name="emStatus" id="emStatus" value="<?php echo $row['emStatus']?>" /></td>
  </tr>
  
  <tr>
    <td height=""></td>
    <td><input class="checkInput" type="hidden" name="emId" id="emId" value="<?php echo $row['emId']?>" />
    <input type="submit" name="Add" id="Add" value="save"  /></td>
  </tr>
</table><?php } ?>
</form>

