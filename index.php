<?php
//include __DIR__ . '/utilities.php';

$email = $_POST['email'] ?? null;

//var_dump($email);

session_start();

$_SESSION['email'] = $email;

if ($email !== null) {
    header('Location: ./subscription.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>PHP iscrizione newsletter</title>
</head>

<body>
    <div class="container">
        <div class="row ">
            <?php

            include __DIR__ . '/header.php';

            ?>
   
        </div>
        <?php

            include __DIR__ . '/footer.php';

        ?>
    </div>
</body>

</html>