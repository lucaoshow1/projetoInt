<?php
    include('./validacao/startLogin.php');
   
?>
    
    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../cadastro/css/style.css">
        <link rel="stylesheet" href="../cadastro/css/footer.css">
        <title>Login</title>
    </head>
    <body>
    
   
        <main>
            <div class="main_container">
             
                <div class="container-form">
                    <form action="" method="post">
    
                        <div class="cadastrar">
                            <h2>LOGIN</h2>
                        </div>
    
                        <div class="email">
                            <input type="email"
                            name="email"
                            placeholder="E-mail"
                            value="<?php if (isset($email)) echo $email;?>"
                            >
                        </div>

    
                        <div class="senha">
                            <input type="password"
                            name="senha"
                            placeholder="Senha" 
                            value="<?php if (isset($senha)) echo $senha;?>"
                            >
                        </div>

    
                        <div class="buttons-cad">
                            <div class="resetar">
                                <button type="reset" class="res">RESETAR</button>
                            </div>
                            <div class="confirmar ">
                                <button type="submit" name="concluir" class="con">CONCLUIR</button>
    
                            </div>
                           
                           </div>
                           <?php
                                 retorna();
                           ?>
                    </form>
                </div>
            </div>
        </main>
    
        </div>
    </body>
    
    <footer>
        <div class="rodape">
            <div class="container-rodape">
                <div class="esq">
    
                    <div class="logo">
                        <div class="logotipo">RIO</div>
                    </div>
                    
                    <div class="help">
                        Acesse a central de ajuda
                    </div>
    
                    <div class="mais">
                        <div class="empresa">
                            <p class="escrita">EMPRESA</p>
                            <div class="sobre">
                             Sobre nós 
                             </div>
                             <div class="sobre">Trabalhe Conosco</div>
                            
                        </div>
                        
                        
                    </div>
                </div>
                        <!-- CONTATOS -->
                <div class="contatos">
                            CONTATOS
    
                        <div class="icons-ctt">
    
                             <div class="icons icons-c">
                                <a href="#" class="icon icon--instagram">
                                    <i class="ri-instagram-line">
                                    <img src="./css/img/message-2-line (2).png" alt="">
                                    </i>
                                </a>
                            </div>
    
                            <div class="icons1 icons-c">
                                <a href="#" class="icon1 icon--twitter">
                                    <i class="ri-twitter-line">
                                    <img src="./css/img/telegram-line (2).png" alt="">
                                    </i>
                                 </a>
                            </div>
    
                            <div class="icons3  icons-c">
                                <a href="#" class="icon3 icon--github">
                                    <i class="ri-github-line">
                                        <img src="./css/img/whatsapp-line (2).png" alt="">
                                    </i>
                                </a>
                            </div>
                        </div>
                        </div>
                        <!-- CONTATOS -->
    
                       
    
                        <div class="social-media">
                            REDES SOCIAIS
    
                            <div class="icons-ctt">
    
                        <div class="icons icons-c">
                        <a href="https://www.instagram.com/" class="icon icon--instagram">
                            <i class="ri-instagram-line">
                                <img src="./css/img/instagram-line.png" alt="">
                            </i>
                        </a>
                    </div>
                    <div class="icons1 icons-c">
                        <a href="https://www.twitter.com" class="icon1 icon--twitter">
                            <i class="ri-twitter-line">
                                <img src="./css/img/twitter-line.png" alt="">
                            </i>
                        </a>
                    </div>
                    <div class="icons2 icons-c">
                        <a href="https://www.linkedin.com" class="icon2 icon--linkedin">
                            <i class="ri-linkedin-line">
                                <img src="./css/img/linkedin-line (2).png" alt="">
                            </i>
                        </a>
                    </div>
                    <div class="icons3 icons-c">
                        <a href="https://www.github.com" class="icon3 icon--github">
                            <i class="ri-github-line">
                                <img src="./css/img/github-line.png" alt="">
                            </i>
                        </a>
                    </div>
                        </div>
                        </div>
    
                <div class="dir">
                    <div class="endereco">
                        <pre>
                            CGJLM Technologies Inc.
                            CGJLM Tecnologia Ltda
                            R. Cel. Carlos Matos, nº 86, Sala 403
                            4º andar, Centro, Nova Iguaçu/RJ
                            CEP 26210-200
                        </pre>
                    </div>
            </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#261313" fill-opacity="1" d="M0,288L24,261.3C48,235,96,181,144,133.3C192,85,240,43,288,64C336,85,384,171,432,218.7C480,267,528,277,576,282.7C624,288,672,288,720,240C768,192,816,96,864,90.7C912,85,960,171,1008,181.3C1056,192,1104,128,1152,112C1200,96,1248,128,1296,160C1344,192,1392,224,1416,240L1440,256L1440,320L1416,320C1392,320,1344,320,1296,320C1248,320,1200,320,1152,320C1104,320,1056,320,1008,320C960,320,912,320,864,320C816,320,768,320,720,320C672,320,624,320,576,320C528,320,480,320,432,320C384,320,336,320,288,320C240,320,192,320,144,320C96,320,48,320,24,320L0,320Z"></path></svg>
        </div>
    </footer>
    </html>
    
    

