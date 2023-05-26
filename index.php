<?php
  // Initialiser la sessiontypepassword
  session_start();
  // Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
  if(!isset($_SESSION["username"])){
    header("Location: login.php");
    exit(); 
  }

  include "./header.php";
?>



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

                <script src="./script.js"></script>
            </section>
        </main>
<?php
// include "./footer.php";
?>
        