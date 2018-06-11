<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> edit </title>
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
			<form action="<?= base_url() ?>/Landscape/edit_landscape_text" enctype="multipart/form-data" method="post">
				<fieldset class="form-group"> Landscape_text </label>
					<input type="text" class="form-control" value="<?= $text ?>" name="text">
				</fieldset>
				<fieldset class="form-group">
					<input type="submit" class="form-control btn btn-success" value="Lưu">
				</fieldset>
			</form>
		</div>
	</div>
</div>
	
</body>
</html>