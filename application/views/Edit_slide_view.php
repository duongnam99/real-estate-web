<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Edit_Slide</title>
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
			<form method="post" enctype="multipart/form-data" action="<?= base_url() ?>/Edit_slide/edit">
			<?php $count = 1; ?>
			<?php foreach ($mangdl as $value): ?>
				<h4>Slide số: <?php echo $count++ ?></h4>

				<fieldset class="form-group">
					<label for="formGroupExampleInput">Ảnh cho Slide</label>
					<img src="<?= $value['slide_image'] ?>" alt="" width="100%">
					<input name="slide_image_old[]" type="hidden" class="form-control" value="<?= $value['slide_image'] ?>">
					<input type="file" name="slide_image[]">
				</fieldset>
			<?php endforeach ?>
			
				<fieldset class="form-group">
					<input type="submit" class="form-control btn btn-outline-warning" id="submit" value="Sửa">
				</fieldset>
			</form>
		</div>
	</div>
</div>
	
</body>
</html>