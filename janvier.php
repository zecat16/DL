<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="UTF-8">
		<title>Titre de la page HTML</title>
		<meta name="robots" content="all"/>
		<meta name="description" content="Modèle"/>
		<meta name="author" content="DL2017-2018"/>
<!--		<link href="styles.css" rel="stylesheet">
				<script type="text/javascript" src="scripts.js"></script>-->
		<style type="text/css">
		/* Mes feuilles de style  */
            table {border-collapse: collapse;}
            table tr td , thead tr th {border:1px solid black;width:100px;}
            thead tr th {background-color: cornflowerblue;}
            table tr td {background-color: burlywood;}
            .annee {text-align:center;}
            .mois {color:blue;font-weight: bold;}
		</style>
		<script type="text/javascript">
		/* Mes scripts  */
		</script>
	</head>
	<body>
        
        <?PHP
        $annee = '2018';
        $mois = 'Janvier';
        echo "<h2 class='annee'>".$annee."</h2>";
        echo "<div class='mois'>".$mois."</div>";
        ?>
        <table>
        <?PHP
        echo "<thead><tr><th>Lundi</th><th>Mardi</th><th>Mercredi</th><th>Jeudi</th><th>Vendredi</th><th>Samedi</th><th>Dimanche</th></tr></thead>";   
        ?>
        <tbody>
        <?php
                $compteur = 0;
                $imin = 1;
                $imax = 7;
                
                while ($compteur <= 31) {
                    echo "<tr>";
                    for ($i = $imin; $i <=$imax; $i++) {
                        if ($compteur>=31) {
                            echo "<td></td>";
                        } else {
                          echo "<td>$i</td>";  
                        }                       

                        $compteur++;
                    }

                    $imin = $imin+7;
                    $imax = $imax +7;
                    echo "\n</tr>";
   
                }
        ?>

        </tbody>
        </table>



	</body>
</html>