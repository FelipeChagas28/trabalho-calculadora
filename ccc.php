<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C.C.C</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <?php
    //Guarda os valores dos inputs
    $pmeValor = $_POST['pmeValor'] ?? 0;
    $pmrValor = $_POST['pmrValor'] ?? 0;
    $pmpValor = $_POST['pmpValor'] ?? 0;
    $pmeTempo = $_POST['pmeTempo'] ?? 0;
    $pmrTempo = $_POST['pmrTempo'] ?? 0;
    $pmpTempo = $_POST['pmpTempo'] ?? 0;
    ?>

    <div class="container-ccc">

        <div class="header">
            <button onclick="window.location.href='menus.php'">Voltar</button>
            <h1>C.C.C</h1>
        </div>


        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST"> 
            <div class="ccc-valores">
                <h3>C.C.C Valores</h3>
                <label for="pmeValor">PME</label>
                <input type="number" name="pmeValor" id="pmeValor" value="<?php echo $pmeValor; ?>" required> 
                <label for="pmrValor">PMR</label>
                <input type="number" name="pmrValor" id="pmrValor" value="<?php echo $pmrValor; ?>" required>
                <label for="pmpValor">PMP</label>
                <input type="number" name="pmpValor" id="pmpValor" value="<?php echo $pmpValor; ?>" required>
            </div>

            <div class="ccc-tempo">
                <h3>C.C.C Tempo</h3>
                <label for="pmeTempo">PME</label>
                <input type="number" name="pmeTempo" id="pmeTempo" value="<?php echo $pmeTempo; ?>" required>
                <label for="pmrTempo">PMR</label>
                <input type="number" name="pmrTempo" id="pmrTempo" min="0" value="<?php echo $pmrTempo; ?>" required>
                <label for="pmpTempo">PMP</label>
                <input type="number" name="pmpTempo" id="pmpTempo" min="0" value="<?php echo $pmpTempo; ?>" required>
            </div>

            <input type="submit" value="Calcular" id="calcular">
        </form>

        <section>
            <?php
            $cccValor = $pmeValor + $pmrValor - $pmpValor;
            echo "<h2>C.C.C valor: R$ " . number_format($cccValor, 2, ',', '.') . "</h2>";

            $cccTempo = $pmeTempo + $pmrTempo - $pmpTempo;
            echo "<h2>C.C.C Tempo: " . $cccTempo . " dias</h2>";
            ?>
        </section>


    </div>
</body>

</html>