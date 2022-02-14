<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Cadastro</title>
</head>
<body>
   <div id="form">
        <h1>Cadastrar</h1>
            <form method="POST">
                <input type="text" name="nome" placeholder="Nome Completo" maxlength="40">
                <input type="text" name="email" placeholder="Email" maxlength="40">
                <input type="password" name="senha" placeholder="Senha" maxlength="15" minlength="8">
                <input type="password" name="confsenha" placeholder="Confirmar Senha" maxlength="15" minlength="8">
                <input type="submit" value="Cadastrar">
                <a href="index.php"><strong>Faça login agora!</strong></a>
            </form>
    </div>
    
    <?php
        if(isset($_POST['nome'])){
            $nome = addslashes($_POST['nome']);
            $email = addslashes($_POST['email']);
            $senha = addslashes($_POST['senha']);
            $confSenha = addslashes($_POST['confsenha']);
            if(!empty($nome) && !empty($email) && !empty($senha) && !empty($confSenha)){
                $u->conectando("projeto_login", "localhost", "root", "");
                if($u->msgErro == ""){
                    if($senha == $confSenha){
                        if($u->cadastro($nome, $email, $senha)){
    ?>
    
    <div class="sucesso">
        Cadastro realizado com <strong>sucesso!</strong> Faça login para acessar!
    </div>
    
    <?php
                        }else{
    ?>
    
    <div class="erro">
        Email já <strong>cadastrado!</strong>
    </div>
    
    <?php
                        }
                    }else{
    ?>
    <div class="erro">
        <strong>Senhas não correspondem</strong>, por favor verificar!
    </div>
                            
    <?php
                    }
                }else{
                    echo "Erro: ".$u->msgErro;
                } 
            }else{
    ?>
        <div class="erro">
            <strong>Existem campos vazios</strong> que precisam ser preenchidos!
        </div>
                    
    <?php                    
            }
        }
    ?>
</body>
</html>