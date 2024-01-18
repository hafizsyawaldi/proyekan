<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('_partials/head.php'); ?>
</head>

<body>
	<div class="container">
		<?php $this->load->view('_partials/navbar.php'); ?>

		<div class="tittle">
			<h2>Tambah Data User</h2>
		</div>

		<div class="isian">
			<?php if ($this->session->flashdata('success')) : ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
			<?php endif; ?>
			<br>
			<form action="<?php base_url('add') ?>" method="post">

				<label for="idh">Id User:</label><br>
				<input class="form-control <?php echo form_error('idh') ? 'is-invalid' : '' ?>" type="text" name="idh" required/>
				<div class="invalid-feedback">
					<?php echo form_error('idh') ?>
				</div>

				<label for="nama">Nama User:</label><br>
				<input class="form-control <?php echo form_error('nama') ? 'is-invalid' : '' ?>" type="text" name="nama" min="0" required/>
				<div class="invalid-feedback">
					<?php echo form_error('nama') ?>
				</div>

				<label for="username">Username User:</label><br>
				<input class="form-control <?php echo form_error('username') ? 'is-invalid' : '' ?>" type="text" name="username" min="0" required/>
				<div class="invalid-feedback">
					<?php echo form_error('username') ?>
				</div>

				<label for="password">Password User:</label><br>
				<input class="form-control <?php echo form_error('password') ? 'is-invalid' : '' ?>" type="text" name="password" min="0" required/>
				<div class="invalid-feedback">
					<?php echo form_error('password') ?>
				</div>

				<label for="level">Level User:</label><br>
				<input class="form-control <?php echo form_error('level') ? 'is-invalid' : '' ?>" type="text" name="level" min="0" required/>
				<div class="invalid-feedback">
					<?php echo form_error('level') ?>
				</div>

				<br><input type="submit" name="btn" value="Save" />
			</form>

			<?php $this->load->view('_partials/footer.php'); ?>
		</div>
	</div>
</body>

</html>