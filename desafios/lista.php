<!DOCTYPE hmt>
<html>
   
   <head>
        <meta charset="UTF-8">
        <title>Lista de números</title>
    </head>
    
	<body>
       
	   <form method="post">
            <fieldset>
                <legend>Insira dois números para obter uma lista com os todos os números existentes entre eles</legend>
                <input type="text" placeholder="Primeiro número" name="numero1"/>
                <input type="text" placeholder="Segundo número" name="numero2"/>
                <input type="submit" value="Listar"/>
            </fieldset>
        </form>
       
	   <?php
            // $_POST = verifica se houve envio de informações
            if($_POST) {
            $x = $_POST['numero1'];
			$i = $_POST['numero2'];
                
				// verifica se a variável X e I não estão vazias e se elas são um número
                if(!empty($x) && is_numeric($x) && !empty($i) && is_numeric($i)) {
                    // laço de repetição que soma mais 1 no valor da variável $i de multiplicação
                    for ($x; $x <= $i; $x++)
                    {
                        echo "$x <br>";
                        if($x == $i)
                        {
                            break;
                        }
                    }
					for ($x; $x >= $i; $i++)
                    {
                        echo "$i <br>";
                        if($x == $i)
                        {
                            break;
                        }
                    }
                }
                else {
                        echo "Por favor, digite um número válido <br>";
                    }
            }
        ?>
		
    </body>
</html>