<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('_partials/head.php'); ?>
</head>

<body>
	<div class="container">
		<?php $this->load->view('_partials/navbar.php'); ?>

		<div class="tittle">
			<h2>Edit Data User</h2>
		</div>

		<div class="isian">
			<?php if ($this->session->flashdata('success')) : ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
			<?php endif; ?>
			<br>
			<form action="<?php base_url("edit") ?>" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label for="idh">Id User:</label><br>
					<input class="form-control <?php echo form_error('idh') ? 'is-invalid' : '' ?>" type="text" name="idh" placeholder="id user" value="<?php echo $user->id_hafizh ?>" />
					<div class="invalid-feedback">
						<?php echo form_error('idh') ?>
					</div>
				</div>

				<div class="form-group">
					<label for="nama">Nama:</label><br>
					<input class="form-control <?php echo form_error('nama') ? 'is-invalid' : '' ?>" type="text" name="nama" placeholder="nama user" value="<?php echo $user->nama_hafizh ?>" />
					<div class="invalid-feedback">
						<?php echo form_error('nama') ?>
					</div>
				</div>

				<div class="form-group">
					<label for="username">Username:</label><br>
					<input class="form-control <?php echo form_error('username') ? 'is-invalid' : '' ?>" type="text" name="username" placeholder="username user" value="<?php echo $user->username_hafizh ?>" />
					<div class="invalid-feedback">
						<?php echo form_error('username') ?>
					</div>
				</div>

				<div class="form-group">
					<label for="password">Password:</label><br>
					<input class="form-control <?php echo form_error('password') ? 'is-invalid' : '' ?>" type="text" name="password" placeholder="password user" value="<?php echo $user->password_hafizh ?>" />
					<div class="invalid-feedback">
						<?php echo form_error('password') ?>
					</div>
				</div>

				<div class="form-group">
					<label for="level">Level:</label><br>
					<input class="form-control <?php echo form_error('level') ? 'is-invalid' : '' ?>" type="text" name="level" placeholder="level user" value="<?php echo $user->level_hafizh ?>" />
					<div class="invalid-feedback">
						<?php echo form_error('level') ?>
					</div>
				</div>

				<br><input type=hidden name=id value=<?php echo $user->id; ?>>

				<input class="btn btn-success" type="submit" name="btn" value="Save" />
			</form>
		</div>
	</div>
	<?php $this->load->view('_partials/footer.php'); ?>
</body>

</html>