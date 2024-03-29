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
        
        <label for="aloituspaiva">Mikä päivä?</label> 
        <input type="date" id="aloituspaiva" name="aloituspaiva" value="" min="2024-01-01" max="2024-12-31" />
        
        <input type="submit" value="Lähetä">
    </form>

    <?php

        $tasks = array();

        $id = 1;

        $aloituspaiva = date("d/m/Y");

        if(isset($_GET['kuvaus'], $_GET['aloituspaiva'])){
            $kuvaus = htmlspecialchars($_GET['kuvaus']);
            $aloituspaiva = htmlspecialchars($_GET['aloituspaiva']);

            $newTask = new Task($id, $kuvaus, $aloituspaiva);
            
            // array_push($myArray, new Task(1, “Go shopping”, “2024/01/23”));
            array_push($tasks, $newTask);
            foreach ($tasks as $task) {
                echo $task;
            }

            
            // while ():
            //     echo $tasks;
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