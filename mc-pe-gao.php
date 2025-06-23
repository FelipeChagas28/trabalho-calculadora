<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C.O</title>
    <link rel="stylesheet" href="css/style.cs">
</head>

<body>

    <?php
    $receita = $_POST['receita'] ?? 320000;
    $producao = $_POST['producao'] ?? 8000;
    $materiaPrima = $_POST['materiaPrima'] ?? 90000;
    $maoObra = $_POST['maoObra'] ?? 32000;
    $encargosSoc = $_POST['encargosSoc'] ?? 6500;
    $gastosGerais = $_POST['gastosGerais'] ?? 40000;
    $servicosTerc = $_POST['servicosTerc'] ?? 25000;
    $despesasAdm = $_POST['despesasAdm'] ?? 20000;
    $comissaoVendas = $_POST['comissaoVendas'] ?? 9500;
    $fretes = $_POST['fretes'] ?? 4000;

    ?>

    <div class="container-al-direta">

        <div class="header">
            <button onclick="window.location.href='menus.php'">Voltar</button>
            <h1>Análise marginal</h1>
        </div>


        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
            <div class="valores-valores">
                <h3>A.L</h3>
                <label for="receita">Receita</label>
                <input type="number" name="receita" id="receita" value="<?php echo $receita; ?>">
                <label for="producao">Produção</label>
                <input type="number" name="producao" id="producao" value="<?php echo $producao; ?>">
                <label for="materiaPrima">Matéria prima</label>
                <input type="number" name="materiaPrima" id="materiaPrima" value="<?php echo $materiaPrima; ?>">
                <label for="maoObra">Mão de obra:</label>
                <input type="number" name="maoObra" id="maoObra" value="<?php echo $maoObra; ?>">
                <label for="encargosSoc">Encargos sociais</label>
                <input type="number" name="encargosSoc" id="encargosSoc" value="<?php echo $encargosSoc; ?>">
                <label for="gastosGerais">Gastos gerais</label>
                <input type="number" name="gastosGerais" id="gastosGerais" value="<?php echo $gastosGerais; ?>">
                <label for="servicosTerc">Serviços tercerizados</label>
                <input type="number" name="servicosTerc" id="servicosTerc" value="<?php echo $servicosTerc; ?>">
                <label for="despesasAdm">Despesas administrativas</label>
                <input type="number" name="despesasAdm" id="despesasAdm" value="<?php echo $despesasAdm; ?>">
                <label for="comissaoVendas">Comissão de vendas</label>
                <input type="number" name="comissaoVendas" id="comissaoVendas" value="<?php echo $comissaoVendas; ?>">
                <label for="fretes">Fretes</label>
                <input type="number" name="fretes" id="fretes" value="<?php echo $fretes; ?>">
            </div>

            <input type="submit" value="Calcular" id="calcular">
        </form>

        <section>
            <?php

            $gv = $materiaPrima + $gastosGerais + $servicosTerc + $comissaoVendas + $fretes;
            $gf = $maoObra + $encargosSoc + $despesasAdm;

            $lucro = $receita - ($gv + $gf);

            $mc = $receita - $materiaPrima;
            $mcU = ($receita / $producao) - ($materiaPrima / $producao);

            $peUnidade = $gf / $mcU;
            $peValor = $peUnidade * ($receita / $producao);

            $gao = $mc / $lucro;
            $gaoLucro = $gao * $lucro;

            echo "<h2>M.C: " . number_format($mc, 2, ',', '.') . "</h2>";
            echo "<h2>M.C em KGs: " . number_format($mcU, 2, ',', '.') . "</h2>";
            echo "<h2>P.E em unidades: " . number_format($peUnidade, 3, ',', '.') . "</h2>";
            echo "<h2>P.E em valor: " . number_format($peValor, 2, ',', '.') . "</h2>";
            echo "<h2>Lucro: " . number_format($lucro, 2, ',', '.') . "</h2>";
            echo "<h2>G.A.O: " . number_format($gao, 2, ',', '.') . "</h2>";
            echo "<h2>G.A.O em valor: " . number_format($gaoLucro, 2, ',', '.') . "</h2>";

            ?>
        </section>


    </div>
</body>

</html>