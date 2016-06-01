<!-- on appel le header -->
<?php snippet('header') ?>
	
	<!-- pleinEcran: il prend tout l'espace du navigateur positionnement est fixe -->
	<!-- Degrade: indique que le degradé va du orange au violet -->
	<div class="pleinEcran Degrade"></div> 

	<!-- identité de l'ESA des Pyrénées -->
	<!-- ils sont rattachés a un script qui au scroll fait disparaitre cette identité -->
	<div id="esa-e" class="id">É</div>
	<div id="esa-s" class="id">S</div>
	<div id="esa-a" class="id">A</div>
	<div id="esa-p" class="id">
		P
		<br>
		y
		<br>
		r
		<br>
		é
		<br>
		n
		<br>
		é
		<br>
		e
		<br>
		s
	</div>
	
	<!-- bandeau-blanc: a une position fixe -->
	<!--  et un dégradé qui va du transparent/blanc/transparent -->
	<div id="bandeau-blanc"></div>

	<!-- on appel le menu 'numero' et le menu 'A propos' -->
	<?php snippet('menu') ?>

	

	<div id="information_home" >
		<h1 class="texte_centre" id="logotype_home">
			<a href="home">échappées</a>
		</h1>
	

		<!-- nouveau_numero: est le titre du dernier numéro de la revue -->

		<div id="container_nouveau_numero">
			<div id="nouveau_numero">
				<!-- on mémorise "dernier numero" dans une variable que l'on va reutiliser ensuite -->
				<?php $dernier_numero = $site->find('numeros')->children()->visible()->last(); ?>

				<!-- recupere l'URL du premier enfant visible de la page numéro -->
				<h2 class="texte_centre" id="titre_ilalic">
					<a  href="<?php echo $dernier_numero->url(); ?>">
						<!-- On vient trouver le dernier numéro automatiquement -->
						Nº <?php echo $dernier_numero->number(); ?>
						<br>
						<!-- le titre -->
						<?php echo $dernier_numero->title(); ?>
					</a>
				</h2>
				<!-- la date -->
				<div id="date_article" ><?php echo $dernier_numero->NUMERO_DATE() ?></div>
				
			</div>
		</div>

		<div id="actualite">
			<?php if($page->ACCUEIL_ACTUALITE()->text()->length() > 0): ?>
				<h3 class="texte_centre">Actualités</h3>
			<?php endif ?>
			
			<?php foreach($page->ACCUEIL_ACTUALITE()->toStructure() as $actualite): ?>
			   	<p class="actualite" href="<?php echo $actualite->url(); ?>">
			      	<?php echo smartypants($actualite->actualite_contenu()->kirbytext()); ?>
			    </p>
			    <div id="ole">~</div>
			<?php endforeach ?>

        
		</div>

		<div id="conseil">
		
        	<?php if($page->ACCUEIL_CONSEIL()->text()->length() > 0): ?>
				<h3 class="texte_centre">Conseils de lecture</h3>
			<?php endif ?>

			<?php foreach($page->ACCUEIL_CONSEIL()->toStructure() as $conseil): ?>
			    <a class="conseil_lecture" href="<?php echo $conseil->url() ?>">
			      <?php echo smartypants($conseil->conseil_contenu()->kirbytext()); ?>
			    </a>
			 	<div id="ole">~</div>
			<?php endforeach ?>
		</div>

	</div>
	
<!-- </main> -->
<?php snippet('footer') ?>