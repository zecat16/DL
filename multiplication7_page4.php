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
                    width : 350px;
                    background-color:beige;
                    left:10%;    
            }
            h3 , p {padding-left: 10px;}
            .result {color:red;}
		</style>
		<script type="text/javascript">
		/* Mes scripts  */
		
		</script>
	</head>
	<body>
	<!-- Mes balises HTML  -->
        <div class="madiv">
            <h3>table de multiplication par 7 FOREACH</h3>
            <?php
                $calc = 0;
                $tableau=array(1, 2 ,3 ,4 ,5 ,6 ,7 ,8 ,9 ,10);
            // var_dump($tableau);
            foreach ($tableau as $value) {
                        $calc=$value*7;
                    echo "<p>".$value." fois 7 = <span class='result'>$calc</span></p>\n";                    
                }
            foreach  ($_SERVER as $key=>$valeur)
            {
                        echo "<p style='color:blue'>".$key." : <span style='color:black'>".$valeur." /span></p>\n";
                    }
            ?>        
        </div>


	</body>
</html>