<?php
function is_primo( $num ) {
	$primo=1; 
	$divisori=$num - 1;
	while ( $divisori > 1 ) {
		if ( ($num % $divisori) == 0 )
			$primo = 0;
		$divisori--;
	}
	
	return $primo;
}
function primiMinoriNumero($numero) {
			echo " i primi minori  di $numero = " ;
			for ( $primi = 2; $primi < $numero; $primi++) {
				if (is_primo($primi) == 1) {
					echo "$primi "; $elencoPrimi[] = $primi;
				}
			}
			return $elencoPrimi;
}

if(isset($_POST['submitprimi'])){
	if ( isset($_POST['numero']) ) {
		$numero = $_POST['numero'];
		if ( !is_numeric ($numero)  )
			die("inserisci un numero");
			
		$elencoPrimi = primiMinoriNumero($numero);
	}

}

?>