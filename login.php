<?php
    require('config.php');
    session_start();

    if (!empty($_POST)){
    
        if (isset($_POST['username']) && isset($_POST['pass'])){

            $username = stripslashes($_REQUEST['username']);
            $username = mysqli_real_escape_string($conn, $username);
            
            $_SESSION['username'] = $username;
            
            $pass = stripslashes($_REQUEST['pass']);
            $pass = mysqli_real_escape_string($conn, $pass);
            
            $query = "SELECT * FROM `users` WHERE username='$username' and pass='$pass'";
            
            $result = mysqli_query($conn,$query) or die("erreur");
            
        
        if (mysqli_num_rows($result) == 1) {
            $user = mysqli_fetch_assoc($result);
            // vérifier si l'utilisateur est un administrateur ou un utilisateur
            if ($user['genre'] == 'admin') {
            header('location: admin/home.php');		  
            }else{
            header('location: index.php');
            }
            }else{
            $message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
        }
        }
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
        <header>
            <h1>GMAO - LIGHT </h1>
        </header>

        <main class="login-page">
            <section >
                <form method="post" class="container-login">
                    <div class="element-login">
                        <h1>LOGIN</h1>
                    </div>
                    <div class="element-login">
                        <input type="text" name="username" id="utilisateur" placeholder="Utilisateur" required>
                    </div>

                    <label>
                        <div class="element-login">
                            <input type="password" name="pass" id="password" placeholder="Mot de passe" required>
                        </div>

                            <!--ICONES OEIL-->
                        <div class="password-icon">
                            <i class="bi bi-eye"></i>
                        </div>
                    </label>

                    <div class="element-login">
                        <input type="checkbox" id="remember" name="remenber" value="remember">
                        <label for="remenber" id="remember-me">Remember me</label>
                    </div>
                    <a href="./register.php">S'INSCRIRE</a>
                    <div class="element-login">
                        <input type="submit" value="LOGIN" name="submit" id="Envoyer_login">
                    </div>
                    <?php if (! empty($message)) { ?>
                    <p class="errorMessage"><?php echo $message; ?></p>
                    <?php } ?>  
                </form>    
            </section>
        </main>

        <footer>
            <div class="copyright-contact">
                <p>@Copyright</p>
            </div>
            <div class="copyright-contact"></div>
            <div class="copyright-contact">
                <p class="entry"><a href="./contact.html">Contact</a></p>
            </div> 
        </footer>

        <script src="./script.js"></script>
        <!-- <a href="https://fr.rs-online.com/web/p/ampoules-led/2317015?cm_mmc=FR-PLA-DS3A-_-google-_-CSS_FR_FR_Eclairage_Whoop-_-(FR:Whoop!)+Ampoules+LED+(2)-_-2317015&matchtype=&pla-304251699511&gclid=Cj0KCQjwsIejBhDOARIsANYqkD3cnOmCQR1EKiZqq5ZAjXrGqGC1az3mbTkap0vXbTuPKZt4ACuJ9CEaAlmZEALw_wcB&gclsrc=aw.ds"></a> -->
    </body>
</html>