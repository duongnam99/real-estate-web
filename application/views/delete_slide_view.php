<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Delete_Slide</title>
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
			<form method="post" enctype="multipart/form-data" action="<?= base_url() ?>/Delete_slide/delete">
			<h4>Xóa slide số: <input type="number" name="number"> </h4>
			<hr>
			<?php $count = 1; ?>
			<?php foreach ($mangdl as $value): ?>
				<h4>Slide số: <?php echo $count++ ?></h4>
				<fieldset class="form-group">
					<label for="formGroupExampleInput">Ảnh slide</label>
					<img src="<?= $value['slide_image'] ?>" alt="" width="100%">
				</fieldset>
			<?php endforeach ?>
			
				<fieldset class="form-group">
					<input type="submit" class="form-control btn btn-outline-warning" id="submit" value="Xóa">
				</fieldset>
			</form>
		</div>
	</div>
</div>
	
</body>
</html>