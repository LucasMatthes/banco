<?php
session_start();
?>

<html>

<head>
<title>Sistema de cadastro</title>
</head>

<body>
    <center>
        <h1>Cadastrar Usuário</h1>
        <?php
            if(isset($_SESSION['msg'])) {
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            }
        ?>
        <form method="post" action="cadastrando.php">
            <label>Nome: </label>
            <input type="text" name="nome" placeholder="Digite seu nome" /> <br> <br>

            <label>E-mail: </label>
            <input type="text" name="email" placeholder="Digite seu nome" /> <br> <br>
            <button>CADASTRAR</button>
        </form>
    </center>
</body>

</html>