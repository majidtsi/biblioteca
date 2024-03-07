<?php
session_start();
include("modele/Client.php");

if(!isset($_SESSION['connecter'])) 
  $_SESSION['connecter']=false; 
  include './composant/header.php'
  ?>
  <div class="row">


<div class="col-lg-12">

<div class="panel panel-warning panel1">
<div class="panel-heading">Regles de pret</div>
<div class="panel-body">
<div id="reglement_ecrire">
  <h2>Regles de pret</h2>
      <ul>
          <li>Tout adhérent a le droit d’emprunter 1 à 10 emprunts  des collections de la Bibliothèque pendant 8 jours ouvrables en plus d’un document de la Section romans .</li>
          <li>La bibliothèque se réserve le droit d’exclure certains documents du prêt.</li>
          <li>Tout retard sera sanctionné par une amende (3d/jour).</li>
          <li>Tout document perdu ou abimé devra être remplacé ou remboursé.</li>
      </ul>

  <h2>Modalité de prêt</h2>
      <ul>
          <li>Pour toute opération de prêt, les étudiants de l’Université FSG de Gabes sont tenus de déposer leur carte de d’étudiant au guichet de prêt.</li>
          <li>La carte sera récupérée une fois le livre rendu.</li>
      </ul>
  <h2>Compte lecteur</h2>
      <ul>
          <li>Pour connaître la situation des prêts en cours, retards, amendes, faire des propositions d’achat, etc., la bibliothèque met à la disposition des adhérents un compte lecteur accessible sur la page d’accueil du catalogue de la bibliothèque.</li>
      </ul>
  <h2>Compte lecteur</h2>
  <ul>
    <li>Pour connaître la situation des prêts en cours, retards, amendes, faire des propositions d’achat, etc., la bibliothèque met à la disposition des adhérents un compte lecteur accessible sur la page d’accueil du catalogue de la bibliothèque.</li>
  </ul>
</div>
</div>
</div>

    
</div>
</div>
<?php

include('composant/footer.php');
?>
