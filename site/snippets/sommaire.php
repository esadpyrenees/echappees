<?php foreach($page->children() as $subpage): ?>
	<div class="float_negatif">
		<div class="float <?php echo $subpage->intendedTemplate() ?>"> 
		

		  <!-- titre de l'article -->
		  	<a href="<?php echo $subpage->url() ?>">
		    	<strong><?php echo html($subpage->title()) ?></strong>
		  	</a>
			<?php echo html($subpage->nom_auteur()) ?>
			<?php echo html($subpage->nom_auteur_visuel()) ?>	
		    
		</div>
	</div>
<?php endforeach ?>	              
	


