<!DOCTYPE html>
<!--
    O formupdate é a página que possui o formulário para edição de campos de orçamentos.
    Aqui, a seção aberta em consulta.php é útil para a utilização da variável $id.
    O form desta página envia os valores dos atributos à página update.php
    Esta página é acessada a partir da tabela, clicando-se na ação Editar.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <title>Edição de orçamento</title>
    </head>
    <body>
        <?php
        session_start();
        include('.\conect\conexao.php');
        $id = $_SESSION['id'];
        ?>
        <div class="bloco">
            <form action="update.php" method="post">
                <p>ID: <input type="number" name="id" value="<?php echo ($id);?>"></p>
                <p>Nome do cliente: <input type="text" name="cliente"></p>
                <p>Data e hora do orçamento: <input type="datetime-local" name="datahora"></p>
                <p>Nome do vendedor: <input type="text" name="vendedor"></p>
                <p>Descrição: <input type="text" name="descricao"></p>
                <p>Valor orçado: <input type="text" name="valor"></p>
                <p><input type="submit" value="Atualizar"></p>

            </form>
       

        <a href="formconsulta.php">Consultar orçamentos</a>
        <br>
        <a href="index.html">Cadastrar novo orçamento</a> 
        </div>
</html>
