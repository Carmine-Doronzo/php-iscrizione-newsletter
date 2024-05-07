<?php


session_start();

$email = $_POST['email'] ?? null;

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
    <?php

    include __DIR__ . '/header.php';

    ?>

    <main>





    </main>

    <?php

    include __DIR__ . '/footer.php';

    ?>

</body>

</html>