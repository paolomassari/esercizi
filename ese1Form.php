<P> Per selezionare i colori utilizza Ctrl + click sinistro </P>
<form action="#" method="post">
	<P>
	<select name="Color[]" > 
		<option value="Red">Red</option>
		<option value="Green">Green</option>
		<option value="Blue">Blue</option>
		<option value="Pink">Pink</option>
		<option value="Yellow">Yellow</option>
	</select>
	</P>
	<input type="submit" name="submit" value="scegli un valore" />
</form>
<?php
if(isset($_POST['submit'])){
	foreach ($_POST['Color'] as $select) {
		echo "<P>Hai selezionato :" .$select . "</P>"; 
	}
}
?>
