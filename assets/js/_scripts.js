$(function(){


	var $logo = $('#logotype');


	$(window).debounce("scroll", function() { 
		if ($(window).scrollTop() > 10){
			$logo.addClass('mini');
		} else {
			$logo.removeClass('mini');
		}
	}, 100);


	$('#interrupteur').on('click', function(){
		$('body').toggleClass('sun');


		// Determine si 'body' contient la classe 'sun'
		var isSun = $('body').hasClass('sun');
		// Met à jour le cookie
		if(isSun) {
			// console.log('no sun');
			effacerCookie('memoDark');
		} else {
			// console.log('is sun');
			creerCookie('memoDark', "oui", 7);
		}
	})


	

	// sous menu page article
	$('#menu_article a').on('click', function(event){
		var cible = $(this).attr('href');
		var $cible = $(cible);

		if(cible[0]=='#'){ 
			event.preventDefault();
			
			// affiche le div cible, masque les autres
			$cible.siblings().hide();
			$cible.show();
			// affecte au lien sur lequel on a cliqué la class selected, 
			// l'enlève des autres liens
			$(this).parent().siblings().find('a').removeClass('selected');
			$(this).addClass('selected')
		}

	})

	// sous menu page information
	$('#menu_information a').on('click', function(event){
		event.preventDefault();
		var cible = $(this).attr('href');
		var $cible = $(cible);
		// affiche le div cible, masque les autres
		$cible.siblings().hide();
		$cible.show();
		// affecte au lien sur lequel on a cliqué la class selected, 
		// l'enlève des autres liens
		$(this).parent().siblings().find('a').removeClass('selected');
		$(this).addClass('selected')

	})

})

var $overlay = $('<div id="overlay"></div>')
$('body').append($overlay);

// JS pour cacher le menu ou le rendre visible
$('#burgerMenu').on('click', function(){
	toggleMenu();
})

$overlay.on('click', function(){
	toggleMenu();
})

function toggleMenu(){

	$('#cssmenu').toggleClass('visible');
	$('body').toggleClass('opened_menu');
}
