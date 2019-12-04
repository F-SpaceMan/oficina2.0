<!DOCTYPE html>
<!--
    A página consulta.php, bem como a página index.html, possui links por todas as outras páginas.
    Nesta, em específico, há o formulário para consulta de orçamentos e uma tabela completa,
    para consulta sem preenchimento do form.
    Os atributos do form são passados à página consulta.php
-->
<html>
    <head>
        <link rel="stylesheet" href="style.css" type="text/css"/>
        <title>Consulta de orçamentos</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="bloco">
            <form action='consulta.php' method="post">
                <p>
                    Intervalo de datas:<br>
                    <input type="datetime-local" name="data1">
                    <input type="datetime-local" name="data2">
                </p>
                <p>
                    Nome do cliente:
                    <input type="text" name="cliente">
                </p>
                <p>
                    Nome do vendedor:
                    <input type="text" name="vendedor">
                </p>
                <p>
                    <input type="submit" value="Pesquisar">
                </p>
            </form>

            <a href="index.html">Cadastrar novo orçamento</a>

        </div>
        <?php
        session_start();
        include('.\conect\conexao.php');

        $resultado = "SELECT * FROM orcamento ORDER BY datahora DESC";
        $resultadofinal = mysqli_query($conexao, $resultado);

        echo '<table class="tabela" border=1 cellspacing=0 cellpadding=2 bordercolor="black"> <tr><p><td> <p> ID </p> </td><td> Cliente </td><td> <p> Data e Hora </p> </td><td> Vendedor </td><td><p> Descrição </p></td> <td> Valor do orçamento </td> <td colspan="2"><p> Ações </p></td> </tr>';
        while ($rowsresult = mysqli_fetch_array($resultadofinal)) {
            $_SESSION['id'] = $rowsresult['id'];
            echo("<tr><td>" . $rowsresult['id'] . "</td>");
            echo("<td><p>" . $rowsresult['cliente'] . "</p></td>");
            echo("<td>" . $rowsresult['datahora'] . "</td>");
            echo("<td><p>" . $rowsresult['vendedor'] . "</p></td>");
            echo("<td>" . $rowsresult['descricao'] . "</td>");
            echo("<td><p>" . $rowsresult['valor'] . "</p></td>");
            echo('<td> <a href="formupdate.php"> Editar</a> </td>');
            echo('<td> <a href="delete.php"> Deletar</a> </td></tr>');
        }
        echo '</table>';
        ?>
    </body>
</html>
