        <script>
function calAir(){
	var w = document.getElementById('w').value;
	var l = document.getElementById('l').value;
	var h = document.getElementById('h').value;
	document.getElementById('re').innerHTML = parseInt(((w*l*h)*800)/3,.1);
}

		</script>
<table width="49%" border="1" align="center">
  <tr>
    <td align="center">กว้าง</td>
    <td align="center">ยาว</td>
    <td align="center">สูง</td>
  </tr>
  <tr>
    <td align="center"><input type="number" id="w" name="w" onkeyup="calAir();" /></td>
    <td align="center"><input type="number" id="l" name="l" onkeyup="calAir();" /></td>
     <td align="center"><input type="number" id="h" name="h" onkeyup="calAir();" /></td>
  </tr>
  <tr>
    <td colspan="3" align="center"><a id="re"></a></td>
  </tr>
</table>


