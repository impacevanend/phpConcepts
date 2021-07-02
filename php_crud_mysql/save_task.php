<?php

include('db.php');

//* Comprobación de recibir datos
if(isset($_POST['save_task'])){

    $title = $_POST['title'];
    $description = $_POST['description'];

    
    
    $query = "INSERT INTO task(title,description) VALUES ('$title', '$description');
    $result = mysqli_query($conn, $query);
    if(!$result){
        die('Query Failed');
    }

    echo 'saved';
}

?>

