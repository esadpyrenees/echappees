<!-- appel des différents snippet -->
<?php snippet('header') ?>
<!-- appel du snippet pour styler l'impression de l'article -->
<?php snippet('print') ?>


<!-- menu numero et à propos -->
<?php snippet('menu') ?>
<!-- logotype echappées -->
<!-- position fixe -->
<?php snippet('logotype') ?>

<!-- <div id="gallery-overlay"></div> -->
<h2 id="echappees-numero">
    <!-- On vient trouver le dernier numéro automatiquement -->
    Nº <?php echo $page->parent()->number(); ?>
</h2>
<!-- 'couverture' coloré de l'article -->
<div id="couverture" class="Degrade">
    <!-- Contenu de la 'couverture' -->
    <div id="container_titre">
        <div id="titre">

            <h2 class="titre_ilalic">
                <?php echo smartypants($page->title()) ?>
            </h2>

            <?php if($page->NUMERO_DATE()->text()->length() > 0): ?>
                <p><?php echo $page->NUMERO_DATE() ?></p>
            <?php endif ?>

            <?php if($page->title_note()->text()->length() > 0): ?>
            <div>
                <p><?php echo $page->title_note()->kirbytext() ?></p>
            </div>
            <?php endif ?>
        </div>
    </div>
    

    <div id="information" class="espace_article">    
        <!--MENU META = métadonnées du contenu de l'article-->        
        <div id="meta">
            <ul class="menu_meta">
                <li><a href="#auteur" class="selected">Auteur</a></li>

                <?php if($page->ARTICLE_interviewer()->text()->length() > 0): ?>
                    <li><a href="#interviewer"> interviewer(s) </a></li>
                <?php endif ?>

                <?php if($page->ARTICLE_KEYWORD()->text()->length() > 0): ?>
                    <li><a href="#cles">Mots-clés</a></li>
                <?php endif ?>

                <?php if($page->ARTICLE_DOMAINE()->text()->length() > 0): ?>
                    <li><a href="#domaine">Domaine</a></li>
                <?php endif ?>

                <?php if($page->PDF()->text()->length() > 0): ?>
                    <li><a href="#pdf">PDF</a></li>
                <?php endif ?>

            </ul>
            <div id="menu_article_contenu">
                <div id="auteur"> 
                    <!-- on traite tous les auteurs dans la structure -->
                    <?php foreach($page->ARTICLE_AUTEUR()->toStructure() as $element): ?>
                    <!-- on recherche la page de l'auteur et on la met dans une variable -->
                        <?php $page_auteur = $site->find('apropos')->children()->find($element->auteur_uid()) ?>

                        <div class="toggle" id="<?php echo $page_auteur->uid() ?>">
                            <div class="less">
                                <a class="button-read-more button-read" href="#read">
                                    <p><?php echo $page_auteur->title()->html() ?></p>
                                </a>
                            </div>

                            <div class="more">
                                <p> <?php echo $page_auteur->text_bio()->kirbytext() ?></p>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div> 

                <div id="interviewer"> 
                    <!-- on traite tous les auteurs dans la structure -->
                    <?php foreach($page->ARTICLE_interviewer()->toStructure() as $element): ?>
                    <!-- on recherche la page de l'auteur et on la met dans une variable -->
                        <?php $page_auteur = $site->find('apropos')->children()->find($element->auteur_uid()) ?>

                        <div class="toggle" id="<?php echo $page_auteur->uid() ?>">
                            <div class="less">
                                <a class="button-read-more button-read" href="#read">
                                    <p><?php echo $page_auteur->title()->html() ?></p>
                                </a>
                                <a class="button-read-less button-read" href="#read">
                                    <p id="red"><?php echo $page_auteur->title()->html() ?></p>
                                </a>                         
                            </div>

                            <div class="more">
                                <p> <?php echo smartypants($page_auteur->text_bio()->kirbytext()) ?></p>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
                
                <div id="cles">
                    <p>
                        <?php echo $page->ARTICLE_KEYWORD() ?>
                    </p> 
                </div>
                
                <div id="domaine">
                    <p>
                        <?php echo $page->ARTICLE_DOMAINE() ?>
                    </p> 
                </div>
                <div id="pdf">
                    <p>
                        <?php echo $page->PDF()->kirbytext() ?>
                    </p> 
                </div>                
            </div>    
        </div>
        <!--/#meta -->        

        <!-- Chapeau de la redac -->
        <?php if($page->ARTICLE_CHAPEAU_REDACTION()->text()->length() > 0): ?>
            <div id="edito">
               <?php echo smartypants($page->ARTICLE_CHAPEAU_REDACTION()->kirbytext())?>
            </div>
            <h4 id="marge_redaction">– La rédaction –</h4>
        <?php endif ?>
        
    </div>
    <!--/#information -->        
