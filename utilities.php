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