?php
session_start();
$_yv=$_SESSION['NU'];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/essa.css">
</head>
<body>
    <div class="hero">
        <nav>
            <img src="image/logo.png" class="logo">
            <ul>
                <li class="yven"><a href="page.php">Home</a></li>
                <li class="yven"><a href="">Evolution</a></li>
                <li class="yven"><a href="#nousvoir">Contact</a></li>
                <li class="yven"><a href="#nousvoir">Savoir plus</a></li>
            </ul>
            <img src="image/user.png" class="user-pic" onclick="toggleMenu()">
            <div class="sub-menu-wrap" id="subMenu">
                <div class="sub-menu">
                    <div class="user-info">
                        <img src="image/user.png">
                        <h2><?php echo $_yv;    ?></h2>
                    </div>
                    <hr>

                    <a href="profil.html" class="sub-menu-link">
                        <img src="image/profile.png">
                         <p>Modifier le profil</p>
                         <span>></span>
                    </a>
                    <a href="" class="sub-menu-link">
                        <img src="image/setting.png">
                         <p>Parametres</p>
                         <span>></span>
                    </a>
                    <a href="" class="sub-menu-link">
                        <img src="image/help.png">
                         <p>Aide</p>
                         <span>></span>
                    </a>
                    <a href="connexion.php" class="sub-menu-link">
                        <img src="image/logout.png">
                         <p>Deconnexion</p>
                         <span>></span>
                    </a>
                </div>
            </div>

        </nav><br>
            <h1 class="center" style="color: #34495E;">Bienvenue <?php echo $_yv;    ?><img src="image/sourire.jfif" width="25" height="25" style="text-align: center;"></h1><br><br>

        <h2 class="lo" style="color: #34495E;">Quelle langue souhaitez-vous apprendre?</h2>
        <br>
        <body>
            <div class="abc">
                    <h1>Le Yemba</h1>
                    <p>Elle est parlée par les DSCHANGS(Ouest)</p><br>
                    <a href="Yemba.php"><button class="yve">Commencer a Apprendre</button></a>
            </div>
            <br>
            <div class="abc">
                    <h1>Le Medumba</h1>
                    <p>Elle est parlée par les BAGANGTES(Ouest)</p><br>
                    <a href="Medumba.php"><button class="yve">Commencer a Apprendre</button></a>
            </div>
            <br>
                <div class="abc">
                <h1>Le Nieup</h1>
                    <p>langue originaire de l'ouest parlée par les BANGOUS </p><br>
                    <a href="nieup.php"><button class="yve">Commencer a Apprendre</button></a>
            </div>
            <br>
            <div class="abc">
                <h1>Le Duala</h1>
                    <p>c'est la langue maternelle des DOUALAS<br> de la communaute des SAWAS(littoral)</p><br>
                    <a href="duala.php"><button class="yve">Commencer a Apprendre</button></a>
            </div>
            <br>
            <div class="abc">
                <h1>Le Fufulde</h1>
                    <p>Langue la plus rependue au NORD du Cameroun</p><br>
                    <a href="fufulde.php"><button class="yve">Commencer a Apprendre</button></a>
            </div>
            <br><hr><br>
             <div class="olo" id="nousvoir">
        <section>
            <h2>Langues</h2><br>Nieup<br>Yemba<br>Medumba<br>Duala,Fufulde
        </section>
        <section>
            <h2>Pour en savoir plus</h2><br>Tester manabu gratuitement<br>Faites un essai gratuit<br>Teclecharger l'application<br>Suivez nous sur la plateforme
        </section>
        <section>
            <h2>localisation</h2><br>Cameroun<br>Douala<br>Yaounde<br>Maroua
            
        </section>
        <section>
            <h2>Osez parler</h2><br>Manabu pour etudiants<br>Manabu pour travailleurs<br>Manabu pour enfants<br>Manabu tout court
            
        </section>
          <section>
              <h2>Nous contacter</h2><br>+237655447855<br>+237544888877<br>manabucmr@gmail.com<br>camerManabu@yahoo.com
          </section>
      </div>
</body>
    </div>
    <script>
        let subMenu = document.getElementById("subMenu");
        function toggleMenu(){
            subMenu.classList.toggle("open-menu");
        }

    </script>
    
</body>
</html>