</div>
<!--/#couverture -->  
     

<!-- Contenus article -->
<article class="no-layout" id="liens-orange">

    <!-- Article + gallery -->
    <div id="articleAndGallery">

        <?php snippet('galerie') ?>

        <!-- Chapeau de l'auteur -->
        <?php if($page->ARTICLE_CHAPEAU_AUTEUR()->text()->length() > 0): ?>
            <div id="chapeau_auteur"  class="memecolonnequunarticle">
                <?php echo smartypants($page->ARTICLE_CHAPEAU_AUTEUR()->kirbytext()) ?>
            </div>
        <?php endif ?>
        
        <div id="text_article" class="memecolonnequunarticle">
            <?php echo smartypants($page->ARTICLE_TEXT()->kirbytext()) ?>
        </div>
    </div>
    



    <!-- PRINT : Notes -->
    <div class="print-me" id="note_print">
        <?php echo $page->ARTICLE_CHAPEAU_REDACTION_NOTE()->kirbytext() ?>
    </div>

    <div class="print-me" id="note_print">
        <?php echo $page->ARTICLE_NOTE()->kirbytext() ?>
    </div>

    <!-- Menu Meta (orange) en FIN d'article -->
    <div id="meta2" class="memecolonnequunarticle">
        <ul class="menu_meta">
            <li><a href="#citer_article" class="selected">Citer cet article</a></li>

            <?php if($page->ARTICLE_BIBLIO()->text()->length() > 0): ?>
                <li><a href="#biblio">Bibliographie</a></li>
            <?php endif ?>

            <?php if($page->ARTICLE_sito()->text()->length() > 0): ?>
                <li><a href="#sito">Sitographie</a></li>
            <?php endif ?>

            <?php if($page->ARTICLE_RESUME()->text()->length() > 0): ?>
                <li><a href="#abstract">Resumé</a></li>
            <?php endif ?>

            <li><a href="#" onclick="javascript:window.print()">Imprimer</a></li>
        </ul>


        <div id="menu_article_contenu">
            <div id="citer_article">
                <h4>
                    <?php echo $page->title()->kirbytextSansP() ?><br>
                    <?php echo $page->nom_auteur()->kirbytextSansP() ?>
                </h4>
                <?php echo $page->ARTICLE_DATE()->kirbytext() ?>
                <?php echo $page->ARTICLE_CHAPEAU_REDACTION()->kirbytext() ?>
                <p><?php echo $page->url() ?></p>
            </div>

            <div id="biblio">
                <?php echo $page->ARTICLE_BIBLIO()->kirbytext() ?>
            </div>

            <div id="sito">
                <?php echo $page->ARTICLE_sito()->kirbytext() ?>
            </div>

            <div id="abstract">
                <?php echo $page->ARTICLE_RESUME()->kirbytext() ?>
            </div>
        </div>    

    </div>

    <!-- Articles reliés (style = sommaire) -->
    <?php if($page->ARTICLE_RELIE()->toStructure()->count() > 0): ?>
        
        <div id="article_relie" class="memecolonnequunarticle">

            <?php foreach($page->ARTICLE_RELIE()->toStructure() as $element): ?>
                <?php if ($element->article_relie_titre_uid()->text() != ""): ?>
                <div class="float">  
                        <?php List($uid_numero, $uid_article) = explode('/', $element->article_relie_titre_uid()->text());
                            $page_liee = $site->find('numeros')->children()->find($uid_numero)->children()->find($uid_article) ?>
                    <a id="article_sommaire_titre" href="<?php echo $page_liee->url() ?>"><?php echo $page_liee->title() ?></a>
                </div>    
                <?php endif ?>
            <?php endforeach ?>
        </div>

    <?php endif ?>

</article>

<section class="no-layout" id="liens-orange">
    <div id="prevNext"  class="memecolonnequunarticle">
        <?php snippet('prevNext') ?>
    </div>
</section>

    <?php snippet('footer') ?>