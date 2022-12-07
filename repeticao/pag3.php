<!DOCTYPE hmt>
<html>

    <head>
        <meta charset="UTF-8">
        <title>Estrutura While</title>
    </head>
	
    <body>
	
        <h1>Multiplos de 7 até 50</h1>
		
        <?php
			$i = 1;
			
			while($i < 50)
			{
				if($i%7==0)
				{
					echo "$i é multiplo de 7 <br>";
				}
				$i++;
			}
        ?>
		
    </body>
</html>