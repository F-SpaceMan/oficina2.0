<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <title>Edição de orçamento</title>
    </head>
    <div class="bloco">
        <body>
            <?php
            include('.\conect\conexao.php');

            $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
            $cliente = filter_input(INPUT_POST, 'cliente', FILTER_SANITIZE_SPECIAL_CHARS);
            $datahora = filter_input(INPUT_POST, 'datahora', FILTER_SANITIZE_SPECIAL_CHARS);
            $vendedor = filter_input(INPUT_POST, 'vendedor', FILTER_SANITIZE_SPECIAL_CHARS);
            $descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_SPECIAL_CHARS);
            $valor = filter_input(INPUT_POST, 'valor', FILTER_SANITIZE_SPECIAL_CHARS);

            /*
             * Assim como na página cadastro.php, esta página trata dos campos id, cliente, datahora, vendedor,
             * descricao e valor. No entanto, a query abaixo é executada para atualizar um determinado orçamento.
             * O id também é editável.
             */

            $update = "UPDATE orcamento SET cliente='$cliente', datahora='$datahora', vendedor='$vendedor', descricao='$descricao', valor='$valor' WHERE id='$id'";

            mysqli_query($conexao, $update);
            if (mysqli_affected_rows($conexao)) {
                echo"<h1>Orçamento atualizado!</h1>";
            } else {
                echo"<h1>Orçamento não cadastrado, id inexistente.</h1>";
            }


            mysqli_close($conexao);
            ?>
            <h2>
            <a href="formconsulta.php">Consultar orçamentos</a>
            <br>
            <a href="index.html">Cadastrar novo orçamento</a>
            </h2>
    </div>
</body>
</html>
