<?php 

    include 'connect.php' ; 

    if(isset($_POST['reservez'])){
        $nom=$_POST['nom']; 
        $telephone=$_POST['telephone']; 
        $destination=$_POST['destination'];

        $sql="insert into `lbc` (prenom, telephone, destination) values('$nom', '$telephone', '$destination')" ; 
        $result=mysqli_query($con, $sql) ; 

        if($result){
            // echo "Data inserted successfully" ; 
            header('location:data.php') ; 
          }else{
            die(mysqli_error($con)); 
          }
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <title>LBCVoyage</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Icon du site -->
    <link rel="icon" href="img/bus.png">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <!-- <link rel="stylesheet" href="dist/css/bootstrap.min.css" > -->
    <link rel="stylesheet" href="dist/css/style.css">

  </head>
  <body>
    <div class="navbar">
        <div class="left">
            <h1>LBCVoyage</h1>
        </div>
        <div class="right">
            <a href="#">Accueil</a>
            <a href="#voyages">Nos voyages disponibles</a>
            <a href="#contact">Réservez</a>
        </div>
    </div>

    <section class="principale">
        <div class="container">
            <h1>Voyagez n'a jamais été aussi <br> facile avec LBCVoyage</h1>
        </div>
    </section>

    <section id="voyages">

        <h1>Nos Voyages disponibles</h1>
        <div class="container">
            <div class="card">
                <img src="img/bus.png">
                <h2>Prix : 2500 FCFA</h2>
                <h2>UGB-Dakar</h2>
            </div>

            <div class="card">
                <img src="img/bus.png">
                <h2>Prix : 2500 FCFA</h2>
                <h2>Dakar-UGB</h2>
            </div>

            <div class="card">
                <img src="img/bus.png">
                <h2>Prix : 2500 FCFA</h2>
                <h2>UGB-Dakar</h2>
            </div>
        </div>
    </section>

    <section id="contact">
        <h1>Réservation</h1>
        <form method="post">
            <input type="text" placeholder="Votre nom et prénom..." required autocomplete="off" name="nom">
            <input type="text" placeholder="Votre numéro de téléphone..." required autocomplete="off" name="telephone">
            <input type="text" placeholder="Votre destination..." required autocomplete="off" name="destination">
            <button name="reservez">Réservez</button>
        </form>
    </section>

    <footer id="footer">
        <h2>Copyright tous droits réservés BarhamSoft</h2>
    </footer>

    <!-- Bootstrap JavaScript Libraries -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"></script>

    <script src="dist/js/bootstrap.min.js"></script> -->
  </body>
</html>