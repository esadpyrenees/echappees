<?php if(!defined('KIRBY')) exit ?>

title: Auteur
pages: false
files: false

fields:
  title:
    label: Nom de l'auteur
    type:  text

  text_bio:
    label: Biographie
    type:  textarea
    size:  large

  text_contact:
    label: Contact (facultatif)
    type:  textarea
    size:  large

  text_liens:
    label: Liens et bibliographie (facultatif)
    type:  textarea
    size:  large

  INFO_1:
    label: Liste des articles rédigés par l'auteur
    type: info
    text: >
      Veuillez coller l'adresse *URL* des articles rédigé par l'auteur

      - Pour recupérer cette adresse : 

      •Rendez-vous sur la page de saisie de l'article en question
    
      •Clicker sur *modifier l'URL* (en haut à gauche de votre écran)
      
      •Copier le chemin d'accès (en gris) en dessous du champs éditable composé de: numeros/numero(chiffre)/url article
      
      •Coller la ci-dessous à l'aide du bouton lien


  text_liste_articles:
    label: Liste des articles rédigés
    type:  textarea
    size:  large
