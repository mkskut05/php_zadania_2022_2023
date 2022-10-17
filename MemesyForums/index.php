<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles/style.scss">
    <title>MemesyForums</title>
</head>
<body>
    <div id="polaczenie_bazy" style="color:white;">
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database_name = "databaza_memesyforums";
    
    $conn = new mysqli($servername, $username, $password, $database_name);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Baza danych połączona";
    ?>
    </div>
    <div id="logowanie">
    <form id="formalogowania" method="post" required>
        <label>Name</label>
        <input type="text" name="name" id="name">
        <br>
        <?php
        if(isset($_GET['name'])){
            $name = $_GET['name'];
            echo "Twoje imie to: ". $name;
        } else{
            echo "Nie podales imie";
        }
        ?>
        <br>
        <label>E-mail</label>
        <input type="email" name="email" id="email">
        <br>
        <?php
        if(isset($_GET['email'])){
            $email = $_GET['email'];
            echo "Twoj email to: ". $email;
        } else{
            echo "Nie podałes emaila";
        }
        ?>
        <br>
        <label>Hasło</label>
        <input type="password" name="password" id="password">
        <br>
        <?php
        if(isset($_GET['password'])){
            echo "ok";
        } else{
            echo "Nie podałes hasło";
        }
        ?>
        <br>
        <label>Potwierdz hasło</label>
        <input type="password" name="password" id="confirmpassword">
        <br>
        <?php
        if(isset($_GET['confirmpassword'])){
            echo "ok";
        } else{
            echo "Nie potwierdziłeś hasła";
        }
        ?>
        <br>
        <input type="submit" value="OK">        
    </form>
    </div>
</body>
</html>
