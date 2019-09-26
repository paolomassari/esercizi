<form action="#" method="post">
	<select name="Color">
		<option value="Red">Red</option>
		<option value="Green">Green</option>
		<option value="Blue">Blue</option>
		<option value="Pink">Pink</option>
		<option value="Yellow">Yellow</option>
	</select>
<input type="submit" name="submit" value="Scegli un valore" />
</form>
<?php
if(isset($_POST['submit'])){
	$selected_val = $_POST['Color'];  
	echo "Hai scelto :" .$selected_val;  
}
?>