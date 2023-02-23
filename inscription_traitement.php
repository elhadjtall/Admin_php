<?php  require_once('bdd.php') ?>
<p><a href="http://localhost/cours-php/inscription.php">Inscription</a></p>
<?php  require_once('bdd.php') ?>

<?php

if (isset($_POST['nom']) AND isset($_POST['prenom']) AND isset($_POST['email']) AND isset($_POST['password']))
{
    // echo $_POST['nom']."<br/>";
    // echo $_POST['prenom']."<br/>";
    // echo $_POST['email']."<br/>";
    // echo $_POST['password']."<br/>";

$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$email=$_POST['email'];
$password=$_POST['password'];
if(empty($nom))
{
    echo "Veuillez renseigner un nom svp"."<br/>";
}
if(empty($prenom)){
    echo "Veuillez renseigner un prenom svp"."<br/>";
}
if(empty($email)){
    echo "Veuillez renseigner un mail svp" ."<br/>";
}
if(empty($password)){
    echo "Veuillez saisir un mot de pass svp"."<br/>";
}
}