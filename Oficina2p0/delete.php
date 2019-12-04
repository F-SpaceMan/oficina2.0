<!DOCTYPE html>
<!--
    Esta página trata da exclusão de orçamentos.
    Ela é acessada a partir da tabela, clicando-se na ação Deletar.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <title>Edição de orçamento</title>
    </head>
    <body>
        <div class="bloco">
            <?php
            session_start();
            include('.\conect\conexao.php');
            $id = $_SESSION['id'];
            $delete = "DELETE FROM orcamento WHERE id='$id'";
            mysqli_query($conexao, $delete);
            ?>
            <h1>Orçamento deletado com sucesso!</h1>

            <a href="formconsulta.php">Consultar orçamentos</a>
            <br>
            <a href="index.html">Cadastrar novo orçamento</a>
        </div>
</html>
