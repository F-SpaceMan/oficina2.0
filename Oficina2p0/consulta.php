<html>
    <!--
        Esta página faz o tratamento dos dados recebidos pela página formconsulta.php
    -->
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <title>Consulta de orçamentos</title>
    </head>
    <body>

        <h2><a href="formconsulta.php">Fazer outra consulta</a></h2>
        <h2><a href="index.html">Cadastrar novo orçamento</a></h2>

        <?php
        session_start();
        include('.\conect\conexao.php');
        $data1 = filter_input(INPUT_POST, 'data1', FILTER_SANITIZE_SPECIAL_CHARS);
        $data2 = filter_input(INPUT_POST, 'data2', FILTER_SANITIZE_SPECIAL_CHARS);
        $qcliente = filter_input(INPUT_POST, 'cliente', FILTER_SANITIZE_SPECIAL_CHARS);
        $qvendedor = filter_input(INPUT_POST, 'vendedor', FILTER_SANITIZE_SPECIAL_CHARS);

        //São criadas as variáveis acima, para a query que retornará uma tabela já filtrada.
        
        $resultado = "SELECT * FROM orcamento WHERE `cliente` in('$qcliente') AND `vendedor` in('$qvendedor') AND datahora BETWEEN '$data1' AND '$data2' ORDER BY datahora DESC";
        $resultadofinal = mysqli_query($conexao, $resultado);

        echo '<table class="tabela" border=1 cellspacing=0 cellpadding=2 bordercolor="black"> <tr><p><td> <p> ID </p> </td><td> Cliente </td><td> <p> Data e Hora </p> </td><td> Vendedor </td><td><p> Descrição </p></td><td> Valor do orçamento </td><td colspan="2"><p> Ações </p></td></tr>';
        while ($rowsresult = mysqli_fetch_array($resultadofinal)) {
            /*
             * A variável $_SESSION é utilizada aqui para que o atributo id seja resgatado em formupdate.php,
             * por meio de sessão 
             */
            $_SESSION['id'] = $rowsresult['id'];
            echo("<tr><td>" . $rowsresult['id'] . "</td>");
            echo("<td><p>" . $rowsresult['cliente'] . "</p></td>");
            echo("<td>" . $rowsresult['datahora'] . "</td>");
            echo("<td><p>" . $rowsresult['vendedor'] . "</p></td>");
            echo("<td>" . $rowsresult['descricao'] . "</td>");
            echo("<td><p>" . $rowsresult['valor'] . "</p></td>");
            echo('<td> <a href="formupdate.php"> Editar</a> </td>');
            echo('<td> <a href="delete.php"> Deletar</a> </td></tr>');
            /*
             * As linhas da tabela apresentam as ações deletar e editar
             */
        }
        echo '</table>';
        ?>

    </body>
</html>

