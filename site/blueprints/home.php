<?php if(!defined('KIRBY')) exit ?>

title: home
pages: false
files: false

fields:
  INFO_1:
    label: Page d'accueil de la revue échappées
    type: info
    text: >
      Cet espace vous permet de saisir le contenu qui apparaitra dans la page d'accueil de votre revue.

  title:
    label: 
    type: text
 
  pageSettings_1:
    label: échappées
    type: headline

  ACCUEIL_TITRE_ECHAPPEE:
    label: Logotype
    type:  text
    width: 1/2

  ACCUEIL_LOGO_INFO:
    label: Informations suivant le logo
    type:  textarea
    buttons: false
    width: 1/2

  pageSettings_2:
    label: L'actualité & conseils de lecture
    type: headline
	
  ACCUEIL_ACTUALITE:
    label: Les dernières actualités
    type: structure
    entry: >
      {{actualite_contenu}}
    fields:
      actualite_contenu:
        label: Actualités
        type: textarea
	
  ACCUEIL_CONSEIL:
    label: Les conseils de lecture
    type: structure
    entry: >
      {{conseil_contenu}}<br/>
      {{conseil_lien}}  
    fields:
      conseil_contenu:
        label: Conseils de lecture
        type: textarea
      conseil_lien:
        label: lien vers l'article
        type: textarea

  pageSettings_3:
    label: Le dernier numéro est récupéré automatiquement (numéro, titre et date)
    type: headline
