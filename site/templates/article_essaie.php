<!-- appel des différents snippet -->
<?php snippet('header') ?>
<!-- appel du snippet pour styler l'impression de l'article -->
<?php snippet('print') ?>
<!-- menu numero et à propos -->
<?php snippet('menu') ?>
<!-- logotype echappées -->
<!-- position fixe -->
<?php snippet('logotype') ?>

<h2 id="echappees-numero">
    <!-- On vient trouver le dernier numéro automatiquement -->
    Nº <?php echo $page->parent()->number(); ?>
</h2>

<!-- degrade: DEGRADE DU ORANGE AU VIOLET -->
<!-- couverture: pour le moment pas de style -->
<div id="essaie">
    <div id="couverture">
        <!-- Quand on passe en H2 ça casse la nav dans menu meta -->
        <div id="container_titre_essaie">
            <div id="titre_essaie">
                <h2>
                    <a href="<?php echo $page->url() ?>"><?php echo $page->title() ?></a>
                </h2>
    
                <?php if($page->title_note()->text()->length() > 0): ?>
                    <div>
                        <p><?php echo $page->title_note()->kirbytext() ?></p>
                    </div>
                <?php endif ?>
    
            </div>
        </div>

        <article>
            <?php echo $page->ARTICLEVISUEL_MEDIAS()->kirbytext() ?>
        
   
                <!-- petit menu permettant de donner les métadonnées du contenu du numéro -->
                <!--MENU META -->        
                <!-- meta: bordure blanche -->
                <div id="meta3">
                    <ul class="menu_meta">
                        <li><a href="#citer_article" class="selected">Citer cet article</a></li>

                        <?php if($page->ARTICLEVISUEL_AUTEUR()->text()->length() > 0): ?>
                            <li><a href="#auteur">Auteur</a></li>
                        <?php endif ?>

                        <?php if($page->ARTICLEVISUEL_BIBLIO()->text()->length() > 0): ?>
                            <li><a href="#biblio">Bibliographie</a></li>
                        <?php endif ?>

                        <?php if($page->ARTICLEVISUEL_SITO()->text()->length() > 0): ?>
                            <li><a href="#sito">Sitographie</a></li>
                        <?php endif ?>

                        <?php if($page->ARTICLEVISUEL_KEYWORD()->text()->length() > 0): ?>
                            <li><a href="#cles">Mots-clés</a></li>
                        <?php endif ?>

                        <?php if($page->ARTICLEVISUEL_DOMAINE()->text()->length() > 0): ?>
                            <li><a href="#domaine">Domaine</a></li>
                        <?php endif ?>

                        <?php if($page->ARTICLEVISUEL_PDF()->text()->length() > 0): ?>
                            <li><a href="#resumer">PDF</a></li>
                        <?php endif ?>
                        
                        <li><a href="#" onclick="javascript:window.print()">Imprimer</a></li>
                    </ul>




                    <div id="menu_article_contenu">
                        <div id="citer_article">
                            <h4><?php echo $page->title()->kirbytextSansP() ?><br>
                                <?php echo $page->nom_auteur_visuel()->kirbytextSansP() ?></h4>
                            <?php echo $page->ARTICLEVISUEL_DATE()->kirbytext() ?>
                            <p><?php echo $page->url() ?></p>
                        </div> 
                        
                        <div id="auteur"> 
                            <!-- on traite tous les auteurs dans la structure -->
                            <?php foreach($page->ARTICLEVISUEL_AUTEUR()->toStructure() as $element): ?>
                            <!-- on recherche la page de l'auteur et on la met dans une variable -->
                                <?php $page_auteur = $site->find('apropos')->children()->find($element->auteur_uid()) ?>

                                <div class="toggle" id="<?php echo $page_auteur->uid() ?>">
                                    <div class="less">
                                        <a class="button-read-more button-read" href="#more>"><h4><?php echo $page_auteur->title()->html() ?></h4></a>                                        
                                    </div>

                                    <div class="more">
                                        <p> <?php echo $page_auteur->text_bio()->kirbytext() ?></p>
                                    </div>
                                </div>
                            <?php endforeach ?>
                        </div>

                        <div id="biblio">
                            <?php echo $page->ARTICLEVISUEL_BIBLIO()->kirbytext() ?>
                        </div>

                        <div id="sito">
                            <?php echo $page->ARTICLEVISUEL_SITO()->kirbytext() ?>
                        </div>

                        <div id="cles">
                            <?php echo $page->ARTICLEVISUEL_KEYWORD()->kirbytext() ?>
                        </div>

                        <div id="domaine">
                            <?php echo $page->ARTICLEVISUEL_DOMAINE()->kirbytext() ?>
                        </div>

                        <div id="resumer">
                            <?php echo $page->ARTICLEVISUEL_PDF()->kirbytext() ?>
                        </div>                
                    </div>    
                </div>



                <!-- Articles reliés (style = sommaire) -->
                <?php if($page->ARTICLE_RELIE()->toStructure()->count() > 0): ?>
                    <div id="article_relie" class="memecolonnequunarticle">
                        <?php foreach($page->ARTICLE_RELIE()->toStructure() as $relie): ?>
                            <div class="float">     
                                <a id="article_sommaire_titre" href="<?php echo $relie->url() ?>">
                                    <?php echo $relie->article_relie_titre()->html() ?>
                                </a>
                            </div>    
                        <?php endforeach ?>
                    </div>
                <?php endif ?>

        </article>

        <section class="no-layout">
            <div id="prevNext"  class="memecolonnequunarticle">
                <?php snippet('prevNext') ?>
            </div>
        </section>

    </div>
</div>

<?php snippet('footer') ?>