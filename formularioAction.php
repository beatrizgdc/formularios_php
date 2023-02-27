<!DOCTYPE html>

<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <title>GET e POST</title>

</head>

<body>

    <div class="w3-container w3-teal">

        <h2>Cadastro</h2>

    </div>


<div class="w3-text-teal">

<?php

 $nome = $_POST['txtNome'];
 $sobrenome = $_POST['txtSobrenome'];
 $email = $_POST['txtEmail'];
 $formacao = $_POST['txtFormacao'];
 $emprego = $_POST['txtEmprego'];

 echo "Nome ".$nome;
 echo "<br/>";
  echo "Sobrenome ".$sobrenome;
 echo "<br/>";
  echo "Email ".$email;
 echo "<br/>";
  echo "Formação ".$formacao;
 echo "<br/>";
  echo "Emprego ".$emprego;
 echo "<br/>";
?>

</div>
</body>
</html>