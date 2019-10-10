<?php
function fattoriale( $num ) {
	$fatt = 1;
	while ( $num > 0 ) {
		$fatt = $fatt * $num;
		$num--;
	}
	return $fatt;
}
function control() {
	if(isset($_POST['submitnum'])){
		if ( isset($_POST['numero']) ) {
			$numero = $_POST['numero'];
			if ( !is_numeric ($numero)  )
				die("inserisci un numero");
			if ( $numero < 1 || $numero > 10 )
				die("inserisci un numero compreso fra 1 e 10 ");
			
			echo " il fattoriale di $numero = " . fattoriale($numero);
		}
	}
}
control();
?>