
<!DOCTYPE html>
<html>
<head>
	<title>CRUD || Edit Data</title>
</head>
<body>
	<?php foreach ($user as $u ) {

	  ?>
	<form method="POST" id="myForm" action="<?php echo site_url('Main/proses_checkout');?>">
	<table border="1">
	<tr>
		<input type="hidden" name="id_bukutamu" value="<?php echo $u->id_bukutamu;?>">
		<td><input type="hidden" name="nama" value="<?php echo $u->nama;?>"></td>
		<td> <input type="hidden" name="email" value="<?php echo $u->email;?>" ></td>
		<td> <input type="hidden" name="aktifitas" value="<?php echo $u->aktifitas;?>"></td>
		<td> <input type="hidden" name="check_in" value="<?php echo $u->check_in;?>"></td>
		<td><input type="submit" name="proses_tambahdata" value=""></td>
	</tr>


	</table>
	</form>
	<?php }  ?>
</body>
<script>
    document.getElementById("myForm").submit();
</script>
</html>