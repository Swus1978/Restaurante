<?php

include("../../plates/bd.php");

$sentencia=$conexion->prepare("SELECT * FROM `tbl_banners`");
$sentencia ->execute();
$lista_banners = $sentencia -> fetchAll(PDO::FETCH_ASSOC);
print_r($lista_banners);

include("../../plates/header.php");

?>





<div class="card">
    <div class="card-header">
        <a
            name=""
            id=""
            class="btn btn-primary"
            href="crear.php"
            role="button"
            >Agregar registros</a
        >


    </div>
    <div class="card-body">
        <div
            class="table-responsive-sm"
        >
            <table
                class="table table-primary"
            >
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
                    <tr class="">
                        <td scope="row">1</td>
                        <td>La Borincana</td>
                        <td>Restaurante del mejor sabor casero</td>
                        <td>#menu</td>
                        <td>
                            <a
                                name=""
                                id=""
                                class="btn btn-info"
                                href="editar.php"
                                role="button"
                                >Editar</a
                            >
                            <a
                                name=""
                                id=""
                                class="btn btn-danger"
                                href="#"
                                role="button"
                                >Borrar</a
                            >
                        </td>
                    </tr>
                    <tr class="">
                        <td scope="row">2</td>
                        <td>La Borincana</td>
                        <td>Restaurante del mejor sabor casero</td>
                        <td>#menu</td>
                        <td>
                        <a
                                name=""
                                id=""
                                class="btn btn-info"
                                href="#"
                                role="button"
                                >Editar</a
                            >
                            <a
                                name=""
                                id=""
                                class="btn btn-danger"
                                href="#"
                                role="button"
                                >Borrar</a
                            >

                        </td>
                    </tr>
                </tbody>
            </table>
        </div>


    </div>
    <div class="card-footer text-muted"></div>
</div>

<?php include("../../plates/footer.php");?>