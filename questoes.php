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
            
            <!--a linha anterior faz referência ao arquivo que contem as variáveis-->
            
            <form action="corrigir.php" method="get">
                
                <?php

                $contador=0;

                $n=0;


                foreach($all as $atual){ 
                    
                    //esse foreach foi usado para usar cada pergunta do array $all
                    
                $contador++;
                
                //essa variável $contador funcioniará para diferenciar as alternativas de cada questão
                //a primeira questão terá as alternativas com o nome "alternativa 1". Isso foi nécessário
                //para identificar a alternativa selecionada em cada questão para usar esse dado na correção
                
                $n++;?>
                <div  class="alternativas">				
                    <img src= "img/logo_questoes.png"; width=35px;> <?php echo " ".$atual["enunciado"]."<br><br>";?>
                            <!--Nesta linha você verá que no index do array $atual há a palavra "enunciado", pois 
                            no arquivo de variáveis foi declarado que cada array de pergunta contem o enunciado,
                            a letra "A" a "B" e a "C". Nesta linha será mostrado o enunciado da questão-->                                                      

                    <img src= "http://www.autoescolavirtual.com.br/wp-content/uploads/2014/12/detran_a.jpg"> <input type="radio" name="alternativa<?php echo $contador;?>" value="1"> 	<?php echo $atual["a"]."<br>"; ?>
                    
                                                                                                        <!--aqui você pode percebrr o uso do $contador para diferenciar o nome das alternativas -->
                                                                                                        
                    <img src= "http://www.autoescolavirtual.com.br/wp-content/uploads/2014/12/detran_b.jpg">	<input type="radio" name="alternativa<?php echo $contador;?>" value="2"> 	<?php echo $atual["b"]."<br>";?>
                                                                                                                                                                                <!-- Aqui você percebe que a variável 
                                                                                                                                                                                $atual é um array em que quando utilizado
                                                                                                                                                                                "b" no index, ele mostra a segunda alternativa
                                                                                                                                                                                que corresponde à letra b-->
                    <img src= "http://www.autoescolavirtual.com.br/wp-content/uploads/2014/12/detran_c.jpg"><input type="radio" name="alternativa<?php echo $contador;?>" value="3"> 	<?php echo $atual["c"]."<br><br>";}?>

                    <input type="submit" class="button_corrigir" value="Corrigir" > 
                    <!-- Aqui no botão corrigir, você percebe que ele chama o arquivo que contém a função para corrigir o resultado das questões-->
                </div>
            </form>
        </div>
    </body>

</html>
