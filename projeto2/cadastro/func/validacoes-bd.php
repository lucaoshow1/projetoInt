<?php
if(!empty($nascimento)){
    $pedacos = explode('/', $nascimento);
    $tmp = explode('/', $nascimento);
     if(count($tmp) == 3) {
         $nascimento = implode('-', array_reverse($pedacos));
     } else {
         $erro = "A data está incorreta";
     }
 }
 
 if (!empty($telefone)) {
     $telefone = limpar_texto($telefone);
     if(strlen($telefone) !=11){
         $erro = "O telefone deve ser preenchido no padrão (21) 98888-8888";
     }
 
 if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
     $erro = "Preencha o email corretamente";
 } 
 
 } 

 
 if($erro){
     echo "<p><b> $erro</b></p>";
 } else {
     $sql_code = "INSERT INTO cadastro(nome, sobrenome, email, telefone, nascimento, senha) VALUES('$nome', '$sobrenome', '$email', '$telefone', '$nascimento', '$senha')";
     $deu_certo = $mysqli->query($sql_code) or die($mysqli->error);
     if($deu_certo){
         echo "Cliente cadastrado com sucesso!";
         unset($_POST);
     }
 }

 function limpar_texto($str){ 
    return preg_replace("/[^0-9]/", "", $str); 
}


