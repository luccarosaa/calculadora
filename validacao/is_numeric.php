<!DOCTYPE hmt>
<html>

    <head>
        <meta charset="UTF-8">
        <title>Exemplo is_numeric()</title>
    </head>
	
    <body>
	
        <form method="post">
            <fieldset>
                <legend>Insira o número abaixo</legend>
                <input type="text" placeholder="Digite um número" name="txtv1"/>
                <input type="submit" value="Verificar"/>
            </fieldset>
        </form>
		
    <!-- <fiendset> = coloca uma borda ao redor dos componentes -->
    <!-- <legend> = coloca uma legenda na borda -->
    <!-- placeholder = coloca uma Hint(dica) dentro do componente -->
        
		<?php
            // $_POST = verifica se houve enio de informações
            if($_POST) {
            $x=$_POST['txtv1'];
                
				// is_numeric() = verifica se a variável X não está vazia e se ela é um número
                if(!empty($x) && is_numeric($x)) {
                    if($x%4==0) {
                        echo "O número $x é divisível por 4";
                    } 
                    else {
                        echo "O número $x não é divisível por 4";
                    }
                }
                else {
                    echo "Campo em branco ou inválido";
                }
            }
        ?>
		
    </body>
</html>