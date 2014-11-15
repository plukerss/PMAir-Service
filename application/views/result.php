<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form action="<?php echo base_url();?>index.php/Customers/searchData" method="post">
<table width="246" border="1">
  <tr>
    <td width="86">ค้นหาจาก ID</td>
    <td width="144"><input type="text" name="textSearch"></td>
  </tr>
  <tr>
    <td colspan="2"><input type="button" name="text" value="ค้นหา">;</td>
    </tr>
</table>


	
</form>
</body>
</html>