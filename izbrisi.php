<?php
    $sifra=$_POST["sifra"];	
    $dbc=mysqli_connect('localhost', 'root', '', 'proizvodi') or die('Error connecting to MySQL server!');
	        $res=mysqli_query($dbc,'SELECT * FROM proizvod WHERE sifra="'.$sifra.'";');
			$row=mysqli_fetch_array($res);
			$target="images/".$row["slika"];
			$real=realpath($target);
			if(is_writable($real)) unlink($real);
			$query='DELETE FROM proizvod WHERE sifra="'.$sifra.'";';
	        $result=mysqli_query($dbc,$query) or die("Error parsing a query!");
    mysqli_close($dbc);
    header("Location: http://localhost/pwa/administrator.php");
    exit();
?>