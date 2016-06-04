//VOLET
	// fonction pour les volet menu: sommaire, à propos, numéros
	function displayMenu(idMenu) 
	{
		// Si on clique sur le bouton du menu deja visible
		if (document.getElementById(idMenu).className.match('visibleMenu'))
		{
			// on le cache 
			hideMenu(idMenu);
			// utilisé pour les autres elements que les menus
			//$('#menu-overlay').removeClass('visible');
		}
		// sinon, on affiche le menu demandé et on cache tous les autres
		else
		{
			var liste_menus = document.getElementsByClassName('menu');

			for (var i = 0; i < liste_menus.length; i = i + 1) 
			{
				if (liste_menus[i].id == idMenu)
				{
					// on affiche le volet
					liste_menus[i].classList.add('visibleMenu');
					// utilisé pour les autres elements que les menus
					//$('#menu-overlay').addClass('visible');
				}
				else
				{
					// On cache le volet
					liste_menus[i].classList.remove('visibleMenu');
				}
			}
		}
	}

	function hideMenu(idMenu) 
	{
		document.getElementById(idMenu).classList.remove('visibleMenu');
	}


	function ShowHideID(id) 
	{
		if (document.getElementById(id).className.match('visible'))
		{
			document.getElementById(id).classList.remove('visible');
		}
		else
		{
			document.getElementById(id).classList.add('visible');
		}
	}

	// fonction pour le menu volet, pour que le menu actif reste souligné
	function underlineBtnMenu(idBtn) 
	{
		if (document.getElementById(idBtn).className.match('bottomBorder'))
		{
			noBottomBorder(idBtn);
		}
		else
		{
			var liste_btn = document.getElementsByClassName('btnMenu');

			for (var i = 0; i < liste_btn.length; i = i + 1) 
			{
				if (liste_btn[i].id == idBtn)
				{
					document.getElementById(liste_btn[i].id).classList.add('bottomBorder');
				}
				else
				{
					noBottomBorder(liste_btn[i].id);
				}
			}
		}
	}
	
	function noBottomBorder(id) 
	{
		document.getElementById(id).classList.remove('bottomBorder');
	}


	function BottomBorderID(id) 
	{
		if (document.getElementById(id).className.match('bottomBorderGalerie'))
		{
			document.getElementById(id).classList.remove('bottomBorderGalerie');
		}
		else
		{
			document.getElementById(id).classList.add('bottomBorderGalerie');
		}
	}


	// fonction pour les volet images / galerie
	function display_volet_img(idMenu) 
	{
		// Si on clique sur le bouton du menu deja visible
		if (document.getElementById(idMenu).className.match('visible_volet_img'))
		{
			// on ne fait rien
			hide_volet_img(idMenu);
		}
		// sinon, on affiche le menu demandé
		else
		{
			document.getElementById(idMenu).classList.add('visible_volet_img');
		}
	}

	function hide_volet_img(idMenu) 
	{
		document.getElementById(idMenu).classList.remove('visible_volet_img');
	}

// fonction pour les menu metadonnées des zones introduction

	$('.menu_meta').on('click', 'a', function(event){
			event.preventDefault();
			var cible = $(this).attr('href');
			var $cible = $(cible);
			// affiche le div cible, masque les autres
			$cible.siblings().hide();
			$cible.show();
			// affecte au lien sur lequel on a cliqué la class selected, 
			// l'enlève des autres liens
			$(this).parent().siblings().find('a').removeClass('selected');
			$(this).addClass('selected');

		})



