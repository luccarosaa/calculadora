<!DOCTYPE hmt>
<html>

    <head>
        <title>Bhaskara</title>
    </head>
	
    <body>
	
        <h1>Cálculo de Bhaskara sem Interface</h1>
        <br>
		
        <?php
            // Valores
            $a = 1;
            $b = -5;
            $c = 6;
			
            //Delta
            $delta = ($b*$b)-((4*$a)*$c);
            
			//Equação
            $x1 = (-$b + sqrt ($delta)) / (2 * $a);
            $x2 = (-$b - sqrt ($delta)) / (2 * $a);
            
			//Exibindo os valores
            if ($delta >= 0){
                echo "<strong>O valor de a é:</strong> $a <br>";
                echo "<strong>O valor de b é:</strong> $b <br>";
                echo "<strong>O valor de c é:</strong> $c <br><hr>";
                echo "<strong>O valor de delta é:</strong> $delta <br>";
                echo "<strong>O valor de X1 é:</strong> $x1 <br>";
                echo "<strong>O valor de X2 é:</strong> $x2 <br><hr>";
            }
            else {
                echo "<strong>O valor de a é:</strong> $a <br>";
                echo "<strong>O valor de b é:</strong> $b <br>";
                echo "<strong>O valor de c é:</strong> $c <br><hr>";
                echo "<strong>Porém valor de delta é:</strong> $delta, ou seja, não é possível realizar a conta <br>";
            }
        ?>
		
    </body>
</html>