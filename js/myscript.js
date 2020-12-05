							/*Start bu.php Script*/

	//----------- Making Navbar Sticky 	(Navbar Section)
	window.addEventListener('scroll', function(){

		var header = document.querySelector('header');
		header.classList.toggle('sticky',window.scrollY > 0);
	});

	/*Trigger Toggle Navbar Menu*/
	function togglemenu(){
		var  menuToggle = document.querySelector('.toggle');
		var  menu = document.querySelector('.menu');
		menuToggle.classList.toggle('active');
		menu.classList.toggle('active');
	}

	//----------- Links Add Active Class on click 	(Navbar Section)

	$('header ul li a').click(function(){

		$(this).parent().addClass('activeColor').siblings().removeClass('activeColor');
	});

	//----------- Toggle Sidebar Menu 	(Sidebar Menu Section)

	function toggleMenu(){
		let navigation = document.querySelector('.navigation');
		navigation.classList.toggle('opensidebar');
	}


	//-----------	Trigger Light & Dark Mood
	$(function() {
		var count=0;
		    $('.dark-light').click( function() {
		    count++;
		    				/*Light Mode*/
		    if(count%2==0){
		    	$('.about, .sponsers, .requestDemo, .contact').removeClass('changeBack');
		    	$('.copyright').css('background-color', '#000');
		    	$('.our-sponsers img').css('filter', 'invert(0)');
		    	$('.about .heading, .sponsers, .requestDemo, .contact .heading').removeClass('changeColor');
		    	$('.dark-light').css('color', '#fe5000').removeClass('stopShadow');

		    				/*Dark Mode*/
		    }else{

        		$('.about, .sponsers, .requestDemo, .contact').addClass('changeBack');
        		$('.copyright').css('background-color', '#111');
        		$('.our-sponsers img').css('filter', 'invert(1)');
        		$('.about .heading, .sponsers, .requestDemo, .contact .heading').addClass('changeColor');
        		$('.dark-light').css('color', '#FFF').addClass('stopShadow');
		    }
    	});
	});

	//----------- Trigger To Top Button

	$(window).scroll(function() {
	    if ($(this).scrollTop()) {
	        $('#toTop').fadeIn();
	    } else {
	        $('#toTop').fadeOut();
	    }
	});

	$("#toTop").click(function () {
	   //1 second of animation time
	   //html works for FFX but not Chrome
	   //body works for Chrome but not FFX
	   //This strange selector seems to work universally
	   $("html, body").animate({scrollTop: 0}, 40);
	});


						/*End bu.php Script*/