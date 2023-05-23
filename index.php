<?php
  // Initialiser la sessiontypepassword
  session_start();
  // Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
  if(!isset($_SESSION["username"])){
    header("Location: login.php");
    exit(); 
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <title>Document</title>
</head>
    <body>
        <!-- Penser à faire des includes pour le header et le footer -->
        <header>
                <figure>
                    <a href="index.php"><img src="./img/pngegg.png" alt="home"></a>
                </figure>
                <h1>GMAO - LIGHT </h1>
        </header>

        <main>
            <section class="list">
                <div class="big-square">
                    <h2>Nombre d'ampoules remplacées</h2>
                    <div class="pourcent">
                        <svg>
                        <defs>
                                <linearGradient id="GradientColor">
                                    <stop offset="0%" stop-color="#30acee" />
                                    <stop offset="100%" stop-color="#0b2736" />
                                </linearGradient>
                        </defs>
                        <circle cx="60px" cy="60px" r="60px"></circle>
                        <circle cx="60px" cy="60px" r="60px"></circle>
                        </svg>
                        <span id="number"></span>
                    </div>
                    
                    <h3><a href="./list.php">Historique</a></h3>
                </div>

                
            </section>
        </main>

        <footer class="footer-gmao">
            <div><a href="./logout.php">Déconnexion</a></div>
        </footer>
        <script src="./script.js"></script>
        <!-- <a href="https://fr.rs-online.com/web/p/ampoules-led/2317015?cm_mmc=FR-PLA-DS3A-_-google-_-CSS_FR_FR_Eclairage_Whoop-_-(FR:Whoop!)+Ampoules+LED+(2)-_-2317015&matchtype=&pla-304251699511&gclid=Cj0KCQjwsIejBhDOARIsANYqkD3cnOmCQR1EKiZqq5ZAjXrGqGC1az3mbTkap0vXbTuPKZt4ACuJ9CEaAlmZEALw_wcB&gclsrc=aw.ds"></a> -->
    </body>
</html>