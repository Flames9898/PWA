<!DOCTYPE html>
<html lang="hr">
	<head>
		<title>The Tech Suite</title>
		<meta charset="UTF-8">
		<link type="text/css" rel="stylesheet" href="style.css">
	</head>
	<body>
		<?php require_once 'nav.html'; ?>
		<section id="phpCentre">
			<?php
				$picture=$_FILES['slikaP']['name'];
				$target='images/'.$picture;
				$tempname=$_FILES['slikaP']['tmp_name'];
				move_uploaded_file($_FILES['slikaP']['tmp_name'],$target);
				$nazivP=$_POST["nazivP"];
				$sifraP=$_POST["sifraP"];
				$kategorijaP=$_POST["kategorijaP"];
				$opisP=$_POST["opisP"];
				$cijenaP=$_POST["cijenaP"];
				if(isset($_POST['arhivirajP'])){
					$arhivirajP=true;
				}
				else $arhivirajP=false;

				$dbc=mysqli_connect('localhost', 'root', '', 'proizvodi') or die('Error connecting to MySQL server!');
				$query="INSERT INTO proizvod (naziv,sifra,kategorija,opis,cijena,slika,arhivirano) VALUES 
				('$nazivP','$sifraP','$kategorijaP','$opisP','$cijenaP','$picture','$arhivirajP');
				";
				$result=mysqli_query($dbc,$query) or die("Error parsing a query!");
				mysqli_close($dbc);

				echo '<h1>'.$nazivP.'</h1>
					<img src="'.$target.'" width="350"><br />
					<p>Kod: '.$sifraP.'</p>
					<p>Cijena: '.$cijenaP.'kn</p>
					<p>Kategorija: '.$kategorijaP.'</p>
					<p>Opis: '.$opisP.'</p><br />
					<p>Arhivirano: ';
				if($arhivirajP)echo 'Da';
				else echo 'Ne';
				echo'<P>';
			?>
		</section>
		<?php require_once 'foot.html'; ?>
	</body>
</html>		