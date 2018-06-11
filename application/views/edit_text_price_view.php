<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> text </title>
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
				<form method="post" enctype="multidata/form-data" action="<?= base_url() ?>Price/edit_text">
					<fieldset class="form-group">
						<textarea name="text1" id="" cols="50" rows="10" style="font-size: 1.1em"><?= $text1 ?></textarea>
					</fieldset>	
					<hr>
					<fieldset class="form-group">
						<textarea name="text2" id="" cols="50" rows="10" style="font-size: 1.1em"><?= $text2 ?></textarea>
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