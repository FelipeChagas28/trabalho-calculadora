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
    //Guarda os valores dos inputs
    $pmeValor = $_POST['pmeValor'] ?? 0;
    $pmrValor = $_POST['pmrValor'] ?? 0;
    $pmeTempo = $_POST['pmeTempo'] ?? 0;
    $pmrTempo = $_POST['pmrTempo'] ?? 0;
    ?>

    <div class="container-co">

        <div class="co-header">
            <button onclick="window.location.href='menus.php'">Voltar</button>
            <h1>C.O</h1>
        </div>


        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST"> <!-- $_SERVER['PHP_SELF'] é usado para enviar os valores para a mesma página.-->
            <div class="co-valores">
                <h3>C.O Valores</h3>
                <label for="pmeValor">PME (valor)</label>
                <input type="number" name="pmeValor" id="pmeValor" value="<?php echo $pmeValor; ?>" required> <!-- O value se da para não perder os valroes digitados caso a página seja recarregada-->
                <label for="pmrValor">PMR (valor)</label>
                <input type="number" name="pmrValor" id="pmrValor" value="<?php echo $pmrValor; ?>" required>
            </div>

            <div class="co-tempo">
                <h3>C.O Tempo</h3>
                <label for="pmeTempo">PME (tempo)</label>
                <input type="number" name="pmeTempo" id="pmeTempo" value="<?php echo $pmeTempo; ?>" required>
                <label for="pmrTempo">PMR (tempo)</label>
                <input type="number" name="pmrTempo" id="pmrTempo" min="0" value="<?php echo $pmrTempo; ?>" required>
            </div>

            <input type="submit" value="Calcular" id="calcular">
        </form>

        <section>
            <?php
            $coValor = $pmeValor + $pmrValor;
            echo "<h2>Valor do C.O: R$ " . number_format($coValor, 2, ',', '.') . "</h2>";

            $coTempo = $pmeTempo + $pmrTempo;
            echo "<h2>Valor do C.O (Tempo): " . $coTempo . " dias</h2>";
            ?>
        </section>


    </div>
</body>

</html>