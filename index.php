<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body> 
    <?php  
if($_POST){

    $nome=$_POST['nome'];
    $idade=$_POST['ano'];
    $idade_hj=2023-$idade;
for($cont=0; $cont>5; $cont++)
echo"<p>Ola mundo, Cruellll. Meu nome é $nome e minha idade é $idade_hj</p>";
}
  if($_GET){
    $num1=$_GET['num01'];
    $num2=$_GET['num02'];
    echo"A soma é ". $num1+$num2;
  }

?> 
  <form action="index.php" method="get">
    <label>Num 01</label>
  <br/>
  <input type="text" name="num01"/>
  <br/>
  <label>Num 02</label>
  <br/>
  <input type="text" name="num02"/>
  <br/>
  <input type="submit" value="Enviar"/>
  </form>
<form action="index.php" method="post">
  <label>Nome</label>
  <br/>
  <input type="text" name="nome"/>
  <br/>
  <label>Ano de nascimento</label>
  <br/>
  <input type="text" name="ano"/>
  <br/>
  <input type="submit" value="Enviar"/>
</form>


  <script src="https://replit.com/public/js/replit-badge-v2.js" theme="dark" position="bottom-right"></script>
  </body>
</html>