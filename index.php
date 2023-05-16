<?php
    // var_dump($_GET['id']);
    if (isset($_GET['id']) && !empty($_GET['id'])){
        require_once('connect.php');

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
        <section class="container-login">
            <div class="element-login">
                <h1>LOGIN</h1>
            </div>
            <div class="element-login">
                <input type="text" id="utilisateur" placeholder="Utilisateur">
            </div>

            <label>
                <div class="element-login">
                    <input type="password" id="password" placeholder="Mot de passe" minlength="8" required>
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
            <div class="element-login">
                <input type="submit" value="LOGIN" id="Envoyer_login">
            </div>             

        </section>
    </main>

    <footer>
        <div class="copyright-contact">
            <p>@Copyright</p>
        </div>
        <div class="copyright-contact"></div>
        <div class="copyright-contact">
            <p><a href="./contact.html">Contact</a></p>
        </div> 
    </footer>

    <script src="./script.js"></script>
    <!-- <a href="https://fr.rs-online.com/web/p/ampoules-led/2317015?cm_mmc=FR-PLA-DS3A-_-google-_-CSS_FR_FR_Eclairage_Whoop-_-(FR:Whoop!)+Ampoules+LED+(2)-_-2317015&matchtype=&pla-304251699511&gclid=Cj0KCQjwsIejBhDOARIsANYqkD3cnOmCQR1EKiZqq5ZAjXrGqGC1az3mbTkap0vXbTuPKZt4ACuJ9CEaAlmZEALw_wcB&gclsrc=aw.ds"></a> -->
</body>
</html>