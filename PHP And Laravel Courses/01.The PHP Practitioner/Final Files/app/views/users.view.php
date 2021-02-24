
    <?php require ('partials/head.php'); ?>


<h1>All users</h1>

        <?php foreach ($users as $i) : ?>

             <li>
            <?= $i->name; ?>
            </li>
        <?php endforeach; ?>


    <h1>submit Your name</h1>

    <form method="POST" action="/users">
    <input name="name"></input>
    <button type="submit"> ok</button>
    </form> 



    <?php require ('partials/footer.php'); ?>