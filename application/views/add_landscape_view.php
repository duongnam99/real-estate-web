<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Add lansdcape</title>
	<link rel="stylesheet" href="<?= base_url() ?>vendor/bootstrap.css">
	<link rel="stylesheet" href="<?= base_url() ?>vendor/font-awesome.css">
 	<link rel="stylesheet" href="<?= base_url() ?>1.css">
</head>
<body>
<?php 
		if(!$this->session->has_userdata('adminname') && !$this->session->has_userdata('pass')){
			redirect('Admin','refresh');
		}
	?>
		
<?php include("menu.php"); ?>
<div class="container">

	<div class="row">
		<div class="col-sm-10 push-sm-1">
			<hr>
			<form action="<?= base_url() ?>/Landscape/add_text" enctype="multipart/form-data" method="post">
				<fieldset class="form-group">
					<label for="formGroupExampleInput"> Giới thiệu </label>
					<input type="text" name="landscape_text" class="form-control" id="formGroupExampleInput" placeholder="...">
				</fieldset>
				<fieldset class="form-group">
					<input type="submit" class="form-control btn btn-outline-success" id="formGroupExampleInput" value="Nhập">
				</fieldset>
			</form>
			<form action="Landscape/addLandscape_image" enctype="multipart/form-data" method="post">
				<fieldset class="form-group">
					<label for="formGroupExampleInput2"> Thêm ảnh (max: 12)</label>
					<input type="file" name="landscape_image" class="form-control" id="formGroupExampleInput2" value="Thêm ảnh">
				</fieldset>
				<fieldset class="form-group">
					<input type="submit" class="form-control btn btn-outline-success" id="formGroupExampleInput2" value="Thêm">
				</fieldset>
			</form>
		</div>
	</div>
</div>
	
</body>
</html>