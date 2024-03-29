<?php
include("../../plates/bd.php");

if (isset($_GET['txtID'])) {
    $txtID = isset($_GET["txtID"]) ? $_GET["txtID"] : "";

    $sentencia = $conexion->prepare("DELETE FROM  tbl_banners WHERE ID=:id");
    $sentencia->bindParam(":id", $txtID);
    $sentencia->execute();

    header("Location: index.php");
    exit();
}

$sentencia = $conexion->prepare("SELECT * FROM `tbl_banners`");
$sentencia->execute();
$lista_banners = $sentencia->fetchAll(PDO::FETCH_ASSOC);

include("../../plates/header.php");
?>

<div class="card">
    <div class="card-header">
        <a name="" id="" class="btn btn-primary" href="crear.php" role="button">Agregar registros</a>
    </div>
    <div class="card-body">
        <div class="table-responsive-sm">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Titulo</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Enlace</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($lista_banners as $key => $value){ ?>
                        <tr>
                            <td scope="row"><?php echo $banner['ID']; ?></td>
                            <td><?php echo $banner['titulo']; ?></td>
                            <td><?php echo $banner['descripcion']; ?></td>
                            <td><?php echo $banner['link']; ?></td>
                            <td>
                                <a name="" id="" class="btn btn-info" href="editar.php" role="button">Editar</a>
                                <a name="" id="" class="btn btn-danger" href="index.php?txtID=<?php echo $banner['ID']; ?>" role="button">Borrar</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="card-footer text-muted"></div>
</div>

<?php include("../../plates/footer.php"); ?>

