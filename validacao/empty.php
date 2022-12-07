<!DOCTYPE hmt>
<html>

    <head>
        <title>Exemplo empty()</title>
    </head>
	
    <body>
	
        <form method="post">
            <fieldset>
                <legend>Insira o nome logo abaixo</legend>
                <input type="text" name="nome"/>
                <input type="submit" value="Verificar" name="bnt"/>
            </fieldset>
        </form>
		
        <?php
            // Recebe um campo de um formulário
            $nome=$_POST['nome'];
            
			// Verifica se o usuário digitou o seu nome
            if (empty($nome)) {
                echo "Por favor, preencha seu nome";
            }
			
            if (!empty($nome)) {
                echo "Obrigado por colocar o seu nome, $nome";
            }
        ?>
		
    </body>
</html>