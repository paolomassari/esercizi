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
tabelline();
?>