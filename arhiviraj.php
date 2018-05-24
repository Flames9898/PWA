<?php
    $sifra=$_POST["sifra"];
    if(isset($_POST["arh"]))
        $arhivirano=1;
    else $arhivirano=0;
    $dbc=mysqli_connect('localhost', 'root', '', 'proizvodi') or die('Error connecting to MySQL server!');
	        $query='UPDATE proizvod SET arhivirano='.$arhivirano.' WHERE sifra="'.$sifra.'";';
	        $result=mysqli_query($dbc,$query) or die("Error parsing a query!");
    mysqli_close($dbc);
    header("Location: http://localhost/pwa/administrator.php");
    exit();
?>