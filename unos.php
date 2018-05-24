<!DOCTYPE html>
<html lang="hr">
<head>
		<title>The Tech Suite</title>
		<meta charset="UTF-8">
		<link type="text/css" rel="stylesheet" href="style.css">
	</head>
	<body>
    <?php require_once 'nav.html'; ?>
<section>
    <form action="skripta.php" enctype="multipart/form-data" method="POST" id="forma" name="forma">
        <input type="hidden" name="MAX_FILE_SIZE" value="1048576" />

        <label for="naziv">Naziv: </label>
        <input  id="naziv" name="nazivP" type="text"><br />
		<div style="color:red;display:none" id="nazivF"></div>

        <label for="sifra">Šifra: </label>
        <input  id="sifra" name="sifraP" type="text"><br />
		<div style="color:red;display:none" id="sifraF"></div>

        <label for="kategorija">Kategorija: </label>
        <select id="kategorija" name="kategorijaP">
            <option value="1"></option>
            <option value="Grafička Kartica">Grafička Kartica</option>
            <option value="Monitor">Monitor</option>
            <option value="Periferija">Periferija</option>
            <option value="Ostalo">Ostalo</option>
        </select><br />
		<div style="color:red;display:none" id="kategorijaF"></div>

        <textarea  id="opis" placeholder="Kratki opis proizvoda." name="opisP"></textarea><br />
		<div style="color:red;display:none" id="opisF"></div>

        <label for="cijena">Cijena: </label>
        <input  type="text" id="cijena" name="cijenaP">kn<br />
		<div style="color:red;display:none" id="cijenaF"></div>

        <label for="slikaProizvoda">Slika: </label>
        <input  type="file" value="Odaberi datoteku" id="slikaProizvoda" name="slikaP"><br />
		<div style="color:red;display:none" id="slikaF"></div>

        <input type="checkbox" id="arhiviraj" name="arhivirajP" value="true">
        <label for="arhiviraj">Arhiviraj proizvod</label><br />

        <input id="sub" class="submit" type="submit" value="Pohrani">
    </form>
</section>
	<script type="text/javascript">
	document.getElementById("sub").onclick=function(event){
		var ok=true;
		var n1=document.getElementById("naziv").value, n2=document.getElementById("nazivF");
		var s1=document.getElementById("sifra").value, s2=document.getElementById("sifraF");
		var k1=document.getElementById("kategorija").value, k2=document.getElementById("kategorijaF");
		var o1=document.getElementById("opis").value, o2=document.getElementById("opisF");
		var c1=document.getElementById("cijena").value, c2=document.getElementById("cijenaF");
		var sl1=document.getElementById("slikaProizvoda").value, sl2=document.getElementById("slikaF");
		var arhiva=document.getElementById("arhiviraj");
		if(n1.length<5 || n1.length>30){
			ok=false;
			n2.innerHTML="Naziv Proizvoda mora imati između 5 i 30 znakova!";
			n2.style.display="block";
			n2.style.fontSize="75%";
			document.getElementById("naziv").style.border="2px solid red";
		}
		else{
			n2.style.display="none";
			document.getElementById("naziv").style.border="1px solid black";		
		}
		if(k1=="1"){
			ok=false;
			k2.innerHTML="Kategorija Proizvoda mora biti odabrana!";
			k2.style.display="block";
			k2.style.fontSize="75%";
			document.getElementById("kategorija").style.border="2px solid red";
		}
		else{
			k2.style.display="none";
			document.getElementById("kategorija").style.border="1px solid black";		
		}
		if(s1.length!=10){
			ok=false;
			s2.innerHTML="Šifra Proizvoda mora imati točno 10 znakova!";
			s2.style.display="block";
			s2.style.fontSize="75%";
			document.getElementById("sifra").style.border="2px solid red";
		}
		else{
			s2.style.display="none";
			document.getElementById("sifra").style.border="1px solid black";
		}
		if(o1.length<10 || o1.length>100){
			ok=false;
			o2.innerHTML="Opis Proizvoda mora imati između 10 i 100 znakova!";
			o2.style.display="block";
			o2.style.fontSize="75%";
			document.getElementById("opis").style.border="2px solid red";
		}
		else{
			o2.style.display="none";
			document.getElementById("opis").style.border="1px solid black";
		}
		if(!c1.length>0){
			ok=false;
			c2.innerHTML="Cijena Proizvoda mora biti navedena!";
			c2.style.display="block";
			c2.style.fontSize="75%";
			document.getElementById("cijena").style.border="2px solid red";
		}
		else {
			c2.style.display="none";
			document.getElementById("cijena").style.border="1px solid black";
		}
		if(sl1==""){
			ok=false;
			sl2.innerHTML="Slika Proizvoda mora biti navedena!";
			sl2.style.display="block";
			sl2.style.fontSize="75%";
			document.getElementById("slikaProizvoda").style.border="2px solid red";
		}
		else{
			sl2.style.display="none";
			document.getElementById("slikaProizvoda").style.border="0px";
		}
		if(ok && arhiva.checked){
			if(!confirm ("Jeste li sigurni da želite arhivirati ovaj proizvod?")) ok=false;
		}

		if(!ok)event.preventDefault();
	}
	</script>
		<?php require_once 'foot.html'; ?>
	</body>
</html>