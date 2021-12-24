<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Gateway FH UII</title>

	<link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/login/images/icons/favicon.jpg" />
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/fontawesome-free/css/all.min.css">
	<!-- iCheck -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/dist/css/adminlte.min.css">

<body class="layout-footer-fixed">
	<div class="wrapper">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="container-fluid">
				<div class="row mt-2 mb-3 text-center">
					<div class="col">
						<img src="<?= base_url(); ?>assets/dist/img/MainLogo.png" alt="">
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.container-fluid -->
		</div>
		<!-- /.content-header -->

		<!-- Main content -->
		<section class="content">
			<div class="container-fluid">
				<!-- Small boxes (Stat box) -->
				<div class="row">
					<div class="col-lg-3 col-6">
						<!-- small box -->
						<div class="small-box bg-info">
							<div class="inner">
								<h3>SIMAGA</h3>

								<p>Sistem Informasi Pemagangan</p>
							</div>
							<div class="icon">
								<i class="fas fa-landmark"></i>
							</div>
							<a href="<?php echo base_url(); ?>magang/login/" class="small-box-footer" target="_blank">Buka <i class="fas fa-arrow-circle-right"></i></a>
						</div>
					</div>
					<!-- ./col -->
					<div class="col-lg-3 col-6">
						<!-- small box -->
						<div class="small-box bg-success">
							<div class="inner">
								<h3>SIJA</h3>

								<p>Sistem Informasi Ijazah</p>
							</div>
							<div class="icon">
								<i class="fas fa-file-alt"></i>
							</div>
							<a href="<?php echo base_url(); ?>ijazah/login/" class="small-box-footer" target="_blank">Buka <i class="fas fa-arrow-circle-right"></i></a>
						</div>
					</div>
					<!-- ./col -->
					<div class="col-lg-3 col-6">
						<!-- small box -->
						<div class="small-box bg-warning">
							<div class="inner">
								<h3>SINILA</h3>

								<p>Sistem Informasi Penilaian</p>
							</div>
							<div class="icon">
								<i class="fas fa-edit"></i>
							</div>
							<a href="<?= base_url(); ?>nilai/login" class="small-box-footer" target="_blank">Buka <i class="fas fa-arrow-circle-right"></i></a>
						</div>
					</div>
					<!-- ./col -->
				</div>
				<!-- /.row -->
				<footer class="main-footer">
					<strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
					All rights reserved.
					<div class="float-right d-none d-sm-inline-block">
						<b>Version</b> 3.1.0
					</div>
				</footer>
			</div><!-- /.container-fluid -->
		</section>
		<!-- /.content -->
	</div>
	<!-- ./wrapper -->

	<!-- jQuery -->
	<script src="<?= base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
	<!-- AdminLTE App -->
	<script src="<?= base_url(); ?>assets/dist/js/adminlte.js"></script>
</body>

</html>