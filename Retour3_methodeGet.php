<?PHP
if (isset($_GET['prenom'])) {
    $prenom = $_GET['prenom'];
    unset ($_GET['prenom']);
} else {
    $prenom = '';
}
if (isset($_GET['nom'])) {
    $nom = $_GET['nom'];
    unset ($_GET['nom']);
} else {
    $nom = '';
}
if (isset($_GET['psw'])) {
    $psw = $_GET['psw'];
    unset ($_GET['psw']);
} else {
    $psw = '';
}
if (isset($_GET['nomfich'])) {
    $nomfich = $_GET['nomfich'];
    unset ($_GET['nomfich']);
} else {
    $nomfich = '';
}
//$prenom = "Paul-Louis";
//$nom = "Chateaubriand";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>RETOUR3</title>
<meta charset="UTF-8">
<style type="text/css">
</style>
</head>
<body>
<h3>Vous vous appelez <?PHP echo $prenom.' '.$nom; ?>.</h3>
<h3>Votre mot de passe est : <?PHP echo $psw; ?></h3>
<h4>Fichier choisi : <?PHP echo $nomfich; ?>.</h4>
</body>
</html>