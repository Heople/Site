<?php
// Démarrage de la session
session_start();

$_SESSION['Login']=$_POST['Login'] ;
$_SESSION['Password']=$_POST['Password'] ;
// On vérifie si le champ Login n'est pas vide.
// if ($_SESSION['Login']=='')
// Si c'est le cas, le visiteur ne s'est pas loger et subit une redirection
  // { Header('Location:patients.php');   }

// else
{ echo "  <a href src='Disconnect.php'> Se déconnecter </a> || Utilisateur: ". $_SESSION['Login'] ."";  }
// Test De vérification que l'user est bien dans la liste des utilisateurs Mysql
// Connexion à la base de données MySql
$DataBase = mysqli_connect ( "localhost" , "root" , "", "e_kine" ) ;

// Cette table contient la liste des users enregistrés.
// mysqli_select_db ($DataBase,"e-kine");

// Nous allons chercher le vrai mot de passe ( crypté ) de l'utilisateur connecté
// Cryptage du mot de passe donné par l'utilsateur à la connexion par requête SQL
// $Requete ="Select logkine('".$_SESSION['Password']."');";
$Requete ="SELECT Password FROM logkine;";

$Resultat = mysqli_query ($DataBase, $Requete )  or  die(mysqli_error() ) ;


while (  $ligne = mysqli_fetch_array($Resultat)){
// Le vrai mot de passe crypté est sauvergardé dans la variable $RealPasswd
$RealPasswd=$_SESSION['Password'];
}

// Initialisation à Faux de la variable "L'utilisateur existe".
$CheckUser=False;
// On interroge la base de donnée Mysql sur le nom des users enregistrés
$Requete ="Select Password,User From logkine";
$Resultat = mysqli_query ( $DataBase, $Requete )  or  die(mysqli_error() ) ;
  while (  $ligne = mysqli_fetch_array($Resultat)  )
{echo "User : ".$ligne['User'];
// Si l'utilisateur X est celui de la session
    if ( $ligne['User']==$_SESSION['Login'])

    // echo $_SESSION['Login'];
    // echo $ligne['Password'];
    // echo $RealPasswd;
    {
// Alors on vérifie si le mot de passe est le bon
        if ($RealPasswd == $ligne['Password'])

// Si le couple est bon, c’est que l’utilisateur est le bon.
    {
      $CheckUser=True;}
}
}

// Si l'utilisateur n'est toujours pas valide à la fin de la lecture tableau
  if ( $CheckUser==False )
// Redirection vers la fenêtre de connexion.
    {Header('Location:patients.php');}
?>
