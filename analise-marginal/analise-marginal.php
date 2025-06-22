<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Análise marginal</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <?php
    $vendasAtuais = $_POST['vendasAtuais'] ?? 0;
    $vendasPrevistas = $_POST['vendasPrevistas'] ?? 0;
    $precoVenda = $_POST['precoVenda'] ?? 0;
    $custoVarivel = $_POST['custoVarivel'] ?? 0;
    $prazoAtual = $_POST['prazoAtual'] ?? 0;
    $prazoNovo = $_POST['prazoNovo'] ?? 0;
    $inadimplenciaAtual = $_POST['inadimplenciaAtual'] ?? 0;
    $inadimplenciaNovo = $_POST['inadimplenciaNovo'] ?? 0;
    $juros = $_POST['juros'] ?? 0;
    ?>

    <div class="container-al">

        <div class="header">
            <button onclick="window.location.href='../menus.php'">Voltar</button>
            <h1>Análise marginal completo</h1>
        </div>


        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST"> 
            <div class="valores-valores">
                <h3>A.L</h3>
                <label for="vendasAtuais">Vendas atuais em unidades</label>
                <input type="number" name="vendasAtuais" id="vendasAtuais" value="<?php echo $vendasAtuais; ?>"> 
                <label for="vendasPrevistas">Vendas previstas em unidades</label>
                <input type="number" name="vendasPrevistas" id="vendasPrevistas" value="<?php echo $vendasPrevistas; ?>">

                <label for="precoVenda">Preço de venda em R$</label>
                <input type="number" name="precoVenda" id="precoVenda" value="<?php echo $precoVenda; ?>">
                <label for="custoVarivel">Custo variável em R$</label>
                <input type="number" name="custoVarivel" id="custoVarivel" value="<?php echo $custoVarivel; ?>">

                <label for="prazoAtual">Prazo médio de recebimento (atual)</label>
                <input type="number" name="prazoAtual" id="prazoAtual" value="<?php echo $prazoAtual; ?>">
                <label for="prazoNovo">Prazo médio de recebimento (novo)</label>
                <input type="number" name="prazoNovo" id="prazoNovo" value="<?php echo $prazoNovo; ?>">

                <label for="inadimplenciaAtual">Inadinplência (atual)</label>
                <input type="number" name="inadimplenciaAtual" id="inadimplenciaAtual" step="0.1" value="<?php echo $inadimplenciaAtual; ?>">
                <label for="inadimplenciaNovo">Inadinplência (nova)</label>
                <input type="number" name="inadimplenciaNovo" id="inadimplenciaNovo" step="0.1" value="<?php echo $inadimplenciaNovo; ?>">

                <label for="juros">Taxa de Juros</label>
                <input type="number" name="juros" id="juros" value="<?php echo $juros; ?>">
            </div>

            <input type="submit" value="Calcular" id="calcular">
        </form>

        <section>
            <?php

            $vendas = $vendasPrevistas - $vendasAtuais;
            $lucro = $precoVenda - $custoVarivel;
            $al = $vendas * $lucro;

            echo "<h2>AL: R$ ". number_format($al, 2, ',', '.') ."</h2>";

            $cimdrAtual = $vendasAtuais * $custoVarivel / (360 / $prazoAtual);
            $cimdrNovo = $vendasPrevistas * $custoVarivel / (360 / $prazoNovo);
            $cimdr = ($cimdrNovo - $cimdrAtual) * ($juros / 100);

            echo "<h2>CIMDR: R$ " . number_format($cimdr, 2, ',', '.') . "</h2>";

            $cpmAtual = $vendasAtuais * $precoVenda * ($inadimplenciaAtual / 100);
            $cpmNovo = $vendasPrevistas * $precoVenda * ($inadimplenciaNovo / 100);
            $cpm = $cpmNovo - $cpmAtual;

            echo "<h2>CPM: R$ " . number_format($cpm, 2, ',', '.') . "</h2>";

            $am = $al - $cimdr - $cpm;
            echo "<h2>Análise Marginal: R$ " . number_format($am, 2, ',', '.') . "</h2>";
            ?>
        </section>


    </div>
</body>

</html>