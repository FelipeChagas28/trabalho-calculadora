<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C.O</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <?php
    $pv = $_POST['pv'] ?? 0;
    $gv = $_POST['gv'] ?? 0;
    $gf = $_POST['gf'] ?? 0;
    $lucro = $_POST['lucro'] ?? 0;
    $receita = $_POST['receita'] ?? 0;
    
    ?>

    <div class="container-al-direta">

        <div class="header">
            <button onclick="window.location.href='../menus.php'">Voltar</button>
            <h1>Análise marginal</h1>
        </div>


        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST"> 
            <div class="valores-valores">
                <h3>A.L</h3>
                <label for="pv">Preço de venda</label>
                <input type="number" name="pv" id="pv" value="<?php echo $pv; ?>"> 
                <label for="receita">Receita</label>
                <input type="number" name="receita" id="receita" value="<?php echo $receita; ?>"> 
                <label for="gv">Gastos variáveis</label>
                <input type="number" name="gv" id="gv" value="<?php echo $gv; ?>">
                <label for="gf">Gastos fixos</label>
                <input type="number" name="gf" id="gf" value="<?php echo $gf; ?>">
                <label for="lucro">Lucro</label>
                <input type="number" name="lucro" id="lucro" value="<?php echo $lucro; ?>">
            </div>

            <input type="submit" value="Calcular" id="calcular">
        </form>

        <section>
            <?php

            $mc = $receita - $gv;
            $peUnidade = $gf / $mc;
            $peValor = $peUnidade * $receita;
            $gao = $mc / $lucro;
            $gaoLucro = $gao * $lucro;
            
            echo "<h2>M.C: " . number_format($mc, 2, ',', '.') . "</h2>";
            echo "<h2>P.E em unidades: " . number_format($peUnidade, 3, ',', '.') . "</h2>";
            echo "<h2>P.E em valor: " . number_format($peValor, 2, ',', '.') . "</h2>";
            echo "<h2>G.A.O: " . number_format($gao, 2, ',', '.') . "</h2>";
            echo "<h2>G.A.O em valor: " . number_format($gaoLucro, 2, ',', '.') . "</h2>";

            ?>
        </section>


    </div>
</body>

</html>