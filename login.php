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
            header('location: home.php');		  
            }else{
            header('location: index.php');
            }
            }else{
            $message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
        }
        }
    }
    include "./header.php";
?>

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
                    <a href="./register.php" class="link-ins">S'INSCRIRE</a>
                    <div class="element-login">
                        <input type="submit" value="LOGIN" name="submit" id="Envoyer">
                    </div>
                    <?php if (! empty($message)) { ?>
                    <p class="errorMessage"><?php echo $message; ?></p>
                    <?php } ?>  
                </form>    
            </section>
        </main>

<?php
include "./footer_home.php";
?>        