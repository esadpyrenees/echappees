<?php if(!defined('KIRBY')) exit ?>

title: nouveau numero
pages: true
files: true

fields:
  INFO_1:
    label: Votre nouveau numéro
    type: info
    text: >
      Ici, vous allez saisir le contenu de la *Couverture* (page d'accueil) de votre numéro.

  INFO_2:
    label: Cet espace vous permet également de créer de nouveaux articles, 

    type: info
    text: >
      vous avez le choix entre deux catégories d'article 

      - **les articles textuels**, qui se composent de textes et de médias (images, vidéos, audio) venant l'illustrer ou l'accompagner, soit directement dans le texte, soit sous forme de *galerie*;

      - **les articles visuels**, qui se composent de médias (images, vidéos, audio) pouvant être accompagner d'un texte explicatif.

      

      Pour les créer, il vous suffit d'ajouter une nouvelle page dans l'espace de gauche (cliquez sur *Ajouter* et séléctionnez le modèle de page *nouvel article* ou *nouvel article visuel*). Cliquer ensuite sur votre article pour entrer dans son espace de saisie.

  pageSettings_1:
    label: Contenu de la couverture
    type: headline

  number:
    label: Numéro
    type: number
    width: 1/2

  NUMERO_DATE:
    label: Date du numéro
    type: text
    width: 1/2

  title:
    label: Titre du numéro
    type: title


  IMAGE_COUV:
    label: photo de couverture du numéro
    type:  textarea
    

  pageSettings_2:
    label: Les métadonnées du numéro
    type: headline

  nom_responsable_numero:
    label: Prénom nom Direction générale de l'ÉsaP – Pau Tarbes
    type: textarea
    

  conseils_scientifiques_numero:
    label: Conseils scientifiques
    type: textarea


  coordination_revue_numero:
    label: Coordination de la revue
    type: textarea
  

  comite_redaction_numero:
    label: Comité de rédaction
    type: textarea
  

  design_graphique_numero:
    label: Design graphique
    type: textarea
 
  line_1:
    type: line

  INFO_3:
    label: Domaines & mots clefs
    type: info
    text: >
      Les noms des domaines et les mots clefs sont par une virgule, comme ceci : *mot clef, mot clef, etc.*
  
  NUMERO_DOMAINE:
    label: Domaines reliés au numéro
    type:  textarea
    buttons: false
     
  NUMERO_KEYWORD:
    label: Mots clefs reliés au numéro
    type:  textarea
    buttons: false

  pageSettings_3:
    label: L'édito
    type: headline

  EDITO_AUTEUR:
    label: Auteur(s) de l'édito
    type:  text
    required: true
    buttons: >
      - bold
      - italic
      - link

  INFO_4:
    label: Informations sur la saisie des notes
    type: info
    text: >
      Si votre texte est annoté, veuillez les saisir directement dans votre texte, de cette manière : 

      *mot possédant une note [numéro de la note. contenu de la note] suite de votre texte*

  EDITO_CONTENU:
    label: Contenu de l'édito 
    type: textarea
    size: large
    required: true     
    buttons: >
      - bold
      - italic
      - link  

