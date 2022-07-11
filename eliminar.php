<?php
    include("db.php");

    if(isset($_GET['id_post'])){
        $id_post = $_GET['id_post'];

        $query = "DELETE FROM postimg WHERE id_post = $id_post";
        $result = mysqli_query($conn, $query);

        if(!$result){
            die("Query Failed");
        }

        header("Location: index.php");
    }
?>

