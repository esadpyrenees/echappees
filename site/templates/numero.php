<!-- appel des différents snippet -->
<?php snippet('header') ?>
<!-- menu numero et à propos -->
<?php snippet('menu') ?>

<!-- logotype echappées -->
<!-- position fixe -->
<?php snippet('logotype') ?>

<h2 id="echappees-numero">
    <!-- On vient trouver le dernier numéro automatiquement -->
    Nº <?php echo $page->number(); ?>
</h2>
<!-- degrade: DEGRADE DU ORANGE AU VIOLET -->
<div id="couverture" class="Degrade">
    <!-- image_couverture: passe l'image en noir et blanc avec une transparence  -->
  <div id="container_titre">
    <div id="titre">
      <h2 class="titre_ilalic">
        <?php echo $page->title() ?>
      </h2>
      <p><?php echo $page->NUMERO_DATE() ?></p>
    </div>
  </div>
    
  <div id="information" >    
    <div id="image_couverture">
      <!-- bluePrint: va chercher l'image -->
      <?php echo $page->IMAGE_COUV()->kirbytext() ?>
  </div>

      
    <div id="meta">
      <ul class="menu_meta">
          
        <?php if($page->nom_responsable_numero()->text()->length() > 0): ?>
          <li>
            <a href="#nom_responsable" class="selected">Responsable de la publication
            </a>
          </li>
        <?php endif ?>

        <?php if($page->conseils_scientifiques_numero()->text()->length() > 0): ?>
          <li>
            <a href="#conseils_scientifiques">Conseils scientifiques
            </a>
          </li>
        <?php endif ?>

        <?php if($page->coordination_revue_numero()->text()->length() > 0): ?>
          <li><a href="#coordination_numero">Coordination de la revue</a></li>
        <?php endif ?>

        <?php if($page->comite_redaction_numero()->text()->length() > 0): ?>
          <li><a href="#comite_redaction_numero">Comité de rédaction</a></li>
        <?php endif ?>

        <?php if($page->design_graphique_numero()->text()->length() > 0): ?>
          <li><a href="#design_graphique_numero">Design graphique</a></li>
        <?php endif ?>

        <li><a href="#auteurs">Auteurs</a></li>

        <?php if($page->NUMERO_KEYWORD()->text()->length() > 0): ?>
          <li><a href="#cles">Mots-clés</a></li>
        <?php endif ?>

        <?php if($page->NUMERO_DOMAINE()->text()->length() > 0): ?>
          <li><a href="#domaine">Domaine</a></li>
        <?php endif ?>

      </ul>

      <div id="menu_article_contenu">
        <!-- div contenant la liste des auteurs de tous les articles du numero -->

        <div id="nom_responsable">
          <p><?php echo $page->nom_responsable_numero()->kirbytext() ?></p>
        </div>    

        <div id="conseils_scientifiques">
          <p><?php echo $page->conseils_scientifiques_numero()->kirbytext() ?></p>
        </div>

        <div id="coordination_numero">
          <?php echo $page->coordination_revue_numero()->kirbytext() ?>
        </div>

        <div id="comite_redaction_numero">
          <?php echo $page->comite_redaction_numero()->kirbytext() ?>
        </div>

        <div id="design_graphique_numero">
          <?php echo $page->design_graphique_numero()->kirbytext() ?>
        </div> 
        
        <div id="cles">
          <p><?php echo $page->NUMERO_KEYWORD()->kirbytext() ?></p>
        </div>

        <div id="domaine">
          <p><?php echo $page->NUMERO_DOMAINE()->kirbytext() ?></p>
        </div>

        <!-- div contenant la liste des auteurs de tous les articles du numero -->
        <div id="auteurs">- 
        <!-- foreach sur les articles dans le numero -->
          <?php foreach($page->children() as $article): ?>
            <!-- foreach sur les elements dans la structure auteurs-->
            <?php foreach($article->ARTICLE_AUTEUR()->toStructure() as $element): ?>
              <!-- on recherche la page de l'auteur et on la met dans une variable -->
              <?php $page_auteur = $site->find('apropos')->children()->find($element->auteur_uid()) ?>

              <!-- /!\ Attention, si l'IUD est mauvais, cela créé un bug dans la page, elle devient statique /!\ -->

              <!-- le lien pointe vers la page de l'auteur -->
              <a href="<?php echo $page_auteur->url() ?>">
                  <!-- le tesxte affiché est le nom de l'auteur -->
                  <?php echo $page_auteur->title() ?>
              </a> - 
            <?php endforeach ?>
          <?php endforeach ?>
        </div>
      </div> 
    </div>

            <!-- APPEL DE L'EDITO -->
    <div id="edito">
      <h3>Éditorial</h3>
      <?php echo $page->EDITO_CONTENU()->kirbytext()?>
    </div>
  </div>
</div>


<!-- sommaire -->
<div id="liens-orange">
  <!-- div sommaire -->
  <div id="sommaire-page">
    <h3>Sommaire</h3>
    <!-- Appel du sommaire -->
      <?php snippet('sommaire')?>
  </div>
</div>

<!-- </main> -->
<?php snippet('footer') ?>