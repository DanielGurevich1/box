<?php
require __DIR__ . '/bootstrap.php';
_d($_POST, 'alio post');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"
        integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ=="
        crossorigin="anonymous"></script>
    <script>
    const uriPath = '<?= URL ?>';
    </script>
    <script src="<?= URL ?>app.js" defer></script>
    <!-- // defer atideda eilutes kroviyma. -->
    <title>Bannana Boxes</title>
</head>

<body>
    <h1>Bannana Boxes</h1>
    <a href="<?= URL ?>create.php">Create</a>
    <a href="<?= URL ?>">Index</a>
    <!-- elemento spausdinimas -->
    <ul id="list">
        <?php foreach (readData() as $box) : ?>
        <li style="padding: 10px;">
            <span>ID: <?= $box['id'] ?></span>
            <span>Count: <?= $box['bannana'] ?></span>
            <a class="btn btn-outline-success" href="<?= URL ?>update.php?id=<?= $box['id'] ?>">EDIT</a>
            <form style="display:inline-block;" action="<?= URL ?>delete.php?id=<?= $box['id'] ?>" method="post">
                <button type="submit" class="btn btn-outline-danger">DELETE</button>
            </form>
        </li>
        <?php endforeach ?>
    </ul>
    <!-- forma elemento kurymui -->
    <div style="padding: 26px; border: 1px solid black; margin: 30px;">
        Bannanas in box: <input type="text" id="count">
        <br><br>
        <button class="btn btn-outline-info" type="button">Create</button>
    </div>


</body>

</html>