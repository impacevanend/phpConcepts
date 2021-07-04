<?php
include("db.php");

if(isset($_POST['save_task'])){
    $title = $_POST['title'];
    $description = $_POST['description'];

    $query = "INSERT INTO task(title, description) VALUES('$title','$description')";
    $result = mysqli_query($conn, $query);
    if(!$result){
        die('Query Failed');

    }

    //*Guardando mensaje en sesión
    $_SESSION['message'] = 'Task Save succesfully';
    $_SESSION['message_type'] = 'success';


    //*echo 'saved'; instrucción indica que el registro fue exitoso
    header("Location: index.php");

}





?>