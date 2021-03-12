<?php 
require __DIR__.'/bootstrap.php';

//POST scenarijus
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $bannanas = $_POST['count'] ?? 0;
    $bannanas = (int) $bannanas;
    create($bannanas); // sukuria
    header('Location: '.URL);
    die;

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Box</title>
</head>
<body>
    <h1>New Bannana Box</h1>
    <a href="<?= URL ?>create.php">Create</a>
    <a href="<?= URL ?>">Index</a>

    <form action="<?= URL ?>create.php" method="post">
    Bannanas in box: <input type="text" name="count">
    <button type="submit">Create</button>
    </form>


</body>
</html>