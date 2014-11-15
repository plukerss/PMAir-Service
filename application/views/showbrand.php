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
<form id="form1" name="form1" method="post" action="<?php echo base_url()?>index.php/airconditions/searchData">
<table width="" border="1" cellspacing="0" cellpadding="0" align="center">
  <tr>
    <td>
      <input type="text" name="keyword" id="keyword" />
    </td>
    <td><input name="submit" type="submit" value="ค้นหา"/></td></form>
    
   
<table width="100%" border="1" cellpadding="0" cellspacing="0" id="8">

  <tr>
  	<td width="">id</td>
    <td width="">Brand</td>
    <td width="">ลบ</td>
  </tr>
  <?php foreach($showAll as $row){?>
  <tr>
  	<td><?php echo $row['brandId'];?></td>
    <td><?php echo $row['brandName'];?></td>

    <td><a class="popup" href="<?php echo base_url()?>index.php/brands/doDelete/<?php echo $row['brandId'];?>">ลบ</a></td>
  </tr>
  <?php } ?>
</table>
