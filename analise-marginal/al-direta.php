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
    $al = $_POST['al'] ?? 0;
    $cimdr = $_POST['cimdr'] ?? 0;
    $cpm = $_POST['cpm'] ?? 0;
    
    ?>

    <div class="container-al-direta">

        <div class="header">
            <button onclick="window.location.href='../menus.php'">Voltar</button>
            <h1>Análise marginal</h1>
        </div>


        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST"> 
            <div class="valores-valores">
                <h3>A.L</h3>
                <label for="al">A.L</label>
                <input type="number" name="al" id="al" value="<?php echo $al; ?>"> 
                <label for="cimdr">C.I.M.D.R</label>
                <input type="number" name="cimdr" id="cimdr" value="<?php echo $cimdr; ?>">
                <label for="cpm">C.P.M</label>
                <input type="number" name="cpm" id="cpm" value="<?php echo $cpm; ?>">
            </div>

            <input type="submit" value="Calcular" id="calcular">
        </form>

        <section>
            <?php

            $am = $al - $cimdr - $cpm;
            
            echo "<h2>Análise marginal: " . number_format($am, 2, ',', '.') . "</h2>";
            ?>
        </section>


    </div>
</body>

</html>