<?php
session_start();
include("modele/Client.php");

if(!isset($_SESSION['connecter'])) 
  $_SESSION['connecter']=false; 
  include './composant/header.php'
  ?>

<div class="col-lg-12">
<div class="tableau">

<div class="panel panel-default">

 <div class="container">
    <div id="ninja-slider">
      <div class="slider-inner">
        <ul>
          <li><img class="ns-img" src="IMG/im1.jpg"></li>
          <li><img class="ns-img" src="IMG/im2.jpg"></li>
          <li><img class="ns-img" src="IMG/im3.jpg"></li>
          <li><img class="ns-img" src="IMG/im4.jpg"></li>
        </ul>
      </div>
    </div>
  </div>
  
        <script type="text/javascript">
        var tag = document.createElement('script');

        tag.src = "https://www.youtube.com/player_api";
        var firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

        var player;

        function onYouTubeIframeAPIReady() {
            player = new YT.Player('ytplayer', {
                events: {
                    'onReady': onPlayerReady
                }
            });
        }

        function onPlayerReady() {
            player.playVideo();
            // Mute!
            player.mute();
        }
        </script>


</div>
</div>
</div>
<div class="col-lg-12">
<footer class="footer">
<?php include('composant/footer.php');?>
</footer>
</div>