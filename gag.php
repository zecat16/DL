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
            .madiv {position:absolute;
                    left:30%;    
            }
		</style>
		<script type="text/javascript">
		/* Mes scripts  */
		
		</script>
	</head>
	<body>
	<!-- Mes balises HTML  -->
        <div class="madiv">
            <h3>Grosse table</h3>
            <?php
                $var=1;
                $calc = 0;
                while ($var <=100 ) {
                    $calc = $var * 7;

                    echo "<p>".$var." fois 7 = ".$calc."</p>\n";                    
                    $var++;
                }
            ?>        
        </div>

	</body>
</html>