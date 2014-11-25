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
    </tr>
    </table>
   
<table width="100%" border="1" cellpadding="0" cellspacing="0" id="8">

  <tr>
  	
    <td width="">AirModel</td>
    <td width="">AirPicture</td>
    <td width="">AirDetail</td>
    <td width="">AirBrand</td>
    
  </tr>
  <?php foreach($showAll as $row){?>
  <tr>
  	
    <td><?php echo $row['airModel'];?></td>
    <td><img src="<?php echo base_url()?>imguploads/<?php echo $row['airPic'];?>" width="100"/></td>
    <td><?php echo $row['airDetail'];?></td>
    <td><?php echo $row['brandName'];?></td>
    
  
  </tr>
  <?php } ?>
</table>
