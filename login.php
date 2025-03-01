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

// Requête pour récupérer tous les enregistrements de la table
$sql = "SELECT * FROM users ORDER BY noms Asc";
$result = $bdd->query($sql);

//on récupère les données
$articles=$result->fetchAll();
$s=0.0;
if(isset($_POST['ok'])){
    $nom = $_POST['nom_utilisateur'];
    $_SESSION['NU']=$_POST['nom_utilisateur'];
    $pass = $_POST['password'];
    $voir = $bdd->prepare('SELECT * FROM users WHERE noms = ?');
    $voir2= $bdd->prepare('SELECT * FROM users WHERE passwords = ?');
    $voir->execute(array($nom));
    $voir2->execute(array($pass));
    /*if($voir->rowCount() > 0 and $voir2->rowCount() > 0){
        echo "bienvenue";
        header("Location : login.php");
    }*/
    if($voir->rowCount() ==0){
        $requete = $bdd->prepare("INSERT INTO users(noms, passwords) VALUES(?,?)");
        $requete->execute(array($nom, $pass));
        $url = "http://localhost/Projet%20de%20Developpement%20Web/page.php";
        header("Location:$url");
        exit();
        /*echo"Les infirmations enregistrer sont:" ."<br/>" ."<br/>";
        printf("    votre noms :");echo $nom ."<br/>";
        printf("<br/>"."votre mot de passe :");echo $pass ."<br/>";*/
    }
    else{
        $msgErreur = "une erreur est survenue";
        /*echo $msgErreur;*/
    }
    /*$reponse = $requete->fetchAll(PDO::FETCH_ASSOC);
    var_dump($reponse);
    echo"enregistrer";*/
}
else{

    $erreu="ce nom utilisateur existe deja";
    /*print($erreu);
    $url = "http://localhost/testphp/connexion.html";
    header("Location:$url");
    exit();*/
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Inscrivez vous</title>
</head>
<body>
<link rel="stylesheet" href="css/st.css" type="text/css">
<strong><h1 class="left"><font face="Arial black">MANABU</font></h1></strong>
<div class="body-content">
  <div class="module">
    <h1>INSCRIVEZ-VOUS ICI</h1>
    <form class="form"  method="POST" enctype="multipart/form-data" autocomplete="off">
      <div class="alert alert-error"></div>
      <input type="text" placeholder="Nom" name="Nom" required />
      <input type="text" placeholder="Prenom" name="Prenom" required />
      <input type="text" placeholder="Nom utilisateur" name="nom_utilisateur" required />
      <input type="password" placeholder="Mot de passe" name="password" autocomplete="new-password" required />
      <input type="text" placeholder="Votre langue(Francais ou Anglais)" name="Langue" required />
      
      <input type="submit" value="Creer le compte" name="ok" class="btn btn-block btn-primary" />
    </form>
  </div>
</div>

</body>
</html>