// fonction pour faire disparaitre l'identité
	$(function(){
			
		var $body = $('body'),
			wwidth = $(window).width(),
			wheight = $(window).height();

		$(window).scroll(
			function() {
				if($(window).scrollTop() > 200){
		   			$body.addClass('scrolled');		   			
		        }  else {	
		            $body.removeClass('scrolled');
		        }
		    }
		);

		// STICKY KIT
	    $("#logotype_home").stick_in_parent();
	    
	    if(wwidth > 980) {	    	
	    	$("#container_titre").stick_in_parent({
	    		'offset_top':100
	    	});	    	
	    }
	    if(wwidth > 700) {	    	
	    	var vh = $(window).height()/100;
			$('#sideGallery').stick_in_parent({
	    		'offset_top':10 * vh
	    	});
		};

		
		$('.pleinEcran').height(wheight + Math.random() * wheight );
		var transormValue = Math.random() * wheight; 

		// $('.pleinEcran').css({
		// 	'-webkit-transform' : 'translateY(-' + transormValue + 'px)',
		// 	'-moz-transform'    : 'translateY(-' + transormValue + 'px)',
		// 	'-ms-transform'     : 'translateY(-' + transormValue + 'px)',
		// 	'-o-transform'      : 'translateY(-' + transormValue + 'px)',
		// 	'transform'         : 'translateY(-' + transormValue + 'px)'
		// })




		$(".container_titre_propos").stick_in_parent();


		// gallery test
		$('#sideGallery.hidden').on('click', function(){
			$('body').addClass('noscroll')
			$('#overlayGallery').addClass('visible');
			$(this).removeClass('hidden is_stuck');
			
			$(this).trigger("sticky_kit:detach");
			
		})

		$('.closeGallery').on('click', function(e){
			e.stopPropagation()
			console.log('yo')
			$('body').removeClass('noscroll')
			$('#sideGallery').addClass('hidden');
			$('#overlayGallery').removeClass('visible');
			$('#sideGallery').stick_in_parent({
	    		'offset_top':10 * vh
	    	});
		})

		$('#overlayGallery').on('click', function(){
			$('body').removeClass('noscroll')
			$('#sideGallery').addClass('hidden');
			$(this).removeClass('visible');
			$('#sideGallery').stick_in_parent({
	    		'offset_top':10 * vh
	    	});
		})


		/// gallery originale
		

		$('.gallery').each(function(){
			var $self = $(this);
			$self.stick_in_parent({
				'offset_top':Math.round(wheight*.1) 
			})
			
			$self.find('img').css({
				'height':Math.round(wheight*.8)
			})
			$self.css({
				'height':Math.round(wheight*.8)
			})

			$self.on('click', function(e){

				if(!$self.hasClass('opened')) {
					$self.addClass('opened');
					$('#gallery-overlay').addClass('visible');
				}
				
			})


		})

		$(".gallery > figure:gt(0)").hide();

		$('.gallery > figure').on('click', function(){
			if( $(this).parent().hasClass('opened')) {
					
				$(this).fadeOut(200)
				    .next()
				    .fadeIn(200)
				    .end()
				    .appendTo($(this).parent());
			}
		})


		$('#gallery-overlay').on('click', function(){
			$('.gallery').removeClass('opened');
			$(this).removeClass('visible');
		})

		$('#menu-overlay').on('click', function(){
			$('.menu').removeClass('visibleMenu')
		})


		// INLINE NOTES
		$('.footnote_call').on("click", function(e){
			e.preventDefault();
			$(this).next().toggleClass('visible')
		})



		// click dans un lien du menu :cacher le menu
		$('.menu a').on('click', function(event){
			var s = setTimeout(function(){
				$('.menu').removeClass('visibleMenu')
			}, 150)
		})


	});
    	

    // Responsive video embed

    // Find all YouTube videos
	var $allVideos = $("iframe");
	$allVideos.each(function(){
		$(this).wrap('<div class="videoWrapper"></div>');
	})



// POUR LES NOTES

/*
|-----------------------------------------------------------------------
|  jQuery Multiple Toggle Script by Matt - www.skyminds.net
|-----------------------------------------------------------------------
|
| Affiche et cache le contenu de blocs multiples. Bloc après le texte.
|
*/
jQuery(document).ready(function() {
    
    jQuery('.button-read-more').click(function () {
        $(this).parent().toggleClass('active');     
        $(".container_titre_propos").trigger("sticky_kit:recalc");   
    });
    

});


//IMAGE HOME random

$('#image_couverture_home').click(function() {
    var docHeight = $(document).height(),
        docWidth = $(document).width(),
        $div = $('#image_couverture_home'),
        divWidth = $div.width(),
        divHeight = $div.height(),
        heightMax = docHeight - divHeight,
        widthMax = docWidth - divWidth;

    $div.css({
        left: Math.floor( Math.random() * widthMax ),
        top: Math.floor( Math.random() * heightMax )
    });
});