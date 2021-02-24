
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

        <?php foreach ($users as $i) : ?>

             <li>
            <?= $i->name; ?>
            </li>
        <?php endforeach; ?>


    <h1>submit Your name</h1>

    <form method="POST" action="/names">
    <input name="name"></input>
    <button type="submit"> ok</button>
    </form>



    <?php require ('partials/footer.php'); ?>