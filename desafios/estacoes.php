<!DOCTYPE hmt>
<html>
   
   <head>
        <meta charset="UTF-8">
        <title>Estações do ano</title>
    </head>
    
	<body>
	
        <form method="post">
            <fieldset>
                <legend>Escolha uma das estações do ano para saber a sua data de início</legend>
                <select name="estacoes">
					<optgroup label="Estações do ano">
						<option value="nenhum">--Selecione uma opção--</option>
						<option value="Primavera">Primavera</option>
						<option value="Verao">Verão</option>
						<option value="Outono">Outono</option>
						<option value="Inverno">Inverno</option>
					</optgroup>
                </select>
				<input type="submit" value="Enviar"/>
            </fieldset>
        </form>
		
        <?php
			$e = $_POST['estacoes'];
			
			switch($e)
			{
				case "nenhum":
					echo("Por favor, selecione uma estação do ano");
					break;
					
				case "Primavera":
					echo("Primavera - 22 de setembro");
					break;
					
				case "Verao":
					echo("Verão - 21 de dezembro");
					break;
					
				case "Outono":
					echo("Outono - 20 de março de 2022");
					break;
					
				case "Inverno":
					echo("Inverno - 21 de junho de 2022");
					break;
					
				default:
					echo("Dia não encontrado");
			}
        ?>
		
    </body>
</html>