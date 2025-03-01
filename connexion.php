<?php
session_start();
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'utilisateur';

try {
    
    $bdd = new PDO ("mysql:host=$servername;dbname=utilisateur",$username, $password);
    $bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    //echo "connexion reussie !";
    /*foreach ($db->query('SELECT * FROM user') as $row) 
    {
        print_r($row);
    }*/
} 
catch (PDOException $e) 
{
    print "Erreur :" .$e->getMessage() . "<br/>";
    die;  
}


if(isset($_POST['ok'])){
    if(isset($_POST['nom_utilisateur']) && isset($_POST['password'] )){
        //echo 'bienvenu sur cette page';
        //connexion ala base de donnee
        $nom = $_POST['nom_utilisateur'];
        $_SESSION['NU']=$_POST['nom_utilisateur'];
        $pass = $_POST['password'];
        $erreu="";
        $connexion=mysqli_connect($servername, $username, $password, $dbname);
          //insertion des valeur dans la basse de donne form
          //$insection="INSERT INTO utilisateur(email,mdp) VALUES('$email','$mot')";
          //requete pour celectionner les utilisateur de la table
        $req=mysqli_query($connexion,"SELECT * FROM users WHERE noms= '$nom' AND passwords= '$pass'");
        $num_lig=mysqli_num_rows($req);//compte le nombre de ligne ayant raport avec corde sql
        if($num_lig > 0){
            header("Location:page.php");
        }else{

            $erreu="noms ou mot de passe incorrecte";
            echo $erreu;
            /*print($erreu);
            $url = "http://localhost/testphp/connexion.html";
            header("Location:$url");
            exit();*/
            }
       }
    /*$nom = $_POST['nom'];
    $pass = $_POST['pass'];
    $voir = $bdd->prepare('SELECT * FROM users WHERE noms = ?');
    $voir2= $bdd->prepare('SELECT * FROM users WHERE passwords = ?');
    $voir->execute(array($nom));
    $voir2->execute(array($pass));
    if($voir->rowCount() > 0 and $voir2->rowCount()> 0){
        //echo "bienvenue";
        header("Location :logins.php");
        exit();
    }
    /*if($voir->rowCount() ==0){
        $requete = $bdd->prepare("INSERT INTO users(noms, passwords) VALUES(?,?)");
        $requete->execute(array($nom, $pass));
        echo"Les infirmations enregistrer sont:" ."<br/>" ."<br/>";
        printf("    votre noms :");echo $nom ."<br/>";
        printf("<br/>"."votre mot de passe :");echo $pass ."<br/>";
    }*/
    /*else{
        $msgErreur = "c'est ton pb";
        echo $msgErreur;
    }
    /*$reponse = $requete->fetchAll(PDO::FETCH_ASSOC);
    var_dump($reponse);
    echo"enregistrer";*/
}
/*else{
	echo "il y'a eu un probleme";
}*/
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Connectez-vous</title>
</head>
<body>
<link rel="stylesheet" href="css/st.css" type="text/css">
<strong><h1 class="left"><font face="Arial black">MANABU</font></h1></strong>
<div class="body-content">
  <div class="module">
    <h1>CONNECTEZ-VOUS ICI</h1>
    <form class="form" method="Post" enctype="multipart/form-data" autocomplete="off">
      <div class="alert alert-error"></div>
      <input type="text" placeholder="Nom utilisateur" name="nom_utilisateur" required />
      <input type="password" placeholder="Mot de passe" name="password" autocomplete="new-password" required />
      <input type="submit" value="Se connecter" name="ok" class="btn btn-block btn-primary" />
    </form>
  </div>
</div>

</body>
</html>