<header>

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

</header>