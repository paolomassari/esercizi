<!DOCTYPE html>
<html>
<head>
<title>Esercizio 61 pag b76 </title> <!-- Include CSS File Here-->
<link href="css/style.css" rel="stylesheet">
</head>
<body>
<BR>
<?php include 'reloadVar.php'; ?>

<div class="container">
	<div class="main">
		<form action="#" method="post">
			<label class="heading"> parola/frase: </label>
				<input type="text" name="parola" value="<?php echo $parola; ?>">
				<input type="submit" name="submit" value="analizza" />
		</form>
		<BR>	
		
		<?php include 'contaCaratteri.php'; ?>
		
	
	</div>
</div>
</body>
</html>

