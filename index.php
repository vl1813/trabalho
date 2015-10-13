<head>
 </head>
 <body>
<?php require ("variaveis.php")?> 
		<form action="corrigir.php" method="post">
<?php
$contador=0;
$n=0;
foreach($all as $atual){ 
$contador++;
$n++;?>
							
<?php echo "Questão ".$n.": ".$atual["enunciado"]."<br><br>";?>
		
	a)	<input type="radio" name="alternativa<?php echo $contador;?>" value="1"> 	<?php echo $atual["a"]."<br>"; ?>
	b)	<input type="radio" name="alternativa<?php echo $contador;?>" value="2"> 	<?php echo $atual["b"]."<br>";?>
c)	<input type="radio" name="alternativa<?php echo $contador;?>" value="3"> 	<?php echo $atual["c"]."<br><br>";}?>
 
 <input type="submit"  value="Corrigir" > 
		</form>

</body>

</html>
