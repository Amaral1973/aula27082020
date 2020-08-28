<html>
 <head>
  <title>Jogo</title>
 </head>
 <body>
 <form action="" method="get">
  PHP gerou um número entre 1 e 10! Tente adivinhar!<br />
  Palpite:<input type="number" name="number" /><br />
  <input type="submit" name="submit" value="Calcular" />
 </form> 
 <?php
  $palpite = $_GET['number'];
  $resposta = rand(1,10);

  if($palpite==$resposta)
   echo "Acertou miseravi! Era $resposta!";
  else
   echo "Errou! Era $resposta !";
 ?>
 </body>
</html>