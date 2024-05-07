<?php
$email = $_POST['email'] ?? null;
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
    <?php 
    
    include __DIR__.'/header.php';

    ?>

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
    
    include __DIR__.'/footer.php';

    ?>

</body>

</html>