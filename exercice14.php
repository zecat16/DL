<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="UTF-8">
		<title>Exercice 14</title>
		<meta name="robots" content="all"/>
		<meta name="description" content="Modèle"/>
		<meta name="author" content="DL2017-2018"/>
<!--		<link href="styles.css" rel="stylesheet">
				<script type="text/javascript" src="scripts.js"></script>-->
		<style type="text/css">
		/* Mes feuilles de style  */
		</style>
		<script type="text/javascript">
		/* Mes scripts  */
		</script>
	</head>
	<body>
    <?PHP
        $text="Jean-Christophe";
        $text1='';
        $text2=array(1,2,3);
        $text3=false;
        $text4=3e18;
        $text5=192;
        $text6=null;
        $x=gauche($text,7);
        $y=droite($text,7);
        var_dump($x);
        echo $x;
        var_dump($y);
        echo $y;
        function gauche ($var,$nb) {
            $resultat='';
            $nbargs = func_num_args();
            if ($nbargs!=2) {
                if (nbargs ==1) {
                    if (is_string($var)) {
                        $res=$var;
                    }
                } else {
                    
                }
            } elseif (empty($var)){
                echo "yoho";
            } elseif (is_object($var) || is_array($var)) {
                echo "Heho";
            } elseif(!is_int($nb) || $nb <= 0 ) {
               echo "ici";
            } elseif ($nb > strlen($var)) {
                $resultat=substr($var,0);
            }
            else {
                $resultat=substr($var,0,$nb);
            }

            
            return $resultat;
        }

        function droite ($var,$nb) {
            $resultat='';
            $nbargs = func_num_args();
            if ($nbargs!=2) {
                if (nbargs ==1) {
                    if (is_string($var)) {
                        $res=$var;
                    }
                } else {
                    
                }
            } elseif (empty($var)){
                echo "yoho";
            } elseif (is_object($var) || is_array($var)) {
                echo "Heho";
            } elseif(!is_int($nb) || $nb <= 0 ) {
               echo "ici";
            } elseif ($nb > strlen($var)) {
                $resultat=substr($var,0);
            }
            else {
                $resultat=substr($var,-$nb);
            }

            
            return $resultat;
        }
        
        
    ?>




	</body>
</html>