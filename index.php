<?php
	require_once "oop.php";
	require "db.php";
	$text = $_GET['text'];
	if ($_GET['odeslat']){
		for($i=0;$i<10;$i++){
			echo $i.". ".$text."<br>";
		}
	}

	function nasobek($cislo){
		return $cislo*2;
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Maturita</title>
</head>
<body>
	<form >
		<input type="text" name="text">
	</form>

	<?php
		$Auto = New Auto();
		$Auto->setBarva("červena");
		echo($Auto->getBarva()." a ".$Auto->getKola()." kola");

		$query = $mysqli->query("SELECT * FROM karta");
		foreach ($query as $key) {
			echo $key['jmeno_karta'];
		}

		echo(nasobek($_GET['text']))
	?>

</body>
</html>