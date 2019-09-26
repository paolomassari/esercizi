
<?php
if(isset($_POST['submit'])){
	if(!empty($_POST['Color'])) {
		echo "<span>Hai scelto :</span><br/>";

		foreach ($_POST['Color'] as $select)
		{
			echo "<span><b>".$select."</b></span><br/>";
		}
	}
	else { 
		echo "<span>Scegli almeno un colore.</span><br/>";
	}
}
?>
