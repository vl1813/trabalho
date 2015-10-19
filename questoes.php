<html>

    <head>
        <link rel="stylesheet" type="text/css" href="estilo.css">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="javascript" type="text/javascript" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js">
    </head>

    <body style="background-image: linear-gradient( to top, #F0E68C, #ffea70 ); " >

        <div class="container">
            <div style="float:right; text-decoration:bold;"><a href="index.html"> Voltar à página inicial </a></div>
            <?php require ("variaveis.php")?> 
            <form action="corrigir.php" method="get">
                <?php

                $contador=0;

                $n=0;


                foreach($all as $atual){ 

                $contador++;

                $n++;?>
                <div  class="alternativas">				
                    <img src= "img/logo_questoes.png"; width=35px;> <?php echo " ".$atual["enunciado"]."<br><br>";?>

                    <img src= "http://www.autoescolavirtual.com.br/wp-content/uploads/2014/12/detran_a.jpg"> <input type="radio" name="alternativa<?php echo $contador;?>" value="1"> 	<?php echo $atual["a"]."<br>"; ?>
                    <img src= "http://www.autoescolavirtual.com.br/wp-content/uploads/2014/12/detran_b.jpg">	<input type="radio" name="alternativa<?php echo $contador;?>" value="2"> 	<?php echo $atual["b"]."<br>";?>
                    <img src= "http://www.autoescolavirtual.com.br/wp-content/uploads/2014/12/detran_c.jpg"><input type="radio" name="alternativa<?php echo $contador;?>" value="3"> 	<?php echo $atual["c"]."<br><br>";}?>

                    <input type="submit" class="button_corrigir" value="Corrigir" > 
                </div>
            </form>
        </div>
    </body>

</html>