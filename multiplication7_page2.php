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
            .madiv {
                    width: 300px;
                background-color: beige;
                    position:absolute;
                    left:10%;    
            }
            h3 , p { padding-left: 10px;}
		</style>
		<script type="text/javascript">
		/* Mes scripts  */
		
		</script>
	</head>
	<body>
	<!-- Mes balises HTML  -->
        <div class="madiv">
            <?php
            echo "<h3>table de multiplication par 7</h3>";
                $calc = 0;
                for ($var=1;$var <= 10;$var++) {
                    $calc = $var * 7;
                    echo "<p>$var fois 7 = $calc</p>\n";
                }
            ?>        
        </div>

	</body>
</html>