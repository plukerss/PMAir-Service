<center>
  <h1>เพิ่มแอร์</h1></center>
  
<form action="<?php echo base_url(); ?>index.php/airconditions/add" method="post" enctype="multipart/form-data">
<center>
<table width="341" border="0">
  <tbody>
    <tr>
      <td width="42"><em><strong>โมเดล</strong></em></td>
      <td width="287"><input type="text" name="airModel" id="airModel"></td>
    </tr>
      <tr>
      <td><em><strong>BTU</strong></em></td>
      <td><input type="text" name="airBtu" id="airBtu"></td>
    </tr>
      </tr>
      <tr>
      <td><em><strong>Brand</strong></em></td>
      <td><select name="airBrand" id="airBrand">
      <?php
	  foreach($brand as $b){
	  ?>
      <option value="<?php echo $b['brandId'];?>"><?php echo $b['brandName'];?></option>
       <?php
	  }
	  ?>
   </select></td>
    </tr>
    
    <tr>
      <td><em><strong>รูป</strong></em></td>
      <td><input type="file" name="userfile" id="userfile"></td>
    </tr>
    
  
    
    <tr>
    <td height="40">Detail</td>
    <td><textarea class="checkInput" name="airDetail" id="airDetail" cols="45" rows="5"></textarea></td>
  </tr>
  
   
 <tr>
      <td colspan="2" align="center"><input type="submit" name="submit" id="submit" value="Submit"></td>
      </tr>
    
  </tbody>
</table>
</center>
</form>