<!-- <main class="main" role="main"> -->
<!-- identité de l'ecole -->
<?php snippet('header') ?>
<?php snippet('logotype') ?>
<?php snippet('menu') ?>


	<article id="liens-orange">

		<header>
		  <h3 class="auteur_fiche"><?php echo $page->title()->html() ?></h3>
		</header>
		
		<div id="texte">
									
			<?php echo $page->text_bio()->kirbytext() ?>
							
			<?php if($page->text_contact()->text()->length() > 0): ?>
				<h4>Contact mail :</h4>
				<?php echo $page->text_contact()->kirbytext();?>
			<?php endif ?>

			<?php if($page->text_liens()->text()->length() > 0): ?>
				<h4>Site Internet : </h4>
				<?php echo $page->text_liens()->kirbytext();?>
			<?php endif ?>
			
			<?php if($page->text_liste_articles()->text()->length() > 0): ?>
				<h4>Article(s) rédigé(s) :</h4>
				<?php echo $page->text_liste_articles()->kirbytext();?>
			<?php endif ?>
			
		</div>
	</article>
 
    
<!-- APPEL FOOTER -->
<?php snippet('footer') ?>

