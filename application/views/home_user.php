<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>user_view</title>
</head>
</div>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" >
<table width="311" border="1" align="center">
          <tbody>
            <tr>
              <td colspan="2" align="center">หน้า user</td>
            </tr>
            <tr>
              <td width="92" align="center">emUsername</td>
              <td width="203"><?php echo $loginData['emUsername'];	?></td>
            </tr>
            <tr>
              <td align="center">emStatus</td>
              <td><?php echo $loginData['emStatus'];	?></td>
            </tr>
            <tr>
              <td colspan="2" align="center"><a href="<?php echo base_url();?>index.php/home/logout">Logout</a></td>
            </tr>
          </tbody>
</table>
</body>
</html>