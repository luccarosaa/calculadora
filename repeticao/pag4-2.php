<!DOCTYPE hmt>
<html>

    <head>
        <meta charset="UTF-8">
        <title>Estrutura de Swich Case</title>
    </head>
	
    <body>
	
        <h1>Dia da Semana</h1>
		
        <?php
			$d = 'Quinta';
			
			switch($d)
			{
				case 'Domingo':
					echo("Domingo");
					break;
					
				case 'Segunda':
					echo("Segunda");
					break;
					
				case 'Terça':
					echo("Terça");
					break;
					
				case 'Quarta':
					echo("Quarta");
					break;
					
				case 'Quinta':
					echo("Quinta");
					break;
					
				case 'Sexta':
					echo("Sexta");
					break;
					
				case 'Sábado':
					echo("Sábado");
					break;
					
				case 'Sabado':
					echo("Sábado");
					break;
					
				default:
					echo("Dia não encontrado");
			}
        ?>
		
    </body>
</html>