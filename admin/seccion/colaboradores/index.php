<?php
include("../../plates/bd.php");

// Initialize $lista_colaboradores as an empty array
$lista_colaboradores = [];

try {
    $sentencia = $conexion->prepare("SELECT * FROM `tbl_colaboradores`");
    $sentencia->execute();
    $lista_colaboradores = $sentencia->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    // Handle any database connection or query errors here
    echo "Error: " . $e->getMessage();
}

include("../../plates/header.php");
?>
<br>
<div class="card">
    <div class="card-header">Colaboradores</div>
    <a name="" id="" class="btn btn-primary" href="crear.php" role="button">Agregar registros</a>
    <div class="card-body">
        <div class="table-responsive-sm">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Foto</th>

                        <th scope="col">Descripcion</th>
                        <th scope="col">Facebook</th>
                        <th scope="col">Instagram</th>
                        <th scope="col">Linkedin</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($lista_colaboradores as $key => $value) { ?>
                        <tr>
                            <td scope="row"><?php echo $value['ID']; ?></td>
                            <td><?php echo $value['titulo']; ?></td>
                            <td><?php echo $value['descripcion']; ?></td>
                            <td><?php echo $value['link']; ?></td>
                            <td>
                                <a name="" id="" class="btn btn-info" href="editar.php" role="button">Editar</a>
                                <a name="" id="" class="btn btn-danger" href="index.php?txtID=<?php echo $value['ID']; ?>" role="button">Borrar</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>

            </table>
        </div>
    </div>
    <div class="card-footer text-muted">Footer</div>
</div>

<?php include("../../plates/footer.php"); ?>
