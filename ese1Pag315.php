<!DOCTYPE html>
<html>
<head>
<title>Esercizio 1 dal libro</title> <!-- Include CSS File Here-->
<link href="css/style.css" rel="stylesheet">
</head>
<body>
<?php tabelline(); ?>
<BR>
<div class="container">
	<div class="main">

		<form action="#" method="post">
			<label class="heading"> tabellina del : </label>
				<input type="text" name="num">
				<input type="submit" name="submit" value="calcola" />
		</form>
	</div>
</div>
</body>
</html>
<?php
function tabelline() {
	echo "<TABLE border=1>"; 
	echo "<TR>";
	for ( $j = 1; $j <= 10; $j++ ){
		echo "<TR>";
		for ( $i = 1; $i <= 10; $i++ )
			echo "<TD>". $i * $j . "</TD>";
		echo "</TR>";
	}
	echo "</TABLE>";
}
function tabellina ( $n ) {
	echo "<TABLE border=1>"; 
	echo "<TR>";
	for ( $i = 1; $i <= 10; $i++ ) 
		echo "<TD>". $i * $n . "</TD>";
	echo "</TR>"; echo "</TABLE>";
}

if(isset($_POST['submit'])){
	$num = $_POST['num'];  
	echo "Hai scelto la tabellina del :" .$num; 
	tabellina($num);
}
?>