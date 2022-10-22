<?php

    include ('../cadastro/conexao/conexao.php');
    include('./validacao/criptografiaSenha.php');
    
    if(isset($_POST['email']) ||  isset($_POST['senha'])){
            if (strlen($_POST['email']) == 0) {
                echo "preencha o e-mail";
            }
             else if (strlen($_POST['senha']) == 0)
              {
                echo "preencha a senha";
               } 
             
             else {
                $email = $mysqli->real_escape_string($_POST['email']);
                $senha = $mysqli->real_escape_string($_POST['senha']);

                $sql_code = "SELECT * FROM cadastro WHERE email = '$email' AND senha = '$senha' ";
                $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL" . $mysqli->error);
                
                $total = $sql_query->num_rows;

                if ($total == 1) {
                    $usuario = $sql_query->fetch_assoc();

                    if(!isset($_SESSION)){
                        session_start();

                    }

                    $_SESSION['id'] = $usuario['id'];
                    $_SESSION['email'] = $usuario['email'];

                    header("Location: painel.php");
                } else {
                    echo "Falha ao logar! E-mail ou senha incorreta!";
                }


            }
    }

?>