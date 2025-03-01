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
    <link rel="stylesheet" type="text/css" href="css/expression.css">
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
		</script><br><br>
		<p><u><h1 style="text-align: center; color: #34495E;">Les expressions</h1></u></p><br>
		<p><u><h2 style="text-align: center; color: #34495E;">Bienvenue dans cette nouvelle leçon</h2></u></p><br>
		<p><h3 style="color: #34495E;">&nbsp&nbspLes expressions sont la Base de toutes les langues maternelles Camerounaise. Ici bas vous retrouverez differentes expressions les plus utilisees dans <br>&nbsp&nbspcette langue ainsi que des audio pour vous integrer dans les diverses manieres de prononces ces expressions</h3></p><br><br>


<center>
		<table cellspacing="3" cellpadding="6" border="1" style="text-align: center;">
<tbody>
<tr bgcolor="white" style="color:black"> 
<td class="bar" ><strong><h2>français</h2></strong></td>
<td class="bar"><strong><h2> English</h2></strong></td>
<td class="lang"><strong><h2>Duala</h2></strong></td>
<td class="lang"><strong><h2>Prononciation</h2></strong></td>

</tr>
<tr>
<td>Mon nom est ...</td>
<td>My name is
...</td>
<td>Dina lâm na ...</td>
<td class="vo"><audio controls><source src="audio/essai.opus" type="audio/mp3"></audio></td>
</tr>
<tr>
<td>salut</td>
<td>hello, hi</td>
<td>mône</td>
</tr>
<tr>
<td>mal, mauvais</td>
<td>bad</td>
<td>bobe</td>

</tr>
<tr>
<td>bien,bon</td>
<td>good, well</td>
<td>bwâm</td>
</tr>
<tr>
<td>bonne matinée à toi</td>
<td>good morning</td>
<td>idib á bwầm e</td>
</tr>
<tr>
<td>
merci.
<br>
Je remercie. Je salue </td>
<td>
thanks, thank you 
</td>
<td>
na sôm.
<br>
Na masóma
</td>
</tr>
<tr>
<td>a toi aussi</td>
<td>you too</td>
<td>na oa pé</td>
</tr>
<tr>
<td>de rien</td>
<td>don't mention it</td>
<td>é tìti lambo</td>
</tr>
<tr>
<td>au revoir</td>
<td>goodbye, bye</td>
<td>na má alà</td>
</tr>
<tr>
<td>a un autre jour</td>
<td>see you later</td> 
<td>buna bópépe</td>
</tr>
<tr>
<td>Comment ca va ?</td>
<td>How are you?</td>
<td>E ma ala nê ?</td>

</td>
<tr>
<td>Je vais bien</td>
<td>I am fine</td>
<td>E ma ala</td>
</tr>
<tr>
<td>Quoi de neuf ?</td>
<td>what's up?</td>
<td>Njé yé péná ?</td>
</tr>
<tr>
<td>rien de nouveau</td>
<td>Nothing new</td>
<td>Tô lambo lá pena</td>
</tr>
<tr>
<td>oui</td>
<td>yes</td>
<td>ee</td>
</tr>
<tr>
<td>non</td>
<td>no</td>
<td>kem</td>
</tr>
</tbody>
</table>
</center>
	
	</body>
	</html>