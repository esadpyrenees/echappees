<div id="main_menu">
    <?php 
        if($page->isDescendantOf( page('numeros') )): 
    ?>
        <div id="btnSommaire" class="btnMenu" onclick="displayMenu('menuSommaire');underlineBtnMenu('btnSommaire');">sommaire</div>
    <?php endif ?>

    <div id="btnNumero" class="btnMenu" onclick="displayMenu('menuNumero');underlineBtnMenu('btnNumero');">numéros</div>
    <div id="btnApropos" class="btnMenu" onclick="displayMenu('menuApropos');underlineBtnMenu('btnApropos');">à propos</div>
</div>


<nav id="menuApropos" class="menu">
    <div class="btn_fermer" onclick="hideMenu('menuApropos');noBottomBorder('btnApropos');">+</div>    
    <div class="contentMenu">
        <ul>
            <li><a href="<?php echo $site->url() ?>/apropos#a_propos_1">Présentation</a></li>
            <li><a href="<?php echo $site->url() ?>/apropos#a_propos_2">Comité éditorial</a></li>
            <li><a href="<?php echo $site->url() ?>/apropos#a_propos_3">Auteurs</a></li>

            <?php if($site->find('apropos')->APROPOS_DESIGN()->text()->length() > 0): ?>
            <li><a href="<?php echo $site->url() ?>/apropos#a_propos_4">Design</a></li>
            <?php endif ?>

            <li><a href="<?php echo $site->url() ?>/apropos#a_propos_5">Partenaires</a></li>
            <li><a href="<?php echo $site->url() ?>/apropos#a_propos_6">Contacts</a></li>
           
            <?php if($site->find('apropos')->APROPOS_CREDIT()->text()->length() > 0): ?>
            <li><a href="<?php echo $site->url() ?>/apropos#a_propos_7">Crédits</a></li>
            <?php endif ?>
        </ul>
    </div>
</nav>

<nav id="menuNumero" class="menu">
    <div class="btn_fermer" onclick="hideMenu('menuNumero');noBottomBorder('btnNumero');">+</div>    
    <div class="contentMenu">
        <ul>
            <!-- Récupere la liste des "numero" visible  dans 'numeros' -->
            <?php foreach ($site->find('numeros')->children()->visible() as $pageNumero): ?>
                <li>
                    <a href="<?php echo $pageNumero->url() ?>">
                        <strong>Nº <?php echo $pageNumero->number()->html() ?></strong>
                        <br>
                        <!-- le titre -->
                        <?php echo $pageNumero->title()->html() ?>         
                    </a>
                </li>
            <?php endforeach ?>
        </ul>
    </div>
</nav>

<?php if($page->isDescendantOf(page('numeros'))): ?>
<nav id="menuSommaire" class="menu">
    <!-- Bouton FERMER du volet -->
    <div class="btn_fermer" onclick="hideMenu('menuSommaire');noBottomBorder('btnSommaire');">+</div>
    
    <!-- Contenu du volet -->
    <div class="contentMenu">
        <!-- On vient chercher les titres de chaque article composant le numéro courant -->
        <!-- page = numero contenant les articles / children = tous les articles du numéro -->
        <?php 
            if($page->children()->count() > 0){
                // on est dans la page d’un numéro
                $children = $page->children();    
            } else {
                //articles
                $children = $page->siblings($self = true);
            }

            foreach($children as $page_article): ?>

            <div class="barre_blanche article_sommaire">
                <!-- titre de l'article + auteurs-->
                <a href="<?php echo $page_article->url() ?>">
                    <strong><?php echo smartypants($page_article->title()) ?></strong>
                    <br>
                    <p class="auteurs_menu">
                        <?php echo html($page_article->nom_auteur()) ?>
                        <?php echo html($page_article->nom_auteur_visuel()) ?>
                    </p>
                </a>
            </div>
        <?php endforeach ?>
    </div>
</nav>

<?php endif ?>




