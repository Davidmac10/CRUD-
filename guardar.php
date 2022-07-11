<?php
    include("db.php");

    if(isset($_POST['enviar'])){
        $id_post = $_POST['id_post'];
        $name_cli = $_POST['name_cli'];
        $fav_pornstar = $_POST['fav_pornstar'];

        $query = "INSERT INTO postimg (name_cli, fav_pornstar) VALUES ('$name_cli','$fav_pornstar')";
        $result = mysqli_query($conn, $query);

        if(!$result){
            die("Query Failed");
        }

        header("Location: index.php");
    }
?>