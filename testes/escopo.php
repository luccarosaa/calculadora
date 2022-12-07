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
			$a = 1; /*referencia uma variável do escopo global */
			
			function Teste()
			{
				echo "<h1> Exemplo de escopo </h1><hr><br>";
				$a = 2; /*referencia uma variável; de escopo local */
				echo "$a <br>";
			}
			
			Teste();
			
			$variavel = "<br>Essa é uma variável <b>global</b><br>";
			
			function variavel()
			{
				global $variavel;
				echo $variavel;
				$variavel = "Essa é uma variável <b>local</b>";
				echo $variavel;
			}
			
			variavel();
		?>
		
	</body>
</html>