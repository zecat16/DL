<?PHP
$_POST['prenom']="Jean-Paul"; // simule la réception d'un prénom
$_POST['nom']="Dumont"; // simule la réception d'un nom

foreach ($_POST as $key=>$value){
    $cmd='if (isset($_POST["'.$key.'"])) {
    $'.$key.' = $value;
    unset ($_POST["'.$key.'"]);} else {$'.$key.'="";}';
    //echo $cmd."<br/>";
    eval($cmd);
}
echo $prenom." ".$nom;


/*$prenom='';
recpos('prenom');
var_dump($prenom);

function recpos($param) {
    $cmd='global $'.$param.'; if (isset($_POST["'.$param.'"])) { $'.$param.' = $_POST["'.$param.'"];
        unset ($_POST["'.$param.'"]);}'
        ;
    echo $cmd;
    eval ($cmd);
    echo "<br/>".$prenom;
}*/

/*if (isset($_POST['prenom'])) {
    $prenom = $_POST['prenom'];
    unset ($_POST['prenom']);
} else {
    $prenom = '';
}*/

?>