<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> image Price</title>
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
				<form method="post" enctype="multipart/form-data" action="<?= base_url() ?>Price/edit_image">
					<?php $count =  1 ?>
					<?php foreach ($mangdl as $value): ?>
						<hr>
						<h4> Image <?= $count++ ?> :</h4>
						<fieldset class="form-group">
							<img src="<?= $value['image'] ?>" alt="" class="img-fluid">
							<input type="file" name="price_image[]" class="form-control">
							<input type="hidden" name="price_image_old[]" class="form-control" value="<?= $value['image'] ?>">
						</fieldset>
					<?php endforeach ?>
				
					<fieldset class="form-group">
						<input type="submit" class="form-control btn btn-success" value="Lưu">
					</fieldset>
				</form>
			</div>
		</div>
	</div>
</body>
</html>