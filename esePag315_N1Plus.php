<!DOCTYPE html>
<html>
<head>
<title>Esercizio 1 dal libro</title> <!-- Include CSS File Here-->
<link href="css/style.css" rel="stylesheet">
</head>
<body>
<?php include'tabelline.php'; ?>
<BR>
<div class="container">
	<div class="main">
	
		<form action="#" method="post">
			<label class="heading"> tabellina del	 : </label>
				<input type="text" name="num">
				<input type="submit" name="submit" value="tabellina" />
		</form>
		<BR>	
		<form action="#" method="post">
			<label class="heading"> il fattoriale di	 : </label>
				<input type="text" name="numero">
				<input type="submit" name="submitnum" value="fattoriale" />
		</form>
		<BR>
			<form action="#" method="post">
				<label class="heading">primi minori di: </label>
				<input type="text" name="numero">
				<input type="submit" name="submitprimi" value="primi" />
			</form>
		<?php include 'tabellina.php'; ?>
		<?php include 'controlli.php'; ?>
		<?php include 'primi.php'; ?>
	
	</div>
</div>
</body>
</html>

