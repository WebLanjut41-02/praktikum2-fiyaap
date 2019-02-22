<html>
<head>
	<title>Membuat Aplikasi POS</title>
</head>
<body>
	<center>
		<table>

		<tr>
			<td><a href="<?php echo base_url('Admin/cpeng'); ?>">Create Penghuni</a></td>
			<td><a href="<?php echo base_url('admin/upeng'); ?>"> Update Penghuni</td>
			<td><a href="<?php echo base_url('admin/cpak'); ?>">Create Paket</td>
			<td><a href="<?php echo base_url('admin/list'); ?>">List Paket</td>
			<td><a href="<?php echo base_url('login/logout'); ?>">Logout</a></td>
		</tr>
	</table>
	<table border="1">
		<tr>
			<th>Nama</th>
			<th>Unit</th>
			<th>KTP</th>
		</tr>
		<?php foreach($penghuni as $p){ ?>
		<tr>
			<td><?php echo $p->nama ?></td>
			<td><?php echo $p->unit ?></td>
			<td><?php echo $p->ktp ?></td>
		</tr>
		<?php } ?>
	</table>
</center>
</body>
</html>