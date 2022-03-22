
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade-Pw3</title>
     <link rel="stylesheet" href="style.css">
</head>
<body>
<br>
<br>
<h2>Heroes API</h2>
 
<section class=" grid">
  <div class="item">
  <br/>
  <br/>
  <form name="cadastro" method="get" action="DbOperation.php">
    Id: &nbsp; <input type="text" name="id" size="40" maxlength="20"> <br/> <br/>
    Nome: <input type="text" name="name"> <br/> <br/>
    Nome real: <input type="text" name="realname"> <br/> <br/>
    Avaliação: <input type="text" name="rating"> <br/> <br/>
    Equipe: <input type="text" name="teamaffiliation"> <br/> <br/>
    <br/>
    <input type="hidden" name="login" value="admin">
    <br/>
    &nbsp; &nbsp; &nbsp;
    <input type="button" name="VOLTAR">
    &nbsp; &nbsp; &nbsp;
    <input type="reset" name="LIMPAR">
    <input type="submit" name="ENVIAR">
    <br/>
    <br/>
    <br/>
    <a href="#" onclick="document.cadastro.reset()">LIMPAR</a>
    
  </form>
  </div>
 </section>


</body>
</html>

