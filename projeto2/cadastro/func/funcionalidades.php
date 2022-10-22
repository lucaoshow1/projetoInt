<?php



$erro = false;
if (count($_POST) > 0) {

    include ('conexao\conexao.php');

   $concluir = $_POST['concluir'];  
   $nome = $_POST['nome'];
   $sobrenome = $_POST['sobrenome'];
   $email = $_POST['email'];
   $telefone = $_POST['telefone'];
   $nascimento = $_POST['nascimento'];
   $senha = $_POST['senha'];
   $confirSenha = $senha;
  
   
}


if(empty($nome)) {$erro = "preencha o campo Nome";}

if(empty($sobrenome)) { $erro = "preencha o campo Sobrenome";}

if(empty($email)) {$erro = "preencha o campo Email";}

if(empty($telefone)) {$erro = "preencha o campo Telefone";}

if(empty($nascimento)) {$erro = "preencha o campo Nascimento";}

if(empty($senha)) {$erro = "preencha o campo Senha";}

if(isset($concluir)){ 
if(($confirSenha) !== ($senha)) {$erro = "senhas não conferem";}
}



if (isset($concluir)) {
      
    $sql_code = "SELECT * FROM  cadastro WHERE email = ? ";
    $sqli_code -> execute(array($email));
    
    $deu_certo = $mysqli->query($sql_code) or die($mysqli->error);

}








