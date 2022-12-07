<!DOCTYPE html>
<html>

  <head>
    <title>Exemplos utilizando IF / ELSE em PHP</title>
  </head>
  
  <body>
  
    <h1>Exemplo teste condicional</h1>
    <br>
	
    <?php
        //criação de variável
        $x = 5;
		
        //iniciando o teste condicional
        //um teste condicional é formado por 2 valore, entre os quais já existe um operador ralacionais
        //existem 6 operadores relacionais
        //== lê-se "é igual a"
        //!= lê-se "não igual a"
        //> lê-se "é maior que"
        //< lê-se "é menor que"
        //>= lê-se "é maior ou igual a"
        //<= lê-se "é menor ou igual a"
        
		//Inicia o teste condicional e verifica SE o primeiro valor é maior que o segundo valor
        if ($x > 10){
        //Se a resposta do teste condicional é VERDADEIRO, então o fluxo do processamento vem para essa linha
            echo "A variável é $x <br>";
            echo ("O valor é maior que 10");
        }
		
        //Se a resposta do teste condicional é FALSO, então o fluxo de processamento vem para essa linha
        else {
            echo "A variável é $x <br>";
            echo ("O valor não é maior que 10");
        }
		
        //Responda para você mesmo: Qual vai ser a saída?
        //Tente mudr os valores ou operador relacional e tente acertar qual seria a saída
    ?>
	
  </body>
</html>