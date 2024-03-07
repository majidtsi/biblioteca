<?php session_start();
include("modele/Client.php");
include("modele/Livre.php");

if(isset($_GET['passer'])){

    if($_GET['passer']=='next'){
    $_SESSION['next']=$_SESSION['next']+6;
    $_SESSION['nex']=$_SESSION['nex']+6;
    }else{
      if($_GET['passer']=='previous'){
      $_SESSION['next']=$_SESSION['next']-6;
    $_SESSION['nex']=$_SESSION['nex']-6;
    }
    
    }
    }
    
    
    //la verfication de variable session et et verfier resevoir la variable b
    if(isset($_SESSION['connecter'])){ 
      if(isset($_GET['d'])){
          session_destroy();
          $_SESSION['connecter']=false;
        }
    }
    
    //si n'y a pas la variable de connecter alors connecter est false
    if(!isset($_SESSION['connecter'])) 
      $_SESSION['connecter']=false; 
       
    //pour lad conexion je dois verfier dans la premier temps est ce que j'ai les variable 
    if(!empty($_POST['email']) AND !empty($_POST['pwd'])) 
    {
       $client1=new Client();
    //la fonction valide pour chercher est-ce que ce client existe
       if($client=$client1->valide($_POST['email'],$_POST['pwd'])){
    
        $_SESSION['connecter']=true;
        foreach ($client as $client_connecter) {
        //stocke tt les variable dans session pour travaille dans tous les page
        $_SESSION['id_client']=$client_connecter['id_client'];
        $_SESSION['nom_client']=$client_connecter['nom_client'];
        $_SESSION['Email']=$client_connecter['Email'];
        $_SESSION['date_naissance']=$client_connecter['date_naissance'];
        $_SESSION['adresse']=$client_connecter['adresse'];
        $_SESSION['MDP']=$client_connecter['MDP'];
        $_SESSION['Nb_emprunt']=$client_connecter['Nb_emprunt'];
        $_SESSION['Date_inscription']=$client_connecter['Date_inscription'];
         }
      
        }else{
    
    ?>      
        <script type="text/javascript"> window.alert('email ou mot de passe incorrect! ');</script>
    <?php
        
        }
    }
?>

<?php include './composant/header.php' ?>
<div class="row">
<?php
include('composant/menu.php');
?>
<div class="col-lg-9">
<h2> Acceuil</h2>
  <div class="panel panel-default panel2">
    <div class="panel-heading">Page d'Acceuil</div>
    <div class="panel-body">
      <div class="row">
        <?php 
            $liv = new Livre();
            if(isset($_GET['passer']) AND $_GET['passer']=='next'){
                $liv->next($_SESSION['next'],$_SESSION['nex']);
                } else{ 
                    if(isset($_GET['passer']) AND $_GET['passer']=='previous'){
                  $liv->previous($_SESSION['next'],$_SESSION['nex']);
                  
                    }else{
                  
                      $_SESSION['next']=0;
                      $_SESSION['nex']=6;
                    }
                  }

            if(empty($_GET['chercher'])){
                $_GET['chercher']="Roman";
            }

            $leslivre = $liv->afficher($_GET['chercher'],$_SESSION['next'],$_SESSION['nex']);
            $annule_next=0;
            foreach($leslivre as $livre): ?>
                <div class="col-sm-6 col-md-4 book1">
                    <div class="thumbnail height">
                    <img src=<?php echo $livre['img_livre']; ?> alt="" />
                    <div class="caption">
                        <h2><?php echo $livre['titre_livre'] ?></h2>
                        <p><?php echo $livre['Paragraphe'] ?>"</p>
                        <p><a href="consultation.php?ISBN=<?php echo $livre['ISBN']; ?>" class="btn btn-primary" role="button">Consulter</a> <?php if($_SESSION['connecter']==true && $livre['etat']==0 ){?><a href="consultation.php?ISBN=<?php echo $livre['ISBN'] ?>" class="btn btn-default" role="button">emprunter</a>
                        <?php }  ?>
                    </div>
                </div>
                </div>
            <?php $annule_next++; endforeach; ?>
        </div>
        <ul class="pager">
            <?php if($_SESSION['next']!=0){ ?>
                <li><a href="index.php?chercher=<?php echo $_GET['chercher']; ?>&passer=previous">Previous</a></li>
            <?php } 
            if($annule_next>=6){ 
                ?>
              <li><a href="index.php?chercher=<?php echo $_GET['chercher']; ?>&passer=next">Next</a></li>
             <?php } ?>
            
        </ul>
    </div>
</div>
</div>
</div>
<?php
include('composant/footer.php');

?>



            
            
        
