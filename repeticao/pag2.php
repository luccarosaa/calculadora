<!DOCTYPE hmt>
<html>

    <head>
        <meta charset="UTF-8">
        <title>Estrutura Break</title>
    </head>
	
    <body>
	
        <?php
			for ($i = 1; $i < 10; $i++)
			{
				echo "Linha $i <br>";
				if($i==5)
				{
					break;
				}
			}
        ?>
		
    </body>
</html>