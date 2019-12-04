<!DOCTYPE html>

<!--
    Aqui, os valores obtidos pelo form do index.html são tratados e passados
    às variáveis.
-->

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <title>Cadastro</title>
    </head>
    <body>
        <?php
        include('.\conect\conexao.php');
        
        /*
         * Aqui, os valores obtidos pelo form do index.html são tratados e passados
         * às variáveis.
         */

        $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
        $cliente = filter_input(INPUT_POST, 'cliente', FILTER_SANITIZE_SPECIAL_CHARS);
        $datahora = filter_input(INPUT_POST, 'datahora', FILTER_SANITIZE_SPECIAL_CHARS);
        $vendedor = filter_input(INPUT_POST, 'vendedor', FILTER_SANITIZE_SPECIAL_CHARS);
        $descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_SPECIAL_CHARS);
        $valor = filter_input(INPUT_POST, 'valor', FILTER_SANITIZE_SPECIAL_CHARS);

        /*
         * Os valores são inseridos na tabela orcamento do banco oficina
         */
        
        $insere = "INSERT INTO orcamento (id, cliente, datahora, vendedor, descricao, valor) VALUES('$id', '$cliente', '$datahora', '$vendedor', '$descricao', '$valor')";
        $pesquisa = "SELECT id FROM orcamento WHERE id LIKE '$id'";
        $result = mysqli_query($conexao, $pesquisa);
        
        /*
         * É realizada uma verificação, a fim de saber se o orçamento inserido já foi cadastrado.
         */
        if (mysqli_num_rows($result) > 0) {
            echo"<h1>O orçamento já EXISTE</h1>";
        } else {
            mysqli_query($conexao, $insere);
            echo"<h1>Orçamento cadastrado!</h1>";
        }

        mysqli_close($conexao);
        ?>
        <a href="formconsulta.php">Consultar orçamentos</a>
        <br>
        <a href="index.html">Cadastrar novo orçamento</a>
    </body>
</html>
