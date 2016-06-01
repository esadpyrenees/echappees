
<!-- ICI NUMERO DU DERNIER NUMERO POUR L'ÉCRAN ET LE PRINT -->
    <!-- on mémorise "dernier numero" dans une variable que l'on va reutiliser ensuite -->
			<?php $dernier_numero = $site->find('numeros')->children()->visible()->first(); ?>
    <!-- recupere l'URL du premier enfant visible de la page numéro -->
	<h2 id="echappees-numero">
		<!-- On vient trouver le dernier numéro automatiquement -->
		Nº <?php echo $dernier_numero->number(); ?>
    </h2>

<!-- ICI TITRE DU DERNIER NUMERO POUR LE PRINT UNIQUEMENT -->
    <!-- on mémorise "dernier numero" dans une variable que l'on va reutiliser ensuite -->
	<?php $dernier_numero_titre = $site->find('numeros')->children()->visible()->first(); ?>
    <!-- recupere l'URL du premier enfant visible de la page numéro -->
	<div class= "print-me">
	<p id="echappees-numero-titre"><a href="<?php echo $dernier_numero_titre->url(); ?>">
		<!-- On vient trouver le dernier numéro automatiquement -->
		<?php echo $dernier_numero_titre->title(); ?></a>
    </p>
	</div>
