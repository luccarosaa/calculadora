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
			echo "<h1> Exemplo de variáveis </h1><hr><br>";
			
			// criação de variáveis em php
			$nome = "<b>NOME:</b> Lucca;";
			$idade = 17;
			$gênero = "<b>GÊNERO:</b> Masculino.";
			
			echo "Aqui nós temos algumas informações do criador desse código em php:<br><br>";
			echo $nome;
			echo "<br>";
			echo "<b>IDADE:</b> $idade anos;";
			echo "<br>";
			echo $gênero;
			echo "<br>";
		?>
		
	</body>
</html>