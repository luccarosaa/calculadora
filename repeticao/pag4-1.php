<!DOCTYPE hmt>
<html>

    <head>
        <meta charset="UTF-8">
        <title>Estrutura de Swich Case</title>
    </head>
	
    <body>
	
        <h1>Dia da Semana</h1>
		
        <?php
			$d = 5;
			
			switch($d)
			{
				case 1:
					echo("Domingo");
					break;
					
				case 2:
					echo("Segunda");
					break;
					
				case 3:
					echo("Terça");
					break;
					
				case 4:
					echo("Quarta");
					break;
					
				case 5:
					echo("Quinta");
					break;
					
				case 6:
					echo("Sexta");
					break;
					
				case 7:
					echo("Sábado");
					break;
					
				default:
					echo("Dia não encontrado");
			}
        ?>
		
    </body>
</html>