<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List</title>
</head>
<body>

    <?php require_once "Task.php" ?>
    
    <h2>To Do List</h2>

    <form action="harjoitukset4.php" method="get">
        
        <label for="kuvaus">Mitä haluat tehdä?</label> 
        <input type="text" name="kuvaus" id="kuvaus" maxlength=50><br>
        
        <label for="aloituspaiva">Mitä haluat tehdä?</label> 
        <input type="text" name="aloituspaiva" id="aloituspaiva" maxlength=50><br>
        
        <input type="submit" value="Lähetä">
    </form>

    <?php

        $taulukko = array();

        $id = 1;

        $aloituspaiva = date("d/m/Y");

        if(isset($_GET['kuvaus'])){
            $kuvaus = htmlspecialchars($_GET['kuvaus']);
            $aloituspaiva = htmlspecialchars($_GET['aloituspaiva']);
            echo $kuvaus;
            // array_push($myArray, new Task(1, “Go shopping”, “2024/01/23”));
            array_push($taulukko, new Task($id, $kuvaus, $aloituspaiva));
            
            // while ():
            //     echo $taulukko;
            //     $id++;
            // endwhile;
        }
    ?>

</body>
</html>

<!-- if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];

    require_once "../Classes/Dbh.php";
    require_once "../Classes/Signup.php";

    $signup = new Signup($username, $pwd);
    $signup->signupUser();
} -->