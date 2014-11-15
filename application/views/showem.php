        <script>
 $('.popup').fancybox({
			height :	'500',
				width :	'80%',
				autoSize : false,
				scrolling : 'auto',
				arrows : false,
				type				: 'iframe'	
});

		</script>
<form id="form1" name="form1" method="post" action="<?php echo base_url()?>index.php/employees/searchData">
<table width="" border="1" cellspacing="0" cellpadding="0" align="center">
  <tr>
    <td>
      <input type="text" name="keyword" id="keyword" />
    </td>
    <td><input name="submit" type="submit" value="ค้นหา"/></td></form>
    
    
<form id="form1" name="form1" method="post" action="<?php echo base_url()?>index.php/userControl/addCar">
</form>
<table width="100%" border="1" cellpadding="0" cellspacing="0" id="8">

  <tr>
  	<td width="">id</td>
    <td width="">ชื่อ</td>
    <td width="">นามสกุล</td>
    <td width="">อีเมล์</td>
    <td width="">ที่อยู่</td>
    <td width="">เบอร์โทร</td>
    <td width="">สถานะ</td>
    <td width="">แก้ไข</td>
    <td width="">ลบ</td>
  </tr>
  <?php foreach($showAll as $row){?>
  <tr>
  	<td><?php echo $row['emId'];?></td>
    <td><?php echo $row['emName'];?></td>
    <td><?php echo $row['emLastname'];?></td>
    <td><?php echo $row['emEmail'];?></td>
    <td><?php echo $row['emAddress'];?></td>
    <td><?php echo $row['emTel'];?></td>
    <td><?php echo $row['emStatus'];?></td>
    
    <td><a class="popup" name="update" href="<?php echo base_url();?>index.php/employees/upDate/<?php echo $row['emId'];?>" class="submenu" title="home">แก้ไข</a> </td>
    <td><a class="popup" name="update" href="<?php echo base_url()?>index.php/employees/doDelete/<?php echo $row['emId'];?>">ลบ</a></td>
  </tr>
  <?php } ?>
</table>
