<?php if(!defined('KIRBY')) exit ?>

title: A propos
pages: true
files: true

fields:
  INFO_1:
    label: Cet espace vous permet de saisir le contenu qui apparaitra dans l'espace “À propos” de votre revue
    type: info
    text: 

  title:
    label: 
    type:  text

  pageSettings_1:
    label: Présentation du projet échappées
    type: headline

  APROPOS_PRESENTATION:
    label: Texte de présentation
    type:  textarea

  pageSettings_2:
    label: Le comité éditorial d'échappées
    type: headline

  APROPOS_COMITE:
    label: colophon éditoriaux des différents numéros
    type: structure
    modalsize: large
    entry: >
      {{numero_revue}}<br />
      {{titre_numero}}<br />
      {{nom_responsable}}<br />
      {{conseils_scientifiques}}<br />
      {{coordination_revue}}<br />
      {{comite_rédaction}}<br />
      {{design_graphique}}  
    fields:
      numero_revue:
        label: Numéro de la revue
        type: text
        placeholder: échappées n°
        width: 1/3
      titre_numero:
        label: Titre de la revue
        type: text
        width: 2/3
      nom_responsable:
        label: Prénom, Nom et titre de la Direction générale de l’ÉsaP – Pau Tarbes
        type: textarea
        buttons: false      
      conseils_scientifiques:
        label: Conseils scientifiques
        type: textarea
        buttons: false
      coordination_revue:
        label: Coordination de la revue
        type: textarea
        buttons: false
      comite_redaction:
        label: Comité de rédaction
        type: textarea
        buttons: false
      design_graphique:
        label: Design graphique
        type: textarea
        buttons: false

  pageSettings_3:
    label: La demarche de design
    type: headline

  APROPOS_DESIGN:
    label: Texte explicatif
    type:  textarea
    
  pageSettings_4:
    label: Renseignements
    type: headline

  RENSEIGNEMENT_REVUE:
    label: Contact pour renseignements
    type:  textarea

  pageSettings_5:
    label: Contacts Pau et Tarbes
    type: headline

  ADRESSE_PAU:
    label: Adresse site de Pau
    type: structure
    entry: >
      {{name}}<br/>
      {{street}}<br/>
      {{zip}}{{city}}
    fields:
      name:
        label: Nom de l'établissement
        type: textarea
        buttons: false 
      street:
        label: Rue
        type: textarea
        buttons: false 
      zip:
        label: Code postal
        type: text
        width: 1/3
      city:
        label: Ville
        type: text
        width: 2/3

  TELEPHONE_PAU :
    label: Téléphone site de Pau
    type: text
    width: 1/2

  MAIL_PAU:
    label: Email site de Pau
    type: email
    width: 1/2

  line:
    type: line

  ADRESSE_TARBES:
    label: Adresse site de Tarbes
    type: structure
    entry: >
      {{name}}<br/>
      {{street}}<br/>
      {{zip}} {{city}}
    fields:
      name:
        label: Nom de l'établissement
        type: text
      street:
        label: Rue
        type: textarea
        buttons: false 
      zip:
        label: Code postal
        type: text
        width: 1/3
      city:
        label: Ville
        type: text
        width: 2/3

  TELEPHONE_TARBES :
    label: Téléphone site de Tarbes
    type: text
    width: 1/2

  MAIL_TARBES:
    label: Email site de Tarbes
    type: email
    width: 1/2

  pageSettings_6:
    label: Les partenaires
    type: headline

  INFO_2:
    label: Les partenaires
    type: info
    text: 

  APROPOS_PARTENAIRE:
    label: Noms ou logos des partenaires
    type: textarea
    

  pageSettings_7:
    label: Crédits et remerciements des différents numéros 
    type: headline

  CREDIT:
    label: Crédits
    type: textarea

  MERCI:
    label: remerciements
    type: textarea
      

