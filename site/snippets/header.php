<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
	
<!--Cette déclaration ne concerne que le navigateur Internet Explorer. Elle permet de s'assurer qu'il utilise la dernière version du moteur de rendu. Notez que cette ligne ne passe pas la validation W3C.-->	
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
	
<!--Cette ligne concerne uniquement les mobiles. On demande que l'affichage occupe tout l'espace disponible avec une taille de 1, autrement dit sans zoom. Vous pouvez aller encore plus loin en interdisant le zoom ou en le limitant à certaines valeurs.-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
    <!-- <title>échappées</title> -->
	<title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
	
	<!-- metadonnées -->
	<meta name="description" content="<?php echo $site->description()->html() ?>">
	<meta name="keywords" content="<?php echo $site->keywords()->html() ?>">
  
    <!-- appel des fonts -->
    <!-- <link href='https://fonts.googleapis.com/css?family=Neuton:400,200,300,400italic,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Magra:400,700' rel='stylesheet' type='text/css'>
    
    <link href='https://fonts.googleapis.com/css?family=Kreon:400,700,300' rel='stylesheet' type='text/css'> -->
    <link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,900italic,900,800,800italic,700italic,700,600italic,600,500italic,400italic,500,300italic,300,200italic,200,100italic,100' rel='stylesheet' type='text/css'>
	<!-- script pour type kit -->
    <!-- kit original (luminance) -->
    <script src="https://use.typekit.net/pkn1ilg.js"></script>
    <!-- nouveau kit de test -->
    <script src="https://use.typekit.net/rhc4ddt.js"></script>
	<script>try{Typekit.load({ async: true });}catch(e){}</script>
    
    
    
    
	<!-- appel d'une bibliotheque pour la fonction plier deplier de la page Auteur et note -->
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js'></script>

    
    <!-- appel des styles css -->
    <!-- le reset permet de retirer les paramètrages par default -->
	<?php echo css('assets/css/reset.css') ?>
	<!-- appel du css général -->
    
    <?php 
        $ff  = param('ff', 'ws'); 
        echo css('assets/css/typo-'.$ff.'.css');
    ?>
    

	<?php echo css('assets/css/styleGeneral.css') ?>
	<!-- le responsive permet de gérer l'ensemble des éléments qui subissent une transformation 
	lors d'une modifictaion de tailles d'ecran -->
	<?php echo css('assets/css/styleResponsive.css') ?>
	<!-- Appel du CSS print -->
	<?php echo css('assets/css/print.css', 'print') ?>
	<!-- /!\/!\/!\ <link rel="stylesheet" media="print" href="assets/css/print.css">  marche pas /!\/!\/!\-->
	
</head>
<!-- on ouvre le body, il est fermé dans le footer -->
<body >
   
<div id="menu-overlay"></div>
	
  
  
  