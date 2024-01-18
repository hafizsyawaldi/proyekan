<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('_partials/head.php'); ?>
</head>

<body>
	<div class="container">
		<?php $this->load->view('_partials/navbar.php');
		?>
		<div class="tittle">
			<h2>Data User</h2>
		</div>
		<div class="isian">
			<table border=1>
				<tr>
					<th>No</th>
					<th>Id</th>
					<th>Nama</th>
					<th>Username</th>
					<th>Password</th>
					<th>Level</th>
					<th>Aksi</th>
				</tr>

				<?php $i = 1; ?>
				<?php foreach ($user as $user) : ?>
					<tr>
						<td>
							<?= $i; ?>
						</td>
						<td>
							<?php echo $user->id_hafizh ?>
						</td>
						<td>
							<?php echo $user->nama_hafizh ?>
						</td>
						<td>
							<?php echo $user->password_hafizh ?>
						</td>
						<td>
							<?php echo $user->username_hafizh ?>
						</td>
						<td>
							<?php echo $user->level_hafizh ?>
						</td>
						<td><a href=edit/<?php echo $user->id ?>>Edit</a>||<a href=delete/<?php echo $user->id ?> onclick="return confirm('yakin?');">Hapus</a></td>
					</tr>
					<?php $i++; ?>
				<?php endforeach; ?>
			</table>
		</div>
		<?php $this->load->view('_partials/footer.php'); ?>
	</div>
</body>

</html>