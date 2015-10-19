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
//Essa variávei $n servirá para chamar cada alternativa selecionada no questionário
//lá no questoes.php, cada pergunta apresentava 3 aternativas com o nome "alternativa"+ o número correspondente à questão.
//Essa variável servirá justamente para isso, para, dentro do foreach, chamar cada alternativa e confirmar 
//se a resposta está correta

	$correta=0;
	
	$errada=0;
	
	//essas duas variáveis servirão para contar quantos erros e acertos o usuário apresentou
	
foreach( $altc as $a ){
	
	$ind="alternativa".$n;
	// a variável $ind receberá o nome da alternativa referente à questão a ser comparada. Primeiro ele receberá.
	// "alternativa 1". Assim, na proxima linha, que é um if, será comparado se a resposta selecionada no questionário
	//usando $_GET, foi a resposta correta. As respostas estão contidas no array $altc que foi renomeado para o foreach como
	//$a. Dessa forma, o if compara a resposta recebida ($ind) com a resposta certa ($a).
if( $_GET[$ind]==$a){
	
	echo "Questao ".$n." : Correta <br><br>";
	$correta++;
	
	//aqui será mostrado na tela queis questões o usuário acertou, e a variável $correta contará a quantidade
}
else{
	
	//Esta parte do código será executado caso o usuário erre a questão . Se ele errar será impresso na tela
	// a resposta correta para aquela questão.
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

//nesta linha será mostrado a quantidade de questões certas e erradas.
?>
</div>
</body>
</html>
