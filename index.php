<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php
        require_once "class.php";
    ?>
</head>
<body>
    <form action="index.php" method="post">
        Student : <input type="text" name="student">
        Colour : <input type="text" name="colour">
        <input type="submit">
    </form>

    <?php

        $student = $_POST['student'];
        $colour = $_POST['colour'];

        $student = new colour;
        $student->set_name($student);
        //echo $student->get_name();
        print_r ($student->get_name());

        $colour = new colour;
        $colour->set_colour($colour);
        echo $colour->get_colour();

        
    ?>
</body>
</html>