<?php
    include ("db.php");
?>

<?php
    include("includes/header.php")
?>

<div class="contenedor-formulario-tabla">
    <div class="contenedor-formulario">
        <form action="guardar.php" method="post">
            <h1>FORM</h1>
            <input class="normal-input" type="number" name="id_post" placeholder="Identificacion automatica" readonly>
            <input class="normal-input" type="text" name="name_cli" placeholder="Ingresa tu nombre" require autofocus>
            <input class="normal-input" type="text" name="fav_pornstar" placeholder="Ingresa tu actriz Porno favorita">
            <input class="upload-submit" type="submit" name="enviar">
        </form>
    </div>
    <div class="contenedor-tabla">
        <table>
            <tr>
                <th>ID</th>
                <th>AUTOR</th>
                <th>FAVORITE PORN STAR</th>
                <th>Actions</th>
            </tr>
            <?php
                $query = "SELECT * FROM postimg";
                $result = mysqli_query($conn, $query);
                while ($row = mysqli_fetch_array($result)){ ?>
                    <tr>
                        <td><?php echo $row['id_post']?></td>
                        <td><?php echo $row['name_cli']?></td>
                        <td><?php echo $row['fav_pornstar']?></td>
                        <td>
                            <a href="editar.php?id_post=<?php echo $row['id_post'];?>">E</a>
                            <a href="eliminar.php?id_post=<?php echo $row['id_post'];?>">D</a>
                        </td>
                    </tr>
                <?php } ?> 
        </table>
    </div>
</div>

<?php
    include("includes/footer.php")
?>


