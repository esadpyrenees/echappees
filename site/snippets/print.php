<!--PRINT UNIQUEMENT titre du numero de l'article imprimé (sous le N°) -->
<div class= "print-me" >
	<div id="entete"> <!-- #entete exite pas dans css -->
			<div id="entete-print">
				    <div id="esa-echappees-print">
				    	<h1>échappées</h1>
				    	<p>Revue d'art et de design de l'École<br>supérieure d'art des Pyrénées — Pau Tarbes</p>
				    </div>

				    <div id="echappees-numero-print"> 
				    	<h1>Nº<?php echo $page->parent()->number(); ?></h1>
				    	<p><?php echo $page->parent()->title(); ?></p>
				    </div>
			</div>

			<div id="titre-print">
			    	<h2><?php echo $page->title()?></h2>

			    	<div id="float-print">
			    			<!-- pour article classique -->
				    		<p id="auteur-print"><?php echo $page->nom_auteur() ?></p>
				    		<p id="date-print"><?php echo $page->ARTICLE_DATE() ?></p>
				    		<!-- Pour article visuel -->
				    		<p id="auteur-print"><?php echo $page->nom_auteur_visuel() ?></p>
				    		<p id="date-print"><?php echo $page->ARTICLEVISUEL_DATE() ?></p>
			    	</div>
			</div>

			<div class="chapeau_size" id="edito-print">
		    	<?php echo $page->ARTICLE_CHAPEAU_REDACTION()->kirbytext() ?>
			</div>
			<?php if($page->ARTICLE_CHAPEAU_REDACTION()->text()->length() > 0): ?>
	        <p id="ole-print">~</p>
	    	<?php endif ?>
	</div>

	<div class="chapeau_size" id="chapeau-print">
		    <?php if($page->ARTICLE_CHAPEAU_AUTEUR()->text()->length() > 0): ?>
		    	<div id="chapeau-auteur-print">
		    		<?php echo $page->ARTICLE_CHAPEAU_AUTEUR()->kirbytext() ?>
		    	</div>
			<?php endif ?>

		    <?php if($page->CHAPEAU_NOTE_PRINT()->text()->length() > 0): ?>
		    	<div id="note_chapeau_print">
		    		<?php echo $page->CHAPEAU_NOTE_PRINT()->kirbytext() ?>
		    	</div>
			<?php endif ?>
	</div>

   	<?php if($page->ARTICLE_CHAPEAU_AUTEUR()->text()->length() > 0): ?>
   	<p id="ole-print">~</p>
    <?php endif ?>

	<div id="article_print">
			<?php echo $page->ARTICLE_TEXT()->kirbytext() ?>
			<div id="article_visuel"><?php echo $page->ARTICLEVISUEL_MEDIAS()->kirbytext() ?></div>

			<div id="note_print">
			<?php echo $page->ARTICLE_NOTE_PRINT()->kirbytext() ?>
			</div>
	</div>

	<div id="image_print">    
	        	<p id="ole-print">~</p>
			<?php if($page->ARTICLE_GALERIE()->images()->length() > 0): ?>
				<h3 id="titre_image_print">Iconographie de l'article</h3>
				<?php echo $page->ARTICLE_GALERIE()->kirbytext() ?>
			<?php endif ?>
	</div>


</div>




