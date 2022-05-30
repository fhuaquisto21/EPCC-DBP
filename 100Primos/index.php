<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/main.css">
        <title>100 primos</title>
    </head>
    <body>
        <header>
            <h1>Fabricio Huaquisto Quispe</h1>
            <span>100 Primos</span>
        </header>
        <section>
                <?php
                    function esPrimo($n) {
                        if (($n < 2) || ($n > 2 && $n % 2 == 0)) {
                            return false;
                        }
                        for ($i = 3; $i < $n; $i += 2) {
                            if ($n % $i == 0) {
                                return false;
                            }
                        }
                        return true;
                    }

                    echo '<table>';
                    for ($i = 0; $i < 10; ++$i) {
                        echo '<tr>';
                        for ($y = 1; $y <= 10; ++$y) {
                            if (esPrimo(($i * 10) + $y)) {
                                echo '<th class="primo">' . ($i * 10) + $y . '</th>';
                            } else {
                                echo '<th>' . ($i * 10) + $y . '</th>';
                            }
                        }
                        echo '</tr>';
                   }
                   echo '</table>';
                ?>
       </section>
    </body>
</html>