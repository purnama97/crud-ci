<?php
foreach($users as $data);
?>
<form action="<?php echo base_url('index.php/dashboard/updated/').$data->id ?>" method="POST">
<table border='1'>
	<tr>
		<td>Nama</td>
		<td>User Name</td>
		<td>Password</td>
		<td rowspan='2'><input type="submit" name="submit" value="Kirim"</td>
	</tr>
	<tr>
		<td><input type="text" name="name" value='<?php echo $data->name ?>'></td>
		<td><input type="text" name="username" value='<?php echo $data->userName ?>'></td>
		<td><input type="password" name="password" value='<?php echo $data->userPassword ?>'></td>
	</tr>
<table>
</form>
