<?php include 'templates/header.html.php'; ?>

    <h1>Edytuj dane użytkownika</h1>
    <form action="http://<?php echo $_SERVER['HTTP_HOST']?>/<?php echo \Config\Website\Config::$subdir?>?controller=User&action=update" method="post">
        <input type="hidden" id="id" name="id" value="<?php echo $this->get('id') ?>">
        Imię: <input type="text" name="name" value="<?php echo $this->get('name') ?>"/><br />
        Nazwisko: <input type="text" name="surname" value="<?php echo $this->get('surname') ?>"/><br />
        Login: <input type="text" name="login" value="<?php echo $this->get('login') ?>"/><br />
        Nowe hasło: <input type="password" name="password" value="<?php echo $this->get('password') ?>"/><br />
        <input type="submit" value="Aktualizuj" />
    </form>

<?php include 'templates/footer.html.php'; ?>