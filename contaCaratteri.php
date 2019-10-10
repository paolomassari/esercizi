<?php
function frequenza ($parola ) 
function contaConsonantiVocali( $parola ) {
	$vocali = 0; 	$consonanti = 0;
	$numeri = 0;
	$posizione = 0;
	while ( $posizione < strlen($parola) ) {
		$c = substr( $parola, $posizione, 1);
		if ( $c >= 'a' && $c <= 'z' ) { 
			if ( $c == 'a' || $c == 'e' || $c == 'i' 
				|| $c == 'o' || $c == 'u' || $c == 'y' ) 
				$vocali++;
			else 
				$consonanti++;
		}
		if ( $c >= '0' && $c <= '9' ) 
			$numeri++;
		$posizione++;

	}
	$lettere[0] = $vocali; $lettere[1] = $consonanti; $lettere[2] = $numeri;

	return $lettere;
}


if(isset($_POST['submit'])){
	if ( isset($_POST['parola']) ) {
		$parola = $_POST['parola'];
		if ( is_numeric ($parola)  )
			die("inserisci una parola");
			
		$lettere = contaConsonantiVocali($parola);
		echo "vocali : " . $lettere[0] . " consonanti: " . $lettere[1] . 
			" numeri: " . $lettere[2]; 

	}

}

?>