<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="CSS/bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="CSS/theme.css"/>
    <script type="text/javascript" src="JQ/jquery-2.2.1.min.js"></script>
  <title>biblioweb</title>
</head>

<body>
<div class="jumbotron">
      <div class="col-lg-8">
          <span class="biblio-logo">Biblioweb<span class="dot">.MAJ</span></span>
      </div>
      <div class="col-lg-4">
          <div id="logoright">Bibliotheque du web</div>
      </div>
</div>

<div class="col-lg-6">
  <ul class="nav nav-pills nav1">
            <li class="active"><a href="index.php">Acceuil</a></li>
   <?php 
 
  if(!$_SESSION['connecter']){//si connecter il n,affiche pas else il affiche
  ?>
           <li><a href="inscription.php">Inscription</a></li>
    <?php
  }
    ?> 
           <li><a href="reglement.php" >Reglement</a></li>
           <li><a href="#" >Catalogue</a></li>
           <li><a href="bibliotheque.php" >La bibliotheque</a></li>
  </ul>
</div>

<div class="col-lg-6">
 <div id="iscri">
  <?php 
  if(!$_SESSION['connecter']){
  ?>
        <form method="post" action="" > 
            <input type="text" name="email" placeholder="Email ou Username" required />
            <input type="password" name="pwd" placeholder="Password" required />
            <input type="submit" value="Login"/>
        </form>  
      
    <?php
  }else{
    ?> 

 <div class="col-lg-7">
 </div>
 <div class="col-lg-5">
 <ul class="nav nav-pills">
      <li class="active"><a href="profil.php" >Profile</a></li>
      <li><a href="index.php?d=true" >Deconnecter</a></li>
 
  </ul>

</div>

    <?php
    }
    ?>

  </div> 
</div>