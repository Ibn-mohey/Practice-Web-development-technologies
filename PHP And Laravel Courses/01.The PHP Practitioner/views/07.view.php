
    <?php require ('partials/head.php'); ?>



    <ul>
        <?php foreach ($tasks as $ii) : ?>

             <li>
                <?php if ($ii->completed) : ?>
                    <del>
                        <?= $ii->description; ?>
                    </del>
<!-- not completed -->
                <?php else : ?>
                    <?= $ii->description; ?>
                <?php endif; ?>
            </li>
        <?php endforeach; ?>
    </ul>



    <?php require ('partials/footer.php'); ?>