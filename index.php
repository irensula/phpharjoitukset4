<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- css -->
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <title>To Do List</title>
</head>
<body>

    <?php require_once "Task.php" ?>
<div class="center-container">
    <h2>ToDo List</h2>

    <form action="index.php" method="get">
        <div class="container">
            <label for="kuvaus">Mitä haluat tehdä?</label> 
            <input type="text" name="kuvaus" id="kuvaus" maxlength=50><br>
        
            <label for="aloituspaiva">Mikä päivä?</label> 
            <input type="date" id="aloituspaiva" name="aloituspaiva" value="" min="2024-01-01" max="2024-12-31" />
        </div>   
        <button class="button-56" role="button" type="submit">Lähetä</button>
    </form>
</div>
    

    
    

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
                echo "<p>$task</p>";
            }

            
            // while ():
            //     echo $tasks;
            //     $id++;
            // endwhile;
        }
    ?>

</body>
</html>