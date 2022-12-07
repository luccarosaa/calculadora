<!DOCTYPE hmt>
<html>

    <head>
        <title>Exemplo isset()</title>
    </head>
	
    <body>
	
        <form method="post">
            <fieldset>
                <legend>Insira o seu nome abaixo</legend>
                <input type="text" name="nome"/>
                <input type="submit" value="Verificar" name="bnt"/>
            </fieldset>
        </form>
		
        <?php
            // Verifica se a Superglobal POST não é vazia, ou seja, se o formulário foi enviado
            if (!empty($_POST)) {
                
				// Verifica se a variável $_POST['nome'] existe
                if (isset($_POST['nome'])) {
                    $nome = $_POST['nome'];
                    
					// Verifica se o usuário digitou o nome
                    if (!empty($_POST['nome'])) {
                        echo "Seja bem vindo, $nome";
                    }
                    else {
                        echo "Por favor, digite o seu nome";
                    }
                } 
				else {
                    echo "O campo não existe";
                }
            } 
            else {
                echo "O formulário não foi enviado";
            }
		?>
		
    </body>
</html>