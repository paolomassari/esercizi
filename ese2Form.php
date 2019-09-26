
<form action="" method="post">
	<P> scegli a quale competizione di corsa partecipi ? </P>
	<P><input type="radio" name="radio" value="100 mt">100 metri</P>
	<P><input type="radio" name="radio" value="200 mt">200 metri</P>
	<P><input type="radio" name="radio" value="1000 mt">1000 metri</P>
	<input type="submit" name="submit" value="Scegli un valore" />
</form>
<?php
	if (isset($_POST['submit'])) {
		if(isset($_POST['radio'])) {
			echo "Hai scelto :".$_POST['radio'];  
		}
	}
?>
