<a href='<?php echo base_url('index.php/dashboard/create');?>'>Tambah</a><br>
<table border='1'>
	<tr>
		<td>No</td>
		<td>Nama</td>
		<td>User Name</td>
		<td>Create Date</td>
		<td>Update Date</td>
		<td>Aksi</td>
	</tr>
	<tr>
	<?php
	$no = 1;
	foreach($users as $data)
	{
		echo "<tr>
				<td>$no</td>
				<td>$data->name</td>
				<td>$data->userName</td>
				<td>$data->createdAt</td>
				<td>$data->updatedAt</td>
				<td>
					<a href='".base_url('index.php/dashboard/update/').$data->id."'>Update</a>
					<a href='".base_url('index.php/dashboard/delete/').$data->id."'>Delete</a>
				</td>
			</tr>";
			$no++;
	}
	?>
<table>
