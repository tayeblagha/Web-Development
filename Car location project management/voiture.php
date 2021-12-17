<html lang="en">
  <head>
    <meta charset="utf-8">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css\bootstrap.min.css"> 
  </head> 

  <body class="bg-light" >
    
  <div class="container"> 
  <h1 class="text-center text-danger" > Gestion de location de voitures </h1>
  <h2 class="text-secondary">Parcourir les catégories:</h2>
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
     <div class="carousel-inner">
       <!-- slider 1-->
    <div class="carousel-item active">
      <div class="row"> 
        <div class="col-4"> <img height="150" width="150" src="img\voiturenormale.jpg" class="d-block w-100" alt="bmw"> <center><a  href="normal.html" target="_blank">voiture normale</a></center></div>
        <div class="col-4"> <img height="150" width="150" src="img\sport1.jpg" class="d-block w-100" alt="marcedes"><center><a  href="sport.html" target="_blank">voiture de sport </a></center></div>
        <div class="col-4"> <img height="150" width="150" src="img\voiture decapotable.jpg" class="d-block w-100" alt="volzwagen"><center><a  href="decapotable.html" target="_blank">voiture decapotable</a></center></div>
        
      </div>
      <!-- slider 2-->
    </div>
    <div class="carousel-item">
      <div class="row"> 
        <div class="col-4"> <img height="150" width="150" src="img\voiture luxe.jpg" class="d-block w-100" alt="bmw"> <center><a  href="luxe.html" target="_blank">voiture de luxe</a></center></div>
        <div class="col-4"> <img height="150" width="150" src="img\voiture clasique.jpg" class="d-block w-100" alt="marcedes"><center><a  href="clasique.html" target="_blank">voiture clasique </a></center></div>
        <div class="col-4"> <img height="150" width="150" src="img\mini-fourgonnette.jpg" class="d-block w-100" alt="volzwagen"><center><a  href="mini.html" target="_blank">mini-fourgonnette</a></center></div>
      </div>
    </div>    
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<hr/>
<?php include 'base.php' ;
		?>
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="js\bootstrap.min.js" ></script>   
  </body>
</html>