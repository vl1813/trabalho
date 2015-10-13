<html>
<body>
<?php 
require("Variaveis.php");
?>
<?php 
$n=1;

	$correta=0;
	
	$errada=0;
	
foreach( $altc as $a ){
	$ind="alternativa".$n;
if( $_GET[$ind]==$a){
	
	echo "Questao:".$n." Correta <br><br>";
	$correta++;
}
else{
	if($a=="1"){
	
	echo " Questao:".$n."Resposta errada. A correta e´: a <br><br>";
	$errada++;
	
	}
	if($a=="2"){
	
	echo " Questao:".$n." Resposta errada. A correta e´: b <br><br>";
	$errada++;
	
	}
	if($a=="3"){
	
	echo " Questao:".$n." Resposta errada. A correta e´: c <br><br>";
	$errada++;
	
	}
}

$n++;

}
echo "<br>Voce errou ".$errada." e acertou ".$correta;
?>
</body>
</html>
