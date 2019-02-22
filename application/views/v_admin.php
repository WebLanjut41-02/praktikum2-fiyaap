<!DOCTYPE html>
<html>
<head>
	<title>Membuat Aplikasi POS</title>
</head>
<body>
	<h1>Login berhasil !</h1>
	<h2>Hai, <?php echo $this->session->userdata("nama"); ?></h2>
<table>
	<tr>
		<td><a href="<?php echo base_url('Admin/cpeng'); ?>">Create Penghuni</a></td>
		<td><a href="<?php echo base_url('admin/upeng'); ?>"> Update Penghuni</td>
		<td><a href="<?php echo base_url('admin/cpak'); ?>">Create Paket</td>
		<td><a href="<?php echo base_url('admin/list'); ?>">List Paket</td>
		<td><a href="<?php echo base_url('login/logout'); ?>">Logout</a></td>
	</tr>
</table>


</body>
</html>