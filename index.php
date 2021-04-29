<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Developer Center</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/style_login.css">
    <link rel="stylesheet" href="css/style_sigin.css">
    <link rel="icon" href="images/dc_icon1.png">
    <script src="js/app.js" defer></script>
    <script src="js/burger.js" defer></script>
</head>
<body>
    <div class="header">
        <img src="images/dc_icon1.png" alt="" class="header-logo">
        <div class="header-burger">
            <span></span>
        </div>
        <ul class="header-nav">
            <li class="header-nav-titles"><a href="#" class="header-nav-titles-links">Acceuil</a></li>
            <li class="header-nav-titles"><a href="#" class="header-nav-titles-links">Equipes</a></li>
            <li class="header-nav-titles"><a href="#" class="header-nav-titles-links">Infos</a></li>
        </ul>
    </div>
    <div class="login">
        <h2 class="login-title">Connectez vous</h2>
        <form action="acceuil.php" method="post" class="login-data">
            <input type="email" name="login-data-email" class="login-data-input login-data-email" placeholder="Entrez votre email" required>
            <input type="password" name="login-data-password" class="login-data-input login-data-password" placeholder="Entrez votre mot de passe" required> 
            <img src="images/eye.png" class="login-data-password-marked">
            <img src="images/invisible.png" class="login-data-password-marked-active">
            <input type="submit" class="login-data-button" value="SE CONNECTER">
        </form>
        <div class="hr"></div>
        <div class="login-footer">
            <p class="login-footer-sigin">Vous n'avez pas de compte ? <span>Creer un</span></p>
        </div>     
    </div>
    <div class="sigin">
        <h2 class="sigin-title">Inscrivez vous</h2>
        <form action="acceuil.php" method="post" class="sigin-data">
            <input type="text" name="sigin-data-pseudo" class="sigin-data-input sigin-data-pseudo" placeholder="Entrez votre pseudo" required>
            <input type="email" name="sigin-data-email" class="sigin-data-input sigin-data-email" placeholder="Entrez votre email" required>
            <input type="password" name="sigin-data-password" class="sigin-data-input sigin-data-password" placeholder="Entrez votre mot de passe" required> 
            <input type="password" name="sigin-data-veri-password" class="sigin-data-input sigin-data-veri-password" placeholder="Confirmez votre mot de passe" required><br>
            <img src="images/eye.png" class="sigin-data-password-marked">
            <img src="images/invisible.png" class="sigin-data-password-marked-active">
            <input type="submit" class="sigin-data-button" value="S' INSCRIRE">
        </form>
        <div class="hr"></div>
        <div class="sigin-footer">
            <p class="sigin-footer-login">Vous avez deja un compte ? <span>Connectez vous</span></p>
        </div>  
    </div>
    <div class="footer">
        <p class="footer-autor">DeveloperCenter | 17 Avril 2021 | &copy; Tout drois reserves | <a href="mailto:leonelngoya@gmail.com" class="footer-autor-mail">LN-Development</a></p>
        <div class="footer-contacts">
            <a href="mailto:devcenter2021@gmail.com" class="footer-contacts-gmail"><img class="footer-contacts-logo" src="images/gmail.png" alt="gmail"></a>
            <a href="https://www.github.com/ln-dev7" class="footer-contacts-github"><img class="footer-contacts-logo" src="images/github.png" alt="github"></a>
            <a href="https://twitter.com/dev__center?s=09" class="footer-contacts-twitter"><img class="footer-contacts-logo" src="images/twitter.png" alt="Twitter"></a>
            <a href="https://www.instagram.com/invites/contact/?i=1cc3j464sjmrp&utm_content=lradltq" class="footer-contacts-instagram"><img class="footer-contacts-logo" src="images/instagram.png" alt="instagram"></a>
        </div>
    </div>
</body>
</html>