<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Edit Apartment</title>
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
				<form action="<?= base_url() ?>/Apartment/edit" method="post" enctype="multipart/form-data">
				<?php $count = 1; ?>
				<?php foreach ($mangdl as $value): ?>
					<hr>
					<h4> Content <?= $count++ ?></h4>
					<fieldset class="form-group">
						<img src="<?= $value['image'] ?>" alt="" class="img-fluid">
						<input type="file" name="apartment_image[]" class="form-control">
						<input type="hidden" name="apartment_image_old[]" class="form-control" value="<?= $value['image'] ?>">
					</fieldset><fieldset class="form-group">
						<label for="formGroupExampleInput"> Title </label>
						<input type="text" name="text1[]" class="form-control" value="<?= $value['text1'] ?>">
					</fieldset><fieldset class="form-group">
						<label for="formGroupExampleInput"> Content </label>
						<input type="text" name="text2[]" class="form-control" value="<?= $value['text2'] ?>">
					</fieldset>
				<?php endforeach ?>
					<hr>
					<fieldset class="form-group">
						<input type="submit" class="form-control btn btn-success" value="Lưu">
					</fieldset>
				</form>
			</div>
		</div>
	</div>
</body>
</html>