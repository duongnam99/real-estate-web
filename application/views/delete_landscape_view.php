<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Delete Slide</title>
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
			<?php $count = 0 ?>
			<form action="<?= base_url() ?>/Landscape/delete" enctype="multipart/form-data" method="post">
				<hr>
				<h4>Xóa ảnh số: <input type="number" name="number"> </h4>
				<?php foreach ($mangdl as $value): ?>
					<?php $count++ ?>
					<hr>
					<h4>Ảnh số : <?= $count; ?></h4>
					
						<fieldset class="form-group">
							<img src="<?= $value['landscape_image'] ?>" alt="" class="img-fluid">
							<input name="landscape_image[]" type="hidden" class="form-control" value="<?= $value['landscape_image'] ?>">
						</fieldset>
					<hr>
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