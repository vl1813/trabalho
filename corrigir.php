<html>
<head>
<link rel="stylesheet" type="text/css" href="estilo.css">
 <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="javascript" type="text/javascript" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js">
</head>
<body style=" background-color:#45cde0">
<?php 
require("Variaveis.php");
?>
<br>
<br>
<center><font size="7">Correção</font></center>
<div class= "corrigir" >
<?php 
$n=1;

	$correta=0;
	
	$errada=0;
	
foreach( $altc as $a ){
	$ind="alternativa".$n;
if( $_GET[$ind]==$a){
	
	echo "Questao ".$n." : Correta <br><br>";
	$correta++;
}
else{
	if($a=="1"){
	
	echo " Questao ".$n.": Resposta errada. <br>A correta é: a <br><br>";
	$errada++;
	
	}
	if($a=="2"){
	
	echo " Questao ".$n." : Resposta errada. <br>A correta é: b <br><br>";
	$errada++;
	
	}
	if($a=="3"){
	
	echo " Questao ".$n." : Resposta errada. <br>A correta é: c <br><br>";
	$errada++;
	
	}
}

$n++;

}
echo "<br>Voce errou ".$errada." e acertou ".$correta;
?>
</div>
</body>
</html>