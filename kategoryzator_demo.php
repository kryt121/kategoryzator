<?php


function kategoryzacja($service, $impact, $serviceAvailability){
	#INPUT:
	#$service	usługa - id
	#$impact	liczba klientów
	#$serviceAvailability	dostępność 0 - nie działa - 100 działa
	
	
        //to będzie w bazie danych:
	$myService['name'] = "Neostrada";
	$myService['impactP2']= 1000;
	$myService['impactP1']= 20000;
	
	
	#id_usluga z DZ
	$configuration = array();
	$configuration[5]=$myService;
        //o dotąd

	$priority="UNKNOWN PRIORITY";
	if (isset($configuration[$service])) {
		echo "\nCoś będzie!\n";	
	        $priority="P3";	
		$meet=$configuration[$service];
		echo $meet['name'];
		echo "\n";
		$condition=$impact*((100-$serviceAvailability)/100);
		if ($condition>=$meet['impactP2']){
			$priority="P2";
		}
		if ($condition>=$meet['impactP1']){
			$priority="P1";
		}
	}
	return $priority;
}



echo "kategoryzator  v2023.01\n";


echo('$kategoria=kategoryzacja(5, 70000, 0);');
$kategoria=kategoryzacja(5, 70000, 0);


echo "Określona kategoria ------>   ";
echo $kategoria;
echo "\n";


?>
