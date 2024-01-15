<?php include("../../plates/header.php");?>
<br>
<div class="card">
    <div class="card-header">Banners</div>
    <div class="card-body">
        <form action="" method="post">
            <div class="mb-3">
                <label for="" class="form-label">Titulo:</label>
                <input
                    type="text"
                    class="form-control"
                    name="titulo"
                    id="titulo"
                    aria-describedby="helpId"
                    placeholder="Escriba el titulo del banner"
                />
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Descripcion:</label>
                <input
                    type="text"
                    class="form-control"
                    name="description"
                    id="description"
                    aria-describedby="helpId"
                    placeholder="Escriba la descripcion del banner"
                />
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Link</label>
                <input
                    type="text"
                    class="form-control"
                    name="link"
                    id="link"
                    aria-describedby="helpId"
                    placeholder="Escriba el enlace"
                />

            </div>
            <button
                type="submit"
                class="btn btn-success"
            >
                Crear banner
            </button>
            <a
                name="cancelar"
                id="cancelar"
                class="btn btn-primary"
                href="index.php"
                role="button"
                >Cancelar</a
            >
            
            

        </form>
    </div>
    <div class="card-footer text-muted"></div>
</div>

<?php include("../../plates/footer.php");?>