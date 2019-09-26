
<?php
if (isset($_POST['submit'])) {
	if(isset($_POST['radio']))
	{
		echo "<span>Hai scelto :<b> ".$_POST['radio']."</b></span>";
	}
	else{ 
		echo "<span>scegli un radio button.</span>";
	}
}

?>
