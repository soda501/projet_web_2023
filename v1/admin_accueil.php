<?php 
/* Vérification ci-dessous à faire sur toutes les pages dont l'accès est
autorisé à un utilisateur connecté. */
session_start();
if(!isset($_SESSION['login'])) //A COMPLETER pour tester aussi le rôle...
{
    
 //Si la session n'est pas ouverte, redirection vers la page du formulaire
header("Location:session.php");
}

if( $_SESSION['role']!='A' && $_SESSION['role']!='R') //A COMPLETER pour tester aussi le rôle...
{
    
 //Si la session n'est pas ouverte, redirection vers la page du formulaire
header("Location:session.php");
}
?>
<html>
<head>
<!--entête du fichier HTML-->
<style>
        body {
            background-color: #CCCCCC; 
        }
    </style>
</head>
<body>
<!--contenu du fichier HTML-->
<h1>ESPACE ADMINISTRATION</h1>
<!--Suite du contenu du fichier HTML-->
<?php
/* Code PHP permettant de souhaiter la bienvenue à l’utilisateur connecté et
d’afficher le détail de son profil. */
$mysqli = new mysqli(...);
if($_SESSION['role']=='A'){
echo "BONJOUR,'".$_SESSION['login']."', <br> vous etes animateur";
}
else if($_SESSION['role']=='R'){
    echo "BONJOUR,'".$_SESSION['login']."', <br> vous etes un responsable";
    }


?>
</body>
</html>