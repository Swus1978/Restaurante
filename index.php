<?php
include("admin/plates/bd.php");

$sentencia=$conexion->prepare("SELECT * FROM tbl_banners ORDER BY id DESC limit 1");
$sentencia -> execute();
$lista_banners = $sentencia -> fetchAll(PDO::FETCH_ASSOC);

?>

<!doctype html>
<html lang="en">
    <head>
        <title>Restaurante La Borincana</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
        <a class="navbar-brand" href="#"><i class="fas fa-utensils"></i> Restaurante La Borincana</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#inicio">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#menu">Menu del dia</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#chef">Chef's</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#testimonios">Testimonios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contacto">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#horarios">Horarios</a>
                    </li>
            </ul>
        </div>
        </div>
        </nav>
        <section id="inicio" class="container-fluid p-0">
            <div class="banner-img" style="position:relative; background:url('images/pngtree-summer-atmosphere-restaurant-supermarket-vegetable-psd-layered-promotion-background-image_159939.jpg') center/cover no-repeat; height:400px;">


            <div class="banner-text" style="position:absolute; top:50%; left:50%; transform: translate(-50%, -50%); text-align:center; color: #fff;">
                <?php
                foreach($lista_banners as $banner) {



                ?>
                <h1><?php echo $banner['titulo']; ?></h1>
                    <p><?php echo $banner['descripcion']; ?></p>
                    <a href="<?php echo $banner['link']; ?>" class="btn btn-primary">Ver Menu</a>
                <?php } ?>
                </div>
            </div>
        </section>
        <section id="id" class="container mt-4 text-center">
        <div class="jumbotron bg-dark text-white">
            <br/>
                <h2>¡Bienvenid@s al Restaurant La Borincana!</h2>
                <p>Descubre una experiencia culinaria unica</p>
            <br/>
        </div>
</section>
<section id="chef" class="container mt-4 text-center">
    <h2>Nuestros Chefs</h2>
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <img src="images/Chef-in-uniform-posing-for-a-photo-in-a-kitchen-1400.jpg" class="card-img-top" alt="Chef 1" />
                <div class="card-body">
                    <h5 class="card-title">Chef 1</h5>
                    <p class="card-text">El chef Juan Carlos</p>
                    <div class="social-icons mt-3">
                        <a href="#" class="text-dark mt-2"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-dark mt-2"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-dark mt-2"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="images/colaboradores/gringachef.jpg" class="card-img-top" alt="Chef 2" />
                <div class="card-body">
                    <h5 class="card-title">Chef 2</h5>
                    <p class="card-text">La chef Amy</p>
                    <div class="social-icons mt-3">
                        <a href="#" class="text-dark mt-2"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-dark mt-2"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-dark mt-2"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="images/colaboradores/mujerblackchef.jpeg" class="card-img-top" alt="Chef 3" />
                <div class="card-body">
                    <h5 class="card-title">Chef 3</h5>
                    <p class="card-text">La chef Maria</p>
                    <div class="social-icons mt-3">
                        <a href="#" class="text-dark mt-2"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-dark mt-2"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-dark mt-2"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<section id="testimonios" class="bg-light py-5">
    <div class="container">
        <h2 class="text-center mb-4">Testimonios</h2>
        <div class="row">
            <div class="col-md-6 d-flex">
                <div class="card mb-4 w-100">
                    <div class="card-body">
                        <p class="card-text">Muy buena comida</p>
                    </div>
                    <div class="card-footer text-muted">
                            Damiano Q
                    </div>
                </div>
            </div>
            <div class="col-md-6 d-flex">
                <div class="card mb-4 w-100">
                    <div class="card-body">
                        <p class="card-text">Muy buena comida</p>
                    </div>
                    <div class="card-footer text-muted">
                            Damiano Q
                    </div>
                </div>
            </div>
        </div>

    </div>

</section>
<section id="menu" class="container mt-4">
    <h2 class="text-center">Menu (nuestra recomendacion)</h2>
    <br/>
    <div class="row row-cols-1 row-cols-md-4 g-4">
        <div class="col d-flex">
            <div class="card">
                <img src="images/menu/Berries-and-Spice-How-to-plate-dishes-worthy-of-a-fine-dining-restaurant-the-complete-guide-23-scaled.jpg" class="card-img-top" alt="Pulpo"/>
                <div class="card-body">
                    <h5 class="card-title">Pollo con papa</h5>
                    <p class="card-text small"><strong>Ingredientes:</strong>Pulpo al ajillo, ensalada</p>
                    <p class="card-text">$24.99 </p>
                </div>
            </div>
        </div>
        <div class="col d-flex">
            <div class="card">
                <img src="images/menu/chicken.jpg" class="card-img-top" alt="Pollo"/>
                <div class="card-body">
                    <h5 class="card-title">Pulpo a la parrilla</h5>
                    <p class="card-text small"><strong>Ingredientes:</strong>Pollo al ajillo, pure de papa </p>
                    <p class="card-text">$24.99 </p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card d-flex">
                <img src="images/menu/fine-dining-entree-grilled-lamb-50866644.jpg" class="card-img-top" alt="Chuleta"/>
                <div class="card-body">
                    <h5 class="card-title">Chuletas de res a la parrilla</h5>
                    <p class="card-text small"><strong>Ingredientes:</strong>Chulettas  al ajillo, ensalada verde</p>
                    <p class="card-text">$34.99 </p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card d-flex">
                <img src="images/menu/bistec.jpeg" class="card-img-top" alt="Chuleta"/>
                <div class="card-body">
                    <h5 class="card-title">Bistec de res a la parrilla</h5>
                    <p class="card-text small"><strong>Ingredientes:</strong>Bistec con chimichurri, ensalada verde</p>
                    <p class="card-text">$34.99 </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="contacto" class="container mt-4">
    <h2>Contacto</h2>
    <p>Estamos aqui para servirle,</p>

    <form action="?" method="post">
        <div class="mb-3">
            <label for="name">Nombre:</label><br>
            <input type="text" class="form-control" id="name" name="name" required><br>
        </div>
        <div class="mb-3">
            <label for="email">Correo electrónico:</label><br>
            <input type="email" class="form-control" id="email" name="email"><br>
        </div>
        <div class="mb-3">
        <label for="message">Mensaje:</label><br>
        <textarea id="message"  class="form-control" name="message" rows="6"></textarea><br>
        </div>
        <input class="btn btn-primary" type="submit" value="Enviar Mensaje"></input>
    </form>
</section>
<br/><br/>
<div id="horarios" class="text-center p-4">
    <h3 class="mb-4">Horarios de atencion</h3>
    <div>
        <p><strong>Lunes a Viernes</strong></p>
        <p><strong>11:00 a.m. - 10:00 p.m.</strong></p>
    </div>
    <div>
        <p><strong>Sabado</strong></p>
        <p><strong>12:00 a.m. - 5:00 p.m.</strong></p>
    </div>
    <div>
        <p><strong>Domingo</strong></p>
        <p><strong>07:00 a.m. - 2:00 p.m.</strong></p>
    </div>

</div>



    <footer class="bg-dark text-light text-center py-3">
        <p>&copy; 2024 Restaurante La Borincana, todos los derechos reservados.</p>
    </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
