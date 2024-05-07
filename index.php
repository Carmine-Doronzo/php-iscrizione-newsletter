<?php
$email = $_POST['email'];
include __DIR__ . '/utilities.php';



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

    <main>

        <form action="" method="POST">
            <!-- ho messo un input di tipo text perchè l'input di tipo email fa già il controllo sulla @ e il .  -->

            <!-- <label for="email">Email</label> -->
            <!-- <input type="text" name="email" id="" placeholder="Inserisci la tua email"> -->
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">@</span>
                <input type="text" class="form-control" placeholder="Inserisci email" name="email" aria-label="Username" aria-describedby="basic-addon1">
            </div>

            <input type="submit" class="btn btn-primary">
        </form>
        
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

</body>

</html>