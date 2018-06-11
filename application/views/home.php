<!DOCTYPE html>
<html lang="en"><head>
	<title> Real-estate </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">  
	<script type="text/javascript" src="<?php echo base_url() ?>vendor/bootstrap.js"></script>
	<!-- <script type="text/javascript" src="isotope.pkgd.min.js"></script> -->
	<link rel="stylesheet" href="<?php echo base_url() ?>vendor/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>vendor/font-awesome.css">
 	<link rel="stylesheet" href="<?php echo base_url() ?>1.css">
 	<!-- <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet"> -->
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script:400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
	<link rel="stylesheet" href="animate.css">
	<script src="<?php echo base_url() ?>jquery.easing.1.3.js"></script>
	<link  href="<?php echo base_url() ?>fancybox-master/dist/jquery.fancybox.min.css" rel="stylesheet">
 	<script src="<?php echo base_url() ?>fancybox-master/dist/jquery.fancybox.min.js"></script>
 	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.4/TweenMax.min.js"></script>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="70">
	
	<div class="banner">
		<nav class="navbar navbar-fixed-top navbar-light bg-faded dieuchinh ">
          <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar2">
          </button>
          <div class="collapse navbar-toggleable-lg" id="exCollapsingNavbar2">
            <a class="navbar-brand hidden-sm-down" href="#">GI co. ltd</a>
            <ul class="nav navbar-nav">
              <li class="nav-item active">
                <a class="nav-link home" href="#so1">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#so2">Landscape</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#so3">Villa</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#so4">Apartment</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#so5">Price</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#so6">About us</a>
              </li>
            </ul>
          </div>
        </nav>
        <div id="so1" class="slide">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-example-generic" data-slide-to="0"></li>
					<li data-target="#carousel-example-generic" data-slide-to="0"></li>
				</ol>
				<div class="carousel-inner" role="listbox">
                <?php foreach ($mangdl as $value): ?>
                    <div class="carousel-item"> <!-- bình thường còn có class active ở slide đầu tiên, nhưung vì dùng foreach nên phải bỏ, ta thêm vào bằng Js -->
                        <img src="<?= $value['slide_image'] ?>" alt="First slide">
                    </div>
                <?php endforeach ?>
					
					<!-- <div class="carousel-item">
						<img src="images/house1.jpg" alt="2th slide">
					</div>
					<div class="carousel-item">
						<img src="images/house2.jpg" alt="3th slide">
					</div> -->
				</div>
				<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
					<span class="icon-prev" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
					<span class="icon-next" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
        </div>		
    </div> <!-- het banner -->
        <div id="so2" class="landscape ">
        	<div class="container">
        		<div class="row">
        			<div class="col-sm-8 push-sm-2">
        				<div class="lsctext">
        			     <?= $textLandscape ?>
        				</div>
        			</div>
        		</div>
        		<div class="row">
        			<div class="col-sm-3">

                       <?php foreach ($mangdl1 as $key => $value): ?>
                            <?php if( $key <=2 && $key >=0) { ?>
                             <a href="<?= $value['landscape_image'] ?>" data-fancybox="group"><img src="<?= $value['landscape_image'] ?>" alt="" class="anh"></a>
                             <?php } ?>
                       <?php endforeach ?>
                          
                    </div>
        			<div class="col-sm-3 hidden-sm-down">
        			    <?php foreach ($mangdl1 as $key => $value): ?>
                            <?php if( $key <=5 && $key >=3) { ?>
                             <a href="<?= $value['landscape_image'] ?>" data-fancybox="group"><img src="<?= $value['landscape_image'] ?>" alt="" class="anh"></a>
                             <?php } ?>
                  <?php endforeach ?>
        			</div>
        			<div class="col-sm-3 hidden-sm-down">
                		<?php foreach ($mangdl1 as $key => $value): ?>
                            <?php if( $key <=8 && $key >=6) { ?>
                             <a href="<?= $value['landscape_image'] ?>" data-fancybox="group"><img src="<?= $value['landscape_image'] ?>" alt="" class="anh"></a>
                             <?php } ?>
                    <?php endforeach ?>
        			</div>
        			<div class="col-sm-3">
                  <?php foreach ($mangdl1 as $key => $value): ?>
        				      <?php if( $key <=11 && $key >=9) { ?>
                             <a href="<?= $value['landscape_image'] ?>" data-fancybox="group"><img src="<?= $value['landscape_image'] ?>" alt="" class="anh"></a>
                             <?php } ?>
                  <?php endforeach ?>
        			</div>
        		</div>
        	</div>
        </div>
        <div id="so3" class="villa">
        	<div class="container">
        	<div class="row">
          <?php foreach ($villa as $value): ?>
              <div class="col-sm-6">
                <a href="<?= $value['image'] ?>" data-fancybox="group2"><img src="<?= $value['image'] ?>" alt="" class="anh1villa"></a>
                <div class="textvilla"> <?= $value['text1'] ?> </div>
                <div class="ke"></div>
                <div class="text2villa"> <?= $value['text2'] ?></div>
              
              </div>
          <?php endforeach ?>       		
        		</div>
        	</div>
        </div>
        <div id="so4" class="apartment">
        	<div class="container">
        		<div class="row">
                <?php foreach ($apartment as $value): ?>
                  <div class="col-sm-4 ap">
                    <a href="<?= $value['image'] ?>" data-fancybox="group3"><img src="<?= $value['image'] ?>" alt="" class="anhap"></a>
                    <div class="text1ap"><?= $value['text1'] ?></div>
                    <div class="ke"></div>
                    <div class="text2ap"> <?= $value['text2'] ?></div>
                  </div>
                <?php endforeach ?>
        		</div>
        	</div>
        </div> <!-- het apartment -->
        <div id="so5" class="price">
        	<div class="container">
        		<div class="row">
        			<div class="col-sm-4">
        				<div class="text1pr">Chung cư</div>
        				<div class="ke"></div>
						<div class="text2pr">
						<p>
							<!-- - 70m2:  20-22tr/m2. <br />
							- 86m2:  19-21tr/m2. <br />
							- 112m2: 18-21tr/m2. <br />
							- 154m2 (penHouse): 25tr/m2.  -->
              <?= $price_text1 ?>
						</p>
							
						</div>
						<div class="text1pr">Biệt thự</div>
						<div class="ke"></div>
						<div class="text2pr">
						<p>
							<!-- - 150m2: 40-44tr/m2. <br />
							- 200m2: 40-44tr/m2. <br />
							- 250m2: 38-44tr/m2/m2. -->
              <?= $price_text2 ?>
						</p>
							
						</div>
        			</div>

        			<div class="col-sm-4 hidden-sm-down">
              <?php foreach ($imagePrice as $key => $value): ?>
                  <?php if($key == 0) { ?>
                     <a href="<?= $value['image'] ?>" data-fancybox="group4"><img src="<?= $value['image'] ?>" alt="" class="anhpr1"></a>
                  <?php }elseif( $key == 1 ) { ?>
                      <a href="<?= $value['image'] ?>" data-fancybox="group4"><img src="<?= $value['image'] ?>" alt="" class="anhpr2"></a>
                   <?php } ?>
              <?php endforeach ?>
        			</div>
        			<div class="col-sm-4 hidden-sm-down">
        				 <?php foreach ($imagePrice as $key => $value): ?>
                  <?php if($key == 2) { ?>
                     <a href="<?= $value['image'] ?>" data-fancybox="group4"><img src="<?= $value['image'] ?>" alt="" class="anhpr1"></a>
                  <?php }elseif( $key == 3 ) { ?>
                      <a href="<?= $value['image'] ?>" data-fancybox="group4"><img src="<?= $value['image'] ?>" alt="" class="anhpr2"></a>
                   <?php } ?>
              <?php endforeach ?>
        			</div>
        		</div>
        	</div>
        </div> <!-- het price -->
        <div id="so6" class="aboutus">

          <?php foreach ($aboutus_img_text as $value): ?>
            <div class="anhabu" style="background: url(<?= $value['image'] ?>);
                                      background-size: cover;
                                      background-attachment: fixed;
                                      
                                      ">
              <div class="textanhabu"><?= $value['text'] ?></div>
            </div>
          <?php endforeach ?>
			
			
			<div class="container">
				<div class="row info">
					<div class="col-sm-4">Landjaeger hamburger fatback sausage bacon drumstick burgdoggen tri-tip frankfurter filet mignon alcatra pork loin ball tip chicken swine. Spare ribs alcatra tri-tip </div>
					<div class="col-sm-4"><p>Location: <br /> 160-Hoang Mai-Ha Noi-VN</p> </div>
					<div class="col-sm-4"><p>Contact: <br /> - Email: nam.duongminh99@gmail.com <br /> - Phone number: 0964765727 </p></div>
					
				</div>
			</div>
        </div>

	
		
	<script type="text/javascript" src="<?php echo base_url() ?>1.js"></script>
</body>
</html>
