<?php
    include("db.php");

    if(isset($_GET['id_post'])){
        $id_post = $_GET['id_post'];

        $query = "SELECT * FROM postimg WHERE id_post = $id_post";
        $result = mysqli_query($conn, $query);

        if(mysqli_num_rows($result) == 1){
            $row = mysqli_fetch_array($result);
            $name_cli = $row['name_cli'];
            $fav_pornstar = $row['fav_pornstar'];

        }
    }

    if(isset($_POST['update'])){
        $id_post = $_GET['id_post'];
        $name_cli = $_POST['name_cli'];
        $fav_pornstar = $_POST['fav_pornstar'];

        $query = "UPDATE postimg set name_cli = '$name_cli', fav_pornstar = '$fav_pornstar' where id_post = $id_post";
        $result = mysqli_query($conn, $query);

        header("Location: index.php");
    }
?>

<?php
    include("includes/header.php")
?>

<div class="contenedor-center">
    <div class="contenedor-formulario_update">
        <form action="editar.php?id_post=<?php echo $_GET['id_post'];?>" method="post">
            <h1>FORM</h1>
            <input class="normal-input" type="number" name="id_post" placeholder="Identificacion automatica" value="<?php echo $id_post?>" readonly>
            <input class="normal-input" type="text" name="name_cli" placeholder="Ingresa tu nombre" value="<?php echo $name_cli?>" require autofocus>
            <input class="normal-input" type="text" name="fav_pornstar" placeholder="Ingresa tu actriz Porno favorita" value="<?php echo $fav_pornstar?>">
            <input class="upload-submit" type="submit" name="update" value="update">
        </form>
    </div>
</div>

<?php
    include("includes/footer.php")
?>