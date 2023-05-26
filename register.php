<?php
    require('config.php');
    include "./header.php";

    if (isset($_REQUEST['username'], $_REQUEST['email'], $_REQUEST['pass'])){
            // récupérer le nom d'utilisateur 
    $username = stripslashes($_REQUEST['username']);
    $username = mysqli_real_escape_string($conn, $username); 
            // récupérer l'email 
    $email = stripslashes($_REQUEST['email']);
    $email = mysqli_real_escape_string($conn, $email);
            // récupérer le mot de passe 
    $pass = stripslashes($_REQUEST['pass']);
    $pass = mysqli_real_escape_string($conn, $pass);
            
    $query = "INSERT into `users` (username, email, genre, pass)
                VALUES ('$username', '$email', 'user', '$pass')";
    $res = mysqli_query($conn, $query);

        if($res){
        echo "<div class='sucess'>
        <h3>Vous êtes inscrit avec succès.</h3>
        <p>Cliquez ici pour vous <a href='login.php'>connecter</a></p>
        </div>";
        }
            
    }else{
?>
           
        <main class="login-page">
            <section class="container-login">
                    <form class="box" action="" method="post">
                        <div class="element-login-register">
                            <h1>S'inscrire</h1>
                        </div>
                        <div class="element-login-register">    
                            <input type="text" class="box-input" name="username" placeholder="Nom d'utilisateur" required>
                        </div>
                        <div class="element-login-register">    
                            <input type="text" class="box-input" name="email" placeholder="Email" required>
                        </div>
                        <div class="element-login-register">   
                            <input type="password" class="box-input" name="pass" placeholder="Mot de passe" required>
                        </div>
                        <div class="element-login-register">    
                            <input type="submit" name="submit" value="S'inscrire" id="Envoyer_login">
                        </div>
                        <div class="element-login-register">
                            <p>Déjà inscrit ? <a href="login.php" class="link-ins">Connectez-vous ici</a></p>
                        </div>
                    </form>
                          
                <?php if (! empty($message)) { ?>
                <p class="errorMessage"><?php echo $message; ?></p>
                <?php } ?>
            </section>
        </main>
<?php 
} 
include "./footer_home.php";
?>