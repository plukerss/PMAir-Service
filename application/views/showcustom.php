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
<form id="form1" name="form1" method="post" action="<?php echo base_url()?>index.php/customers/searchData">
<table width="" border="1" cellspacing="0" cellpadding="0" align="center">
  <tr>
    <td>
      <input type="text" name="keyword" id="keyword" />
    </td>
    <td><input name="submit" type="submit" value="ค้นหา"/></td></form>
    
    

<table width="100%" border="1" cellpadding="0" cellspacing="0" id="8">

  <tr>
  	<td width="">id</td>
    <td width="">ชื่อ</td>
    <td width="">นามสกุล</td>
    <td width="">อีเมบ์</td>
    <td width="">ที่อยู่</td>
    <td width="">เบอร์โทร</td>
    <td width="">ละจิจูด</td>
    <td width="">ลองจิจูด</td>
    <td width="">แก้ไข</td>
    <td width="">ลบ</td>
  </tr>
  <?php foreach($showAll as $row){?>
  <tr>
  	<td><?php echo $row['cusId'];?></td>
    <td><?php echo $row['cusName'];?></td>
    <td><?php echo $row['cusLastname'];?></td>
    <td><?php echo $row['cusEmail'];?></td>
    <td><?php echo $row['cusAddress'];?></td>
    <td><?php echo $row['cusTel'];?></td>
    <td><?php echo $row['cusLatitude'];?></td>
    <td><?php echo $row['cusLongitude'];?></td>
    
    <td><a class="popup" name="update" href="<?php echo base_url();?>index.php/customers/upDate/<?php echo $row['cusId'];?>" class="submenu" title="home">แก้ไข</a> </td>
    <td><a class="popup" name="update" href="<?php echo base_url()?>index.php/customers/doDelete/<?php echo $row['cusId'];?>">ลบ</a></td>
  </tr>
  <?php } ?>
</table>

