<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add_Slide</title>
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
			<form method="post" enctype="multipart/form-data" action="<?= base_url() ?>Add_slide/add">
				<fieldset class="form-group">
					<label for="formGroupExampleInput">Ảnh cho Slide</label>
					<input type="file" name="slide_image" class="form-control" id="formGroupExampleInput">
				</fieldset>
				<fieldset class="form-group">
					<input type="submit" class="form-control btn btn-outline-success" id="submit" value="Nhập">
				</fieldset>
			</form>
		</div>
	</div>
</div>
	
</body>
</html>