
<!-- <main class="main" role="main"> -->
<!-- identité de l'ecole -->
<?php snippet('header') ?>
<?php snippet('menu') ?>
<?php snippet('logotype') ?>
<div class="degrade_propos" id="a_propos">

	<div id="liens-orange">
		<div id="a_propos_1">
			<div class="container_titre_propos">
				<h2  class="titre_propos">Présentation</h2>
			</div>
			<div class="information_propos" >
		        <p><?php echo $page->APROPOS_PRESENTATION()->kirbytext() ?></p>
		    </div>
	    </div>

<!-- comité éditorial -->
	
	    <div id="a_propos_2">
	    	<div class="container_titre_propos">
	  			<h2 class="titre_propos">Comité éditorial</h2>
	  		</div>

			<div class="information_propos">
			  	<?php foreach($page->APROPOS_COMITE()->toStructure() as $comite): ?>

					<div id="motif" href="<?php echo $comite->url() ?>">
						<h4>
							<div id="comite_numero">
							<h3><?php echo $comite->numero_revue()->html() ?></h3>
							</div>
							<div id="comite_titre">
							<h3><?php echo $comite->titre_numero()->html() ?></h3></div>
						</h4>

						

        				<?php if($comite->nom_responsable()->text()->length() > 0): ?>
						<div class="texte_comite">
							<h4>Responsable(s) de la publication</h4>
							<?php echo $comite->nom_responsable()->html() ?>
						</div>
						<?php endif ?>
						
						<?php if($comite->conseils_scientifiques()->text()->length() > 0): ?>
							<div class="texte_comite">
								<h4>Conseils scientifiques</h4>
								<?php echo $comite->conseils_scientifiques()->html() ?>
							</div>
						<?php endif ?>

						<?php if($comite->coordination_revue()->text()->length() > 0): ?>
						<div class="texte_comite">
							<h4>Coordination de la revue</h4>
							<?php echo $comite->coordination_revue()->html() ?>
						</div>
						<?php endif ?>

						<?php if($comite->comite_redaction()->text()->length() > 0): ?>
						<div class="texte_comite">
							<h4>Comité de rédaction</h4>
							<?php echo $comite->comite_redaction()->html() ?>
						</div>
						<?php endif ?>

						<?php if($comite->design_graphique()->text()->length() > 0): ?>
						<div class="texte_comite">
							<h4>Design graphique</h4>
							<?php echo $comite->design_graphique()->html() ?>
						</div>
						<?php endif ?>
				    </div>
					
					<div id="ole_propos">~</div>
			  
				<?php endforeach ?>
		    </div>
		</div>

	<!-- Les auteurs -->
		<div id="a_propos_3">
			<div class="container_titre_propos">
	  			<h2  class="titre_propos">Auteurs</h2>
	  		</div>

			<div class="information_propos" >
		        <?php foreach($page->children() as $auteur): ?> 

	                <div class="toggle" id="<?php echo $auteur->uid() ?>">
	                    <div class="less">
	                        <a class="button-read-more button-read" href="#read"><h3><?php echo $auteur->title()->html() ?></h3></a>
	                    </div>

	                    <div class="more">
	                        <?php echo $auteur->text_bio()->kirbytext() ?>

	                        <?php if($auteur->text_contact()->text()->length() > 0): ?>
	                        	<h4>Contact mail </h4>
	                        	<?php echo $auteur->text_contact()->kirbytext() ?>
	                        	
            				<?php endif ?>

            				<?php if($auteur->text_liens()->text()->length() > 0): ?>
	                        	<h4>Bibliographie / sitographie  </h4>
	                        	<?php echo $auteur->text_liens()->kirbytext() ?>
            				<?php endif ?>
	                        
	                        <?php if($auteur->text_liste_articles()->text()->length() > 0): ?>
	                        	<h4>Article(s) rédigé(s) </h4>
	                        	<?php echo $auteur->text_liste_articles()->kirbytext() ?>
            				<?php endif ?>
	                        
	                   
	                    </div>
	                </div>
	            <?php endforeach ?>
		    </div>
		</div>

		<div id="a_propos_4">
			<?php if($page->APROPOS_DESIGN()->text()->length() > 0): ?>
				<div class="container_titre_propos">
		  			<h2  class="titre_propos">Design</h2>
		  		</div>
	  		<?php endif ?>

			<div class="information_propos" >
		        <p><?php echo $page->APROPOS_DESIGN()->kirbytext() ?></p>
		    </div>
		</div>

	<!-- partenaires logos -->
		<div id="a_propos_5">
			<div class="container_titre_propos">
	  			<h2  class="titre_propos">Partenaires</h2>
	  		</div>
			<div class="information_propos" >
				<div id="partenaire_image">
					<p><?php echo $page->APROPOS_PARTENAIRE()->kirbytext() ?></p>
				</div>
		    </div>
		</div>

	<!-- Contacts	 -->
		<div id="a_propos_6">
			<div class="container_titre_propos">
	  		<h2  class="titre_propos">Contacts</h2>
	  		</div>
			<div class="information_propos" >
				<!-- renseignements -->
				<div class="margin_contact">
					<h3>Renseignements</h3>
					<?php echo $page->RENSEIGNEMENT_REVUE()->kirbytext() ?>
				</div>
				<div id="ole_propos">~</div>

				<!-- pau -->
	  			<div class="margin_contact">
					  	<?php foreach($page->ADRESSE_PAU()->toStructure() as $adressepau): ?>
							<div href="<?php echo $adressepau->url() ?>">
								<h3>Site de Pau et siège social</h3>
								<p><?php echo $adressepau->name()->html() ?>
								<?php echo $adressepau->street()->html() ?>
								<?php echo $adressepau->zip()->html() ?><?php echo $adressepau->city()->html() ?></p>
						    </div>
					  	<?php endforeach ?>
				  	
			        <p>Tel. : <?php echo $page->TELEPHONE_PAU()->html() ?></p>
			        <a class="mail" href="mailto:<?php echo $page->MAIL_PAU()->html() ?>"><?php echo $page->MAIL_PAU()->kirbytext() ?></a> 
				</div>
				<div id="ole_propos">~</div>
	  			
	  			<!-- tarbes -->
	  			<div>
		  			
					  	<?php foreach($page->ADRESSE_TARBES()->toStructure() as $adressetarbes): ?>
							<div href="<?php echo $adressetarbes->url() ?>">
								<h3>Site de Tarbes</h3>
								<p><?php echo $adressetarbes->name()->html() ?>
								<?php echo $adressetarbes->street()->html() ?>
								<?php echo $adressetarbes->zip()->html() ?><?php echo $adressetarbes->city()->html() ?></p>
						    </div>
					  	<?php endforeach ?>
					
			        <p>Tel. : <?php echo $page->TELEPHONE_TARBES()->html() ?></p>
			        <a class="mail" href="mailto:<?php echo $page->MAIL_TARBES()->html() ?>"><?php echo $page->MAIL_TARBES()->kirbytext() ?></a> 
				</div>
		    </div>
		</div>

		<!-- Crédits et remerciements des différents numéros -->
		<div id="a_propos_7">
			<?php if($page->CREDIT()->text()->length() > 0): ?>
				<div class="container_titre_propos">
		  			<h2  class="titre_propos">Crédits</h2>
		  		</div>
	  		<?php endif ?>
			<div class="information_propos" >
				<?php if($page->CREDIT()->text()->length() > 0): ?>
					<div>
						<h3>Crédits</h3>
						<?php echo $page->CREDIT()->kirbytext() ?>
						<div id="ole_propos">~</div>
					</div>
				<?php endif ?>
				
				<div>
					<?php if($page->MERCI()->text()->length() > 0): ?>
						<h3>Remerciements</h3>
						<?php echo $page->MERCI()->kirbytext() ?>
					<div id="ole_propos">~</div>
					<?php endif ?>
				</div>

			</div>
		</div>
	</div>
</div>
	
<!-- APPEL FOOTER -->
<?php snippet('footer') ?>
