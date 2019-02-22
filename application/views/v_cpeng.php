<!DOCTYPE html>
<html>
<head>
	<title>Membuat Aplikasi POS</title>
</head>
<body>
	<h1>POS</h1>
	<form action="<?php echo base_url('admin/cpengs'); ?>" method="post">
	<center>		
		<table>

		<tr>
			<td><a href="<?php echo base_url('Admin/cpeng'); ?>">Create Penghuni</a></td>
			<td><a href="<?php echo base_url('admin/upeng'); ?>"> Update Penghuni</td>
			<td><a href="<?php echo base_url('admin/cpak'); ?>">Create Paket</td>
			<td><a href="<?php echo base_url('admin/list'); ?>">List Paket</td>
			<td><a href="<?php echo base_url('login/logout'); ?>">Logout</a></td>
		</tr>
<br>
			<tr>
				<td>Nama Penghuni</td>
				<td><input type="text" name="names"></td>
			</tr>
			<tr>
				<td>Unit</td>
				<td><input type="text" name="units"></td>
			</tr>
			<tr>
				<td>KTP</td>
				<td><input type="text" name="nktp"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Create"></td>
			</tr>
		</table>
	</center>
	</form>
</body>
</html>