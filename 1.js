 $(function(){
 	// $('.landscape .anh').isotope({
 	// 	itemSelector: 'a'
 	// });
 	$('.carousel-item:first').addClass('active'); // thêm class active vào ảnh slide đầu tiên để cảousel bốttrap có thể hoạt động
 	$(window).scroll(function(event) {
 		var vitri = $('html,body').scrollTop();
 		var trangthai = 'chuaqua';
 		if(vitri >= $('.dieuchinh').innerHeight()){
 			if(trangthai == 'chuaqua'){
 				trangthai = 'daqua';
 				$('.dieuchinh').addClass('navbienhinh');
 			}
 		}else if(vitri < $('.dieuchinh').innerHeight()){
 			// if(trangthai == 'daqua'){
 			// 	trangthai = 'chuaqua';
 				$('.dieuchinh').removeClass('navbienhinh');
 			// }
 		}
 		// hieu ung cho landscape
 		var trangthai1 = 'chuaqua';
 		var vtls = $('.landscape').offset().top;
 		if(vitri >= vtls - 400 ){
 			if(trangthai1 == 'chuaqua'){
 				trangthai1 = 'daqua';
 				$('.landscape').addClass('lshienra');
 			}
 		}
 		// hieu ung cho villa
 		var trangthai2 = 'chuaqua';
 		var vtvl = $('.villa').offset().top;
 		if(vitri >= vtvl - 400 ){
 			if(trangthai2 == 'chuaqua'){
 				trangthai2 = 'daqua';
 				$('.villa').addClass('vlhienra');
 			}
 		}
 		//hieu ung cho apartment
 		var trangthai3 = 'chuaqua';
 		var vtap = $('.apartment').offset().top;
 		if(vitri >= vtap - 400 ){
 			if(trangthai3 == 'chuaqua'){
 				trangthai3 = 'daqua';
 				$('.apartment').addClass('aphienra');
 			}
 		}
 		// hieu ung cho price
		var trangthai4 = 'chuaqua';
 		var vtpr = $('.price').offset().top;
 		if(vitri >= vtpr - 400 ){
 			if(trangthai4 == 'chuaqua'){
 				trangthai4 = 'daqua';
 				$('.price').addClass('prhienra');
 			}
 		}
		var trangthai5 = 'chuaqua';
 		var vtabu = $('.aboutus').offset().top;
 		if(vitri >= vtabu - 400 ){
 			if(trangthai5 == 'chuaqua'){
 				trangthai5 = 'daqua';
 				$('.textanhabu').addClass('taabuhienra');
 			}
 		}

 	});
 	$('.dieuchinh ul li a').click(function(event) {		
	 		var vitri = $(this).attr('href'); // lay thuoc tinh trong href,cung la id cua the muon toi
	 		var toado = $(vitri).offset().top;
	 		$('html,body').animate({scrollTop: toado},1000, "easeOutExpo");
	 		return false;
	});
})  
 