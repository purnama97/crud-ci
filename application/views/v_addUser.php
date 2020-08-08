<form action="<?php echo base_url('index.php/dashboard/save') ?>" method="POST">
<table border='1'>
	<tr>
		<td>Nama</td>
		<td>User Name</td>
		<td>Password</td>
		<td rowspan='2'><input type="submit" name="submit" value="Kirim"</td>
	</tr>
	<tr>
		<td><input type="text" name="name"></td>
		<td><input type="text" name="username"></td>
		<td><input type="password" name="password"></td>
	</tr>
<table>
</form>
