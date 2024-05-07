<?php

session_start();
$email = $_SESSION['email'];
include __DIR__ . '/utilities.php';

session_unset();
if ($email === null) {
    header('Location: ./index.php');
}
//header('Location: ./index.php')
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Result</title>
</head>

<body>
    <main>
        <div class="alert alert-primary" role="alert">
            <?php echo $email ?>
        </div>


        <div>
            <?php
            if (getEmail() === true) {
            ?>
                <div class="alert alert-success" role="alert">
                    Accesso garantito
                </div>

            <?php

            } else {
            ?>

                <div class="alert alert-danger" role="alert">
                    Accesso negato
                </div>

            <?php
            }
            ?>
        </div>
    </main>
    <?php

    include __DIR__ . '/footer.php';

    ?>
</body>

</html>