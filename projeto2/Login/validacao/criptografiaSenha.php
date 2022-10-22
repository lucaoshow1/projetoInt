<?php

include ('./projeto/cadastro/func/funcionalidades.php');

$md5 = md5($senha);

if ($_POST['senha'] == $md5) {
    header("location startLogin.php");
}




