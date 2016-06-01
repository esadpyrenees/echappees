
    <!-- si il n'y a pas de contenu pour une galerie parallèle on affiche pas la galerie -->
    <?php if($page->ARTICLE_GALERIE()->text()->length() > 0): ?>
        <!--  on affiche le nom de la galerie-->
        <div id="btnGalerie" onclick="ShowHideID('galerie_parallele');BottomBorderID('btnGalerie');">galerie parallèle
        </div>
        <div id="overlayGallery"></div>
        <div id="sideGallery" class="hidden">
            <?php echo $page->ARTICLE_GALERIE()->kirbytext() ?>
            <div class="closeGallery btn_fermer">+</div>
        </div>

    <?php endif ?>    


    <nav id="galerie_parallele">
        <div class="btn_fermer_galerie" onclick="ShowHideID('galerie_parallele');BottomBorderID('btnGalerie');">x</div>
           
        <div class="contentGalerie">
            
        </div>
    </nav>

