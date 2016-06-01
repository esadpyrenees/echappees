<?php if(!defined('KIRBY')) exit ?>

title: nouvel article visuel
pages: false
files: true

fields:
  INFO_1:
    label: Article visuel
    type: info
    text: >
      Vous êtes sur le point de créer votre nouvel *Article visuel*, il se composent essentiellement de médias (images, vidéos, audio) et peut être accompagner d'un texte explicatif qui apparaîtra en fin d'article.
 

  pageSettings_1:
    label: L'article
    type: headline
  
  title:
    label: Titre de l'article
    type: title


  title_note:
    label: Information(s) complémentaire(s) ou/et note de titre (facultatif)
    type:  textarea

  ARTICLEVISUEL_DATE:
    label: Date
    type: text 

  pageSettings_2:
    label: Auteur(s)
    type: headline

  nom_auteur_visuel:
    label: Nom de l'auteur
    type:  textarea
    buttons: false

  INFO_2:
    label: La “fiche auteur”
    type: info
    text: >
      Vous avez, ou allez, créer une *fiche auteur* dans la zone *À propos*.

      Cette fiche présente les informations principales de l'auteur : biographie, contact, etc.
      
      Voici comment la relier au présent article : 

      •Rendez-vous sur la fiche de l'auteur en question (*Tableau de bords* > *À propos* > zone de gauche : *pages*)
    
      •Clicker sur l'adresse (en gris) juste sous le champ éditable *Nom de l'auteur*
      
      •Copier *Identifiant de l’URL* (l'adresse)
      
      •Coller la ci-dessous

  ARTICLEVISUEL_AUTEUR:
    label: Adresse de la fiche de l'auteur
    type: structure
    entry: >
      {{auteur_uid}}    
    fields:
      auteur_uid:
        label: Adresse de la fiche de l'auteur (*Identifiant de l’URL*)
        type: text

  pageSettings_3:
    label: Le contenu
    type: headline

  INFO_3:
    label: Saisie du contenu de l'article
    type: info
    text: >
      Inserez ci-dessous l'ensemble de vos medias (images et/ou vidéo) suivi, si nécessaire, d'un texte

      **Informations sur la saisie des notes**

      Pour que vos notes puissent apparaître aussi bien à l'écran que sur la version imprimable de votre article, vous devez les saisir dans deux champs différents.

      - Premièrement directement dans votre texte, de cette manière : 

      *mot possédant une note [numéro de la note. contenu de la note] suite de votre texte*


      - Puis dans le champ dédié aux notes print de la manière suivante : 

      [*numéro de la  première note.] contenu de la première note*

      saut de ligne

      [*numéro de la  deuxième note.] contenu de la deuxième note*

      etc.

  ARTICLEVISUEL_MEDIAS:
    label: 
    type: textarea

  ARTICLE_NOTE_PRINT:
    label: Saisie des notes print de l'article
    type: textarea

  pageSettings_5:
    label: PDF de l'article
    type: headline

  INFO_4:
    label: Pour générer et intéger le PDF de votre article
    type: info
    text: >
      - Dans la revue *échappées*, cliquer sur le bouton *Imprimer* situé à la fin de votre article (menu possédant un encadré orange)

      - Au moment de l'impression, vous avez la possibilité d'enregistrer le document au format PDF

      - Une fois enregistré, il vous suffit de l'insérer ci-dessous (clickez *Ajouter* dans la zone *Fichier* ci-contre) 

      **Attention** après *file: votre_document.pdf* veillez à rajouter *text: Voir et télécharger le PDF de l'article popup: yes*

  ARTICLEVISUEL_PDF:
    label:
    type: textarea

  pageSettings_4:
    label: Métadonnées de l'article
    type: headline
    
  INFO_5:
    label: Domaines & mots clefs
    type: info
    text: >
      Les noms des domaines et les mots clefs sont par une virgule, comme ceci : *mot clef, mot clef, etc.*

  ARTICLEVISUEL_DOMAINE:
    label: Domaines reliés à l'article
    type:  textarea
    buttons: false
  
  ARTICLEVISUEL_KEYWORD:
    label: Mots clefs reliés à l'article
    type:  textarea
    buttons: false     
  
  line_1:
    type: line
  
  ARTICLEVISUEL_BIBLIO:
    label: Bibliographie de l'article 
    type:  textarea
    buttons: 
      - bold
      - italic
      - link
  
  ARTICLEVISUEL_SITO:
    label: sitographie de l'article
    type: textarea

   ARTICLEVISUEL_CITER:
    label: URL(s) associées à l'article
    type: textarea 
  
  pageSettings_6:
    label: Proposition d'articles reliés 
    type: headline

  INFO_6:
    label: Proposition d'articles reliés 
    type: info
    text: >
      Veuillez coller ci-dessous, l'adresse *URL* des articles reliés au présent article

      - Pour recupérer cette adresse : 

      •Rendez-vous sur la page de saisie de l'article à relier

      •Clicker sur *modifier l'URL* (en haut à gauche de votre écran)
    
      •Copier le chemin d'accès (en gris) en dessous du champs éditable composé de: numeros/numero(chiffre)/url article
      
      •Coller la ci-dessous à l'aide du bouton lien

  ARTICLEVISUEL_RELIE:
    label: Adresses des articles reliés
    type: structure
    entry: >
      {{article_relie_titre_uid}}<br/>
    fields:
      article_relie_titre_uid:
        label: Titre de l'article relié
        type: text