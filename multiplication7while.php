<?PHP
    header('content-type:text/html;charset=utf-8');
    $titre ="<h3>table de multiplication par 7</h3>\n";
    echo "$titre";
    $var=1;
    $calc = 0;
    while ($var <= 10 ) {
        $calc = $var * 7;
        echo "<p>$var fois 7 = $calc</p>\n";
        $var++;
    }

?>
