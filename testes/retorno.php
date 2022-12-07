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
			function minhaFuncao($texto) // recebendo um parâmetro
			{
				echo "<h1> Exemplo de retorno </h1><hr><br>";
				$nome = "Lucca";
				$mensagem = "$texto. Meu nome é: $nome.";
				return $mensagem; // retornando um valor para quem invocou a função
			}
			
			echo minhaFuncao('Olá, galerinha!!!'); // invocando uma função passando um parâmetro para ela funcionar
		?>
		
	</body>
</html>