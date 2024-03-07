<?php
session_start();
include("modele/Client.php");

if(!isset($_SESSION['connecter'])) 
  $_SESSION['connecter']=false; 

  if(!empty($_POST['username']) AND !empty($_POST['password']) AND !empty($_POST['nom']) AND !empty($_POST['datenaissance']) AND !empty($_POST['addresse'])){

    $client=new Client();
      try
      {
          if(1)
          {
              $client->inscription($_POST['nom'],$_POST['username'],$_POST['datenaissance'],$_POST['addresse'],$_POST['password']);
          }
          else
          {
              throw new Exception('Un probleme est produit lors de votre inscription!!! Merci de ressayer plus tard ^_^');
          }
      }
      catch(Exception $e)
      {
          echo $e->getMessage();
      }
  }
  include './composant/header.php'
  ?>
  <div class="row">



<div class="col-lg-12">




<div class="panel panel-success panel1" >
<div class="panel-heading">Inscription</div>
<div class="panel-body">
  <fieldset>
  <legend><b>Inscripton Individuelle</b></legend>


      <form action="inscription.php" method="post">
      <table class="login_table">
      <tr>
      <td>Email<span>*</span></td>
      <td><input type="text" name="username" id="username" placeholder="email or username" required></td>
      </tr>
      <tr>
      <td>Pasword<span>*</span></td>
      <td><input type="password" name="password" id="password" placeholder="password" required></td>
      </tr>
      <tr>
      <td>Nom<span>*</span></td>
      <td><input type="text" name="nom" id="nom" placeholder="Nom" required></td>
      </tr>
      <tr>
      <td>Date-naissance<span>*</span></td>
      <td><input type="date" name="datenaissance" id="datenaissance" placeholder="AAAA-MM-JJ" required></td>
      </tr>
      <tr>
      <td>adresse <span>*</span></td>
      <td><input type="text" name="addresse" id="addresse" placeholder="Adresse" required></td>
      </tr>
      <tr>
      <td> <small>Keep Me</small><input type="checkbox" name="keep" value="true"></td>
      <td><input type="submit" value="Inscription"/><input type="reset" value="repeter"/></td>
      </tr>
      </table>
  </form>

</fieldset>

<div id="reglement_ecrire"><h2>Carte « Adhérent »</h2>
<ul><li> Une carte « Adhérent » sera délivrée aux usagers n’appartenant pas à l’Université FSG de Gabes. Cette carte doit être présentée à chaque visite de la bibliothèque et est obligatoire pour toute opération de prêt.</li></ul>

  </div>
</div>
</div>
   
</div>
</div>
<?php
include('composant/footer.php')
?>