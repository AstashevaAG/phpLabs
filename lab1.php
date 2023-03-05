<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/my_reset.css">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <?php require "blocks/header.php" ?>


    <main class="main">
        <?php
        for ($i = 0; $i < 5; $i++) :
        ?>

            <div class="card">
                <img src="img/<?php echo ($i + 1) ?>.jpg" alt="..." class="card__bg">
                <div class="card__content">
                    <h2 class="card__title">Beautiful sunset</h2>
                    <p class="card__text">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolores enim adipisci dolor reprehenderit minus nulla reiciendis natus pariatur, soluta debitis numquam non alias, dolorum iste tempora
                    </p>
                </div>
            </div>


        <?php endfor; ?>
    </main>

    <?php require "blocks/footer.php" ?>

</body>

</html>