<?php

function getEmail()
{

    $email = $_POST['email'] ?? null;
    //var_dump($email);
    $event = null;
    

    if (str_contains($email, '@') && str_contains($email, '.')) {
        // echo '
        //     <div class="alert alert-success" role="alert">
        //         Accesso garantito
        //     </div>
        // ';
        return $event = true;
    } else {
        // echo '
        //     <div class="alert alert-danger" role="alert">
        //         Accesso negato
        //     </div>
        // ';
        return $event = false;
    }

    
}
//var_dump($email);
