
<?php 

    function getEmail(){
        
        $email = $_POST['email'] ?? null;
        //var_dump($email);
        
        if(str_contains($email,'@') && str_contains($email,'.')){
            echo '<p>accesso garantito</p>';
        }else{
            echo '<p>acesso negato</p>';
        }

        return $email;
    
    }
    //var_dump($email);
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
            <label for="email">Email</label>
            <input type="text" name="email" id="" placeholder="Inserisci la tua email">
            <input type="submit">
        </form>

        <p> <?php echo getEmail() ?></p>

    </main>
    
</body>
</html>