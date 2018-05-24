<!DOCTYPE html>
<html lang="hr">
<head>
    <title>The Tech Suite</title>
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="style.css">
</head>
<body>
    <?php require_once 'nav.html'; ?>
    <section id="listaCenter">
        <strong>Popis Proizvoda:</strong><br /><br />
        <?php
        $dbc=mysqli_connect('localhost', 'root', '', 'proizvodi') or die('Error connecting to MySQL server!');
        $query='SELECT * FROM proizvod;';
        $result=mysqli_query($dbc,$query) or die("Error parsing a query!");
        while($row=mysqli_fetch_array($result)){
        $target="images/".$row["slika"];

        echo '<h1>'.$row["naziv"].'</h1>
        <img src="'.$target.'" width="350"><br />
        <p>Kod: '.$row["sifra"].'</p>
        <p>Cijena: '.$row["cijena"].'kn</p>
        <p>Kategorija: '.$row["kategorija"].'</p>
        <p>Opis: '.$row["opis"].'</p><br />
        <p>Arhivirano: ';
            if($row["arhivirano"])echo 'Da';
            else echo 'Ne';
            echo'<P>
        <form action="arhiviraj.php" method="POST" name="formaArhiviraj">
        <input name="sifra" value="'.$row["sifra"].'" type="hidden">
        <input class="submit" type="submit" value="Arhiviraj" name="arh">
        <input class="submit" type="submit" value="Ne Arhiviraj">
        </form>

        <form action="izbrisi.php" method="POST" name="formaIzbrisi">
        <input name="sifra" value="'.$row["sifra"].'" type="hidden">
        <input class="submit" type="submit" value="Izbriši">
        </form>
        <br /><br />';
        }
        mysqli_close($dbc);
        require_once 'foot.html';
        ?>
    </section>
</body>
</html>
