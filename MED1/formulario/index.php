<!DOCTYPE html>
<html>

    <head>
        <title>Formulário para postagens de parâmetros</title>
    </head>
	
    <body>
	
        <h1>Formulário pa postagens de parâmetros</h1>
        <br>
		
        <form action="processamento.php" method="GET">
            <input type="text" id="nome" name="nome" placeholder="Nome e sobrenome"><br>
            <input type="date" id="nascimento" name="nascimento" placeholder="Selecione"><br>
            <input type="tel" id="telefone" name="telefone" placeholder="(11)95645-4678"><br>
            <input type="submit" id="enviar" value="Enviar"><br>
        </form>
		
    </body>
</html>