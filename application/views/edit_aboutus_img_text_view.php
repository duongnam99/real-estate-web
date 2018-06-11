<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> img and text About us</title>
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
				<form action="<?= base_url() ?>Aboutus/edit" method="post" enctype="multipart/form-data">
				<hr>
				<?php foreach ($mangdl as $value): ?>
					<fieldset class="form-group">
						<img src="<?= $value['image'] ?>" alt="" class="img-fluid">
						<input type="file" class="form-control" name="image[]">
						<input type="hidden" name="image_old[]" class="form-control" value="<?= $value['image'] ?>">
					</fieldset>
					<fieldset class="form-group">
						<label for="formGroupExampleInput"> Text </label>
						<input type="text" name="text[]" class="form-control" value="<?= $value['text'] ?>">
					</fieldset>
				<?php endforeach ?>
					
					<fieldset class="form-group">
						<input type="submit" class="form-control btn btn-success">
					</fieldset>
				</form>
			</div>
		</div>
	</div>
</body>
</html>