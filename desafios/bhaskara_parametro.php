<!DOCTYPE hmt>
<html>
    <head>
        <title>Bhaskara</title>
    </head>
    <body>
	
        <h1>Cálculo de Bhaskara com Interface</h1>
        <br>
		
        <p>Por favor, insira os valores da sua equação como a, b ou c. Caso você não saiba como encontrar os valores, veja abaixo a explicação:</p>
        <p><img src="conta.png"/></p>
        <p><b>a:</b> número acompanhado do x quadrado (quando não tem número o coeficiente é 1)<br> <b>b:</b> número acompanhado do x (o número é o -5)<br> <b>c:</b> número que não tem letra junto (o número 6)</p>
		
        <form method="GET">
            <input type="number" id="a" name="a" placeholder="Insira o valor a"><br>
            <input type="number" id="b" name="b" placeholder="Insira o valor b"><br>
            <input type="number" id="c" name="c" placeholder="Insira o valor c"><br>
            <input type="submit" id="enviar" value="Enviar"><br><br><br>
        </form><hr>
        
		<?php
            // Valores
            $a = $_GET['a'];
            $b = $_GET['b'];
            $c = $_GET['c'];
            
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