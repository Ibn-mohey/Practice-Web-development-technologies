<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <ul>
        <?php foreach ($taskss as $ii) : ?>

            <li>
                <?php if ($ii->comp) : ?>
                    <del>
                    <?php endif; ?>

                    <?= $ii->desc; ?>


                    <?php if ($ii->comp) : ?>
                    </del>
                <?php endif; ?>
            </li>
        <?php endforeach; ?>

    </ul>

    <ul>
        <?php foreach ($taskss as $ii) : ?>

            <li>
                <?php if ($ii->comp) : ?>
                    <del>
                        <?= $ii->desc; ?>
                    </del>
                <?php else : ?>
                    <?= $ii->desc; ?>
                <?php endif; ?>
            </li>
        <?php endforeach; ?>

    </ul>

</body>

</html>