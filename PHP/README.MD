PHP file extension: index.php
=============================

<?php

	echo "Ahoj WD2!";

	/*
	a. Integer : Whole Numbers
	b. Float : Decimal Numbers
	c. String : Strings or characters
	d. Boolean : true or false
	e. Array : Multiple Items
	f. Object : A Object defined by a class
	*/

	$variable = "Toto je moja premenná";
	echo $variable;


	$cislo1 = 10;
	$cislo2 = 5;
	$suma = $cislo1 + $cislo2;
	echo $suma;


	//konštanty
	define('PI', 3.1415926);


	// Aritmetické operácie
	echo "</br></br>5 + 2 = " . (5 + 2);
	echo "</br>5 - 2 = " . (5 - 2);
	echo "</br>5 * 2 = " . (5 * 2);
	echo "</br>5 / 2 = " . (integer) (5 / 2);
	echo "</br>5 % 2 = " . (5 % 2) . "</br></br>";
	// +=, -=, *=, /=, %=, .=


	$meno = "Super študent";
	echo "Ahoj " . $meno;


	$login = true;
	if ($login == true) {
		echo "Si prihlásený ...";
	} else {
		echo "Prosím, prihlás sa ...";
	}


	// Comparison Operators : ==, !=, <, >, <=, >=
    // === (rovná sa & rovnaký dátový typ), !== (nerovná sa or iný dátový typ)


	switch($usersName) {
                case "Peťo" :
                    echo "Ahoj Peťo";
                    break;
                case "Martina" :
                    echo "Ahoj Martina";
                    break;
                default :
                    echo "Ahoj vážený užívateľ";
                    break;         
    }


	$num = 0;
    while($num < 20){
        echo ++$num . ', ';
    }


	for($num = 1; $num <= 20; $num++){
        echo $num;
        if($num != 20){
            echo ', ';
        } else {
            break; // or exit() to leave the whole script
        }
    }


	$students = array("Jožko", "Marienka", "Ferko");
	print_r($students);
	echo $students[2];
	foreach ($students as $student) {
		echo $student . ' ';
	}


	 $customers = array(array('Maťo', 'Hlavná 1', '85032'),
                        array('Peťo', 'Vedľajšia 22', '56488'),
                        array('Marienka', 'Najkrajšia 333', '91563'));
    for($row = 0; $row < 3; $row++){
        for($col = 0; $col < 3; $col++){
            echo $customers[$row][$col] . ', ';
        }
        echo '</br>';
    }



	$customer = array('Name'=>$usersName, 'Street'=>$streetAddress, 'City'=>$cityAddress);
    foreach($customer as $key => $value){
        echo $key . ' : ' . $value . '</br>';
    }



	$cisla = array(9, 4, 6);
	$suma = 0;
	foreach ($cisla as $cislo) {
		$suma = $suma + $cislo;
	}
	echo $suma;


	<form action="process.php" method="get">
		Zadaj svoje meno: <input type="text" name="meno" size="20">
		Zadaj svoje priezvisko: <input type="text" name="priezvisko" size="20">
		<input type="submit" value="Odoslať">
	</form>
	//process.php:              - jednoriadkový komentár (/* viacriadkový */)
	<?php
	    echo "<p>Údaje prijaté z \"formulára\":</p>"	//'' - ignorujú escape sekvencie
		echo date('l, j. F Y H:i:s');
		$meno = $_GET["meno"];
		$priezvisko = $_GET["priezvisko"];
		echo "Ahoj " . $meno . " " . $priezvisko;
	?>
	/* Echos the date
				h : 12 hr format
				H : 24 hr format
				i : Minutes
				s : Seconds
				u : Microseconds
				a : Lowercase am or pm
				l : Full text for the day
				F : Full text for the month
				j : Day of the month
				S : Suffix for the day st, nd, rd, etc.
				Y : 4 digit year
			*/




?>

REDIRECT a WEBPAGE:
===================
// HTML META tag:
<head> 
    <meta http-equiv="Refresh" content="0; URL=https://example.com/">
</head>

// PHP:
<?php 
    header('Location: http://www.example.com');	// returns 302 = temporaly moved
    exit;
?>
OR
<?php
    header('Location: http://www.example.com/', true, 301);	// returns 301 = permanently moved
    exit();
?>

// Javascript:
<script>
	window.location = "http://example.com/";
</script>

