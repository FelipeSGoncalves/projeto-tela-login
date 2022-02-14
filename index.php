<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div id="form">
        <h1>Entrar</h1>
        <form method="POST">
            <input type="email" placeholder="Email" name="email">
            <input type="password" placeholder="Senha" name="senha">
            <input type="submit" value="Acessar">
            <a href="cadastro.php"><strong>Cadastre-se agora</strong></a>
        </form>
    </div>
    <?php
        if(isset($_POST['email'])){
            $email= addslashes($_POST['email']);
            $senha= addslashes($_POST['senha']);
            if(!empty($email) && !empty($senha)){
                header('Location: logado.php');
                //aqui é onde eu faria a chamada para o banco de dados verificar os dados
            }
            else{
                ?>
    <div class="erro">
        Preencha todos os camposs!
    </div>
    <?php
            }
        }
    ?>
</body>
</html>