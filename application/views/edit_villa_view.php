<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Edit villa </title>
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
				<form action="<?= base_url() ?>Villa/edit_villa" enctype="multipart/form-data" method="post">
				<?php $count = 0 ?>
				<?php foreach ($mangdl as $value): ?> 
					<?php $count++ ?>
					<h4>Số : <?= $count ?></h4>
					<fieldset class="form-group">
						<label for="formGroupExampleInput"> Ảnh </label>
						<input type="file" name="image[]" class="form-control">
						<input type="hidden" name="image_old[]" class="form-control" value="<?= $value['image'] ?>">
					</fieldset>
					<fieldset class="form-group">
						<label for="formGroupExampleInput2"> Text 1</label>
						<input type="text" name="text1[]" class="form-control" value="<?= $value['text1'] ?>">
					</fieldset>	<fieldset class="form-group">
						<label for="formGroupExampleInput2"> Text 2</label>
						<input type="text" name="text2[]" class="form-control" value="<?= $value['text2'] ?>">
					<hr>
				 <?php endforeach ?>
					</fieldset>	<fieldset class="form-group">
						<input type="submit" class="form-control btn btn-success" value="Lưu">
					</fieldset>
				</form>
			</div>
		</div>
	</div>
</body>
</html>