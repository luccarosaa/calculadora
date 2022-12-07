<!DOCTYPE hmt>
<html>

	<head>
    <title>Exemplos utilizando IF / ELSE em PHP</title>
	</head>
	
	
  <body>
  
    <h1>Exemplo de teste condicional</h1>
    <br>
	
    <?php
        echo "<h1> Exemplo com AND - &&</h1>";
		
        //criação de variável
        $x = 5;
		
        // iniciando o teste condicional
        // em algumas ocasiões, você pode querer testar duas condições ao mesmo tepo
        // para fazer isso, você deve usar os OPERADORES LÓGICOS
        // existem 4 operadores lógicos
        // AND, cujo símbulo é &&, significa E. Nesse operador, para que a resposta seja VERDADEIRO, todos os testes tem que ser verdadeiros
        // OR, cujo símbulo é ||, significa OU. Nesse operador, para que a resposta seja VERDADEIRO, no mínimo um dos testes tem que ser verdadeiro
        //XOR, que não possuí símbulo. Neste operador, para que a resposta seja VERDADEIRO, no mínimo um dos testes tem que ser verdadeiro, porém se todos os testes forem verdadeiros, então a resposta será FALSO
        // !, símbulo que não possui palavra, significa NEGAÇÂO. Nesse operador, basicamente você inverte o estado atual do teste. O que é verdadeiro torna-se falso e vice-versa
        
		//temos dois testes condicionais:
        if ($x>0 AND $x<10){
        //$x é maior que 0? -> no nosso caso, sim.
        //$x é menor que 10? -> no nosso caso, sim.
        //Então todos os testes são verdadeiros, logo a resposta final é VERDADEIRO, então o fluxo vem para essa linha
            echo "A variável é $x";
            echo "<br>";
            echo "A variável está entre 1 e 9";
        }
        else{//se pelo menos um dos testes for FALSO,então o fluxo vai para essa linha
            echo "O valor é menor que 1 e 9";
        }
		
        echo "<hr><hr><hr>";
		
        echo "<h1> Exemplo com OR - ||</h1>";
		
        //criação de outra variável
        $y = 15;
		
        //temos dois testes condicionais:
        if ($y > 10 OR $y > 20){
        //$y é maior que 10? -> No nosso caso, sim.
        //$y é maior que 20? -> Nos nosso caso, não.
        //então nem todos os testes são verdadeiros, mas, no caso do OR, se pelo menos 1 teste for verdadeiro, então a resposta final é VERDADEIRO.
            echo "A variável é $y";
            echo "<br>";
            echo "A variável entá entre 10 e 20";
        }
        else { 
            echo "A variável é $y";
            echo "<br>";
            echo "O valor é menor que 10";
        }
		
        echo "<hr><hr><hr>";
		
        echo "<h1> Exemplo com XOR</h1>";
		
        //criação de outra variável
        $z = 25;
		
        //temos dois testes condicionais:
        if ($z<10 XOR $z<20){ 
        //$y é maior que 10? -> No nosso caso, sim.
        //$y é maior que 20? -> Nos nosso caso, sim.
        //então nem todos os testes são verdadeiros, mas, no caso do XOR, se pelo menos 1 teste for verdadeiro. Mas se todos os testes forem verdadeiros, então a resposta final é FALSO.
            echo "A variável é $z";
            echo "<br>";
            echo "A variável entá entre 10 e 20";
        }
        else {
            echo "A variável é $z";
            echo "<br>";
            echo "A variável é maior que 20";
        }
		
        echo "<hr><hr><hr>";
		
        echo "<h1> Exemplo com !</h1>";
		
        //criação de outra variável
        $w = 30;
		
        //o teste condicional cria uma respost verdadeira, mas o operador ! altera o resultado para FALSE
        if (!($w<50)){ 
            echo "A variável é $w";
            echo "O teste é $w<50 <br>";
            echo "Saída invertida se resposta final for FALSO";
        }
        else{
            echo "A variável é $w <br>";
            echo "O teste é $w<50 <br>";
            echo "Saída invertida se resposta final for VERDADEIRO";
        }
    ?>
	
  </body>
</html>