<!DOCTYPE html>
<html lang="hr">
	<?php
	require_once 'nav.html';
	?>
		<section>
			<form action="skripta.php" method="POST" id="forma" name="forma">
				<label for="naziv">Naziv: </label>
				<input required id="naziv" name="nazivP" type="text"><br />
				
				<label for="sifra">Šifra: </label>
				<input required id="sifra" name="sifraP" type="text"><br />
				
				<label for="kategorija">Kategorija: </label>
				<select id="kategorija" name="kategorijaP">
					<option value="Grafička Kartica">Grafička Kartica</option>
					<option value="Monitor">Monitor</option>
					<option value="Periferija">Periferija</option>
					<option value="Ostalo">Ostalo</option>
				</select><br />
				
				<textarea required id="opis" placeholder="Kratki opis proizvoda." name="opisP"></textarea><br />
				
				<label for="cijena">Cijena: </label>
				<input required type="text" id="cijena" name="cijenaP"><br />
				
				<label for="slikaProizvoda">Slika: </label>
				<input class="button" type="button" value="Odaberi datoteku" id="slikaProizvoda" name="slikaP"><br />
				
				<input type="checkbox" id="arhiviraj" name="arhivirajP">
				<label for="arhiviraj">Arhiviraj proizvod</label><br />
				
				<input class="submit" type="submit" value="Pohrani">
			</form>
		</section>
		<?php
		require_once 'foot.html';
		?>
	</body>
</html>