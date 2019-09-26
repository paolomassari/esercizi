<!DOCTYPE html>
<html>
<head>
<title>Utilizzo di radio Buttons e Scelta Mutipla</title> <!-- Include CSS File Here-->
<link href="css/style.css" rel="stylesheet">
</head>
<body>
<div class="container">
<div class="main">
<h5>Utilizzo di radio Buttons e Scelta Mutipla</h5>
<form action="#" method="post">
<label class="heading">Per selezionare i colori ctrl+ click sx :</label>
	<select multiple name="Color[]">
		<option value="Red">Red</option>
		<option value="Green">Green</option>
		<option value="Blue">Blue</option>
		<option value="Pink">Pink</option>
		<option value="Yellow">Yellow</option>
		<option value="White">White</option>
		<option value="Black">Black</option>
		<option value="Violet">Violet</option>
		<option value="Limegreen">Limegreen</option>
		<option value="Brown">Brown</option>
		<option value="Orange">Orange</option>
	</select>
<?php include'select_value.php'; ?>

<label class="heading">competizione podistica :</label>
	<P><input name="radio" type="radio" value="100">100 mt</P>
	<P><input name="radio" type="radio" value="200">200 mt</P>
	<P><input name="radio" type="radio" value="500">500 mt</P>
	<P><input name="radio" type="radio" value="1000">1000 mt</P>
<?php include'radio_value.php'; ?>
<input name="submit" type="submit" value="Valori scelti">
</form>
</div>
</div>
</body>
</html>