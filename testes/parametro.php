<!DOCTYPE html>
<html>
	<body>
	
		<h1>Páginas de testes PHP</h1>
		<br>
		
		<a href="variavel.php">Exemplos de variáveis</a></br>
		<a href="escopo.php">Exemplos de escopo de variáveis</a></br>
		<a href="funcao.php">Exemplos de funções</a></br>
		<a href="parametro.php">Exemplos de parâmetros</a></br>
		<a href="retorno.php">Exemplos de retorno</a></br>
		
		<?php
			function minhaFuncao($texto) // ao invés de criar uma variável, posso receber esse valor como parâmetro
			{
				echo "<h1> Exemplo de parâmetro </h1><hr><br>";
				echo "O texto passado para função foi: " . $texto;
				// podemos ainda trabalhar mais parâmetros
			}
			
			echo minhaFuncao('Olá, passarinhos!!!'); // invocando uma função passando um parâmetro para ela funcionar
		?>
		
	</body>
</html>