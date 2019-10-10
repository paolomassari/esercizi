<?php
function tabellina ( $n ) {
	echo "<TABLE border=1>"; 
	echo "<TR>";
	for ( $i = 1; $i <= 10; $i++ ) 
		echo "<TD>". $i * $n . "</TD>";
	echo "</TR>"; echo "</TABLE>";
}

if(isset($_POST['submit'])){
	if ( isset($_POST['num']) ) {
		$num = $_POST['num'];
		// $v = is_numeric ($num) ? true : false;
		if ( !is_numeric ($num)  )
			die("inserisci un numero");
		echo "La tabellina del $num:"; 
		tabellina($num);
	}
}

?>