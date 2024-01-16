<?php
include("../../plates/bd.php");
include("../../plates/header.php");

// Initialize variables
$titulo = "";
$descripcion = "";
$link = "";

// Initialize txtID
$txtID = "";

// Check if the form is submitted
if ($_POST) {
    $titulo = isset($_POST["titulo"]) ? $_POST["titulo"] : "";
    $descripcion = isset($_POST["descripcion"]) ? $_POST["descripcion"] : "";
    $link = isset($_POST["link"]) ? $_POST["link"] : "";
    $txtID = isset($_POST["txtID"]) ? $_POST["txtID"] : "";

    if (empty($txtID)) {
        // If txtID is empty, it's a new record, so insert
        $sentencia = $conexion->prepare("INSERT INTO `tbl_banners` (`titulo`, `descripcion`, `link`) VALUES (:titulo, :descripcion, :link)");
    } else {
        // If txtID is not empty, it's an existing record, so update
        $sentencia = $conexion->prepare("UPDATE `tbl_banners` SET titulo=:titulo, descripcion=:descripcion, link=:link WHERE ID=:id");
        $sentencia->bindParam(':id', $txtID);
    }

    $sentencia->bindParam(':titulo', $titulo);
    $sentencia->bindParam(':descripcion', $descripcion);
    $sentencia->bindParam(':link', $link);

    $sentencia->execute();

    header("Location: index.php");
    exit();
}

// If txtID is set, fetch the record for editing
if (isset($_GET["txtID"])) {
    $txtID = $_GET["txtID"];

    $sentencia = $conexion->prepare("SELECT * FROM `tbl_banners` WHERE ID=:id");
    $sentencia->bindParam(':id', $txtID);
    $sentencia->execute();

    $registro = $sentencia->fetch(PDO::FETCH_ASSOC);
    $titulo = $registro["titulo"];
    $descripcion = $registro["descripcion"];
    $link = $registro["link"];
}
?>

<br>
<div class="card">
    <div class="card-header">Crear Banner</div>
    <div class="card-body">
        <form action="crear.php" method="post">
            <div class="mb-3">
                <label for="txtID" class="form-label">ID:</label>
                <input type="text" class="form-control" value="<?php echo $txtID; ?>" name="txtID" id="txtID" readonly/>
            </div>
            <div class="mb-3">
                <label for="titulo" class="form-label">Titulo:</label>
                <input type="text" class="form-control" name="titulo" id="titulo" value="<?php echo $titulo; ?>" placeholder="Escriba el titulo del banner" required/>
            </div>

            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripcion:</label>
                <input type="text" class="form-control" name="descripcion" id="descripcion" value="<?php echo $descripcion; ?>" placeholder="Escriba la descripcion del banner" required/>
            </div>

            <div class="mb-3">
                <label for="link" class="form-label">Link:</label>
                <input type="text" class="form-control" name="link" id="link" value="<?php echo $link; ?>" placeholder="Escriba el enlace" required/>
            </div>

            <!-- Form buttons -->
            <button type="submit" class="btn btn-success">Crear Banner</button>
            <a name="cancelar" id="cancelar" class="btn btn-primary" href="index.php" role="button">Cancelar</a>
        </form>
    </div>
    <div class="card-footer text-muted"></div>
</div>

<?php include("../../plates/footer.php"); ?>

