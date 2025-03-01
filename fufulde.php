<?php
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
		<script>
		let subMenu = document.getElementById("subMenu");
		function toggleMenu(){
			subMenu.classList.toggle("open-menu");
		}
		</script><br>
		<h1 style="color: #34495E; text-align: center;">Apprendre le Fufulde</h1><br><br>
		<div class="abc">
					<h2>Niveau 1</h2>
					<p>Les Salutations...</p><br>
					<a href="salutation_douala.php"><button class="yve">Commencer la Leçon</button></a>
			</div>
			<br>
			<div class="abc">
				<h2>Niveau 2</h2>
					<p>Les Verbes...</p><br>
					<a href="verbe_douala.php"><button class="yve">Commencer la Leçon</button></a>
			</div>
			<br>
			<div class="abc">
				<h2>Niveau 3</h2>
					<p>Les Expressions...</p><br>
					<a href="Expressions_douala.php"><button class="yve">Commencer la Leçon</button></a>
			</div>
			<br>
			<div class="abc">
				<h2>Niveau 4</h2>
					<p>Les Conversations...</p><br>
					<a href="conversation_douala.php"><button class="yve">Commencer la Leçon</button></a>
			</div>
			<br>
</body>
</html>