<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Sansita:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../css/reset.css">
        <link rel="stylesheet" href="../css/result.css">
        <title>Document</title>
    </head>
    <body>
        <header>
            <h1>
                <?php
                    echo htmlspecialchars($_POST["name"]) . " " . htmlspecialchars($_POST["lastname"]);
                ?>
            </h1>
        </header>
        <section>
            <p class="email">Correo electrónico: 
                <span>
                    <?php echo htmlspecialchars($_POST["email"]); ?>
                </span>
            </p>
            <p class="civilstatus">Estado civil: 
                <span>
                    <?php echo htmlspecialchars($_POST["civilstatus"]); ?>
                </span>
            </p>
            <p class="hobbies">Afsiones: 
                <span>
                    <?php echo htmlspecialchars($_POST["hobbies"]); ?>
                </span>
            </p>
        </section>
    </body>
</html>