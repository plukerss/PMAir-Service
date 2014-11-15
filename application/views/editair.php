
<script type="text/javascript" src="<?php echo base_url()?>js/jquery-1.11.1.min.js"></script>
   	<script type="text/javascript">
 $("#empBirthDay").datepicker({dateFormat: 'dd-M-yy'});

	  </script>
 <!--#############################################################################################################-->
  <form action="<?php echo base_url()?>index.php/airconditions/doUpdate" method="post">
  <?php foreach($update as $row){?>
<table width="" border="0" cellspacing="0" cellpadding="0">

  <tr>
    <td height="" align="left">AirModel</td>
    <td><input class="checkInput" type="text" name="airModel" id="airModel" value="<?php echo $row['airModel']?>"; />     </tr>
  <tr>
    <td height="">AirPicture</td>
    <td><input class="checkInput" type="text" name="airPic" id="airPic" value="<?php echo $row['airPic']?>" /></td>
  </tr>
  <tr>
    <td height="">AirDetal</td>
    <td><textarea class="checkInput" name="airDetail" id="airDetail" cols="45" rows="5" value="<?php echo $row['airDetail']?>"> </textarea></td>
  </tr>
  <tr>
    <td height="">AirBrand</td>
    <td><input class="checkInput" type="text" name="airBrand" id="airBrand" value="<?php echo $row['airBrand']?>" /></td>
  </tr>
  <tr>
    <td height=""></td>
    <td><input class="checkInput" type="hidden" name="airId" id="airId" value="<?php echo $row['airId']?>" />
    <input type="submit" name="Add" id="Add" value="save"  /></td>
  </tr>
</table><?php } ?>
</form>

