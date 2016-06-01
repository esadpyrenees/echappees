<?php if(!defined('KIRBY')) exit ?>

title: 
pages: false
files: false

fields:
  
  title:
    label:
    type: title

  INFO_1:
    label: Informations concernant la bonne saisie de votre texte
    type: info
    text: >

    	*Kirby* est un *CMS* qui vous permet d'enrichir votre revue numérique de contenu.

    	Pour mettre en forme différents niveaux de hiérarchie de texte *Kirby* utilise un langage de balisage léger appelé *Markdown*.

    	Son but est d'offrir une syntaxe facile à lire et à écrire.

    	Voici quelques éléments pour vous permettre de structurer votre texte.



    	**TITRAGE**

      • Saisissez votre titre ainsi **###Votre titre** (3#)

      • Saisissez votre sous-titre ainsi **####Votre sous-titre** (4#)

      • Les légendes se saisissent directement sous l'image, dans le texte, ainsi : **#####Votre légende d'image** (5#)


      **BIBLIOGRAPHIE**

      • Veuillez saisir vos bibliographies ainsi :

      Auteur, « titre de l'œuvre encadré par des guillemets français », *nom de revue en italic*, *nom de la collection en italic* , *maison d'édition en italic*, date.


      **LA MICRO-TYPOGRAPHIE**

      • Les titres de publication et d’œuvre sont encadrés par des guillemets français : « » 

      • Les citations sont encadrées par des guillemets français : « » 

      • Les citations dans les citations sont encadrées par des guillemets anglais : “” 

      (Les guillemets français et/ou anglais se saisissent différement selon les machines et les claviers !)

      • Les noms de revues, les maisons d'éditions, les mots mis en exergue et en langue étrangère sont mis en **italique**

      • L'espace, en français, peut être facultative pour le **;**  ici nous en mettrons une avant et après

      • Veuillez saisir des demi-catrin **–**

  exposant:
    label: Pour afficher un exposant
    type:  textarea




