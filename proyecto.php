<?php
$pg = "contacto";
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>proyecto</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body id="proyectos" class="d-flex flex-column h-100">
    <header class="container">
    <?php include_once "menu.php";?>
    </header>
    <main class="container">
        <div class="row">
            <div class="col-12 pt-3 pb-5">
                <h1>Proyectos</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <p>Los siguientes son algunos de los trabajos que he realizado</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-4 p-4">
                <div class="row border proyecto pb-5">
                    <div class="col-12 p-0">
                        <img src="images/abmclientes.png" alt="ABM CLIENTES" class="img-fluid">
                        <h2>ABM CLIENTES</h2>
                        <P class="py-2 px-3">Alta, baja y modificación de un registro de clientes. Realizado en HTML,
                            CSS, PHP, Bootstrap y Json.</p>
                            <div class="col-6 text-center">
                                <a href="#" class="btn-rojo" target="_blank"> Ver online</a>
                            </div>
                            <div class="col-6 offset-6 text-center">
                                <a href="#" class="link-rojo">Código Fuente</a>
                            </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-4 p-4">
                <div class="row border proyecto pb-5">
                    <div class="col-12 p-0">
                        <img src="images/abmventas.png" alt="SISTEMA DE GESTIÓN DE VENTAS" class="img-fluid">
                        <h2>SISTEMA DE GESTIÓN DE VENTAS</h2>
                        <P class="py-2 px-3">Sistema de gestión de clientes, productos y ventas. Realizado en HTML, CSS,
                            PHP, MVC, Bootstrap, Js, Ajax, jQuery y MySQL de base de datos.</P>
                        <div class="col-6 text-center">
                            <a href="#" class="btn-rojo" target="_blank"> Ver online</a>
                        </div>
                        <div class="col-6 offset-6 text-center">
                            <a href="#" class="link-rojo">Código Fuente</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-4 p-4">
                <div class="row border proyecto pb-5">
                    <div class="col-12 p-0">
                        <IMG src="IMAGES/proyecto-integrador.png" alt="proyecto integrador" class="img-fluid">
                        <h2>PROYECTO INTEGRADOR</h2>
                        <P class="py-2 px-3">Proyecto Full Stack desarrollado en PHP, Laravel, Javascript, jQuery, AJAX,
                            HTML, CSS,
                            Mercadopago
                            con panel administrador, gestor de usuarios, módulo de permisos y funcionalidades a fines.
                        </P>
                        <div class="col-6 text-center">
                            <a href="#" class="btn-rojo" target="_blank"> Ver online</a>
                        </div>
                        <div class="col-6 offset-6 text-center">
                            <a href="#" class="link-rojo">Código Fuente</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="container mt-auto pb-4">
        <div class="btn-whatsapp">
            <a href="https://api.whatsapp.com/send?phone=1136402445" target="_blank"><i
                    class="fa-brands fa-whatsapp"></i></a>
        </div>
        <div class="row">
            <div class="col-3">
                <a href="" target="_blank" title="Github"><i class="fab fa-github"></i></a>
                <a href="" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <div class="col-3">
                Sponsor: <a href="http://depcsuite.com">DePC Suite</a>
            </div>
            <div class="col-3">
                <a href="mailto:portillolautaro1010@gmail.com">portillolautaro1010@gmail.com</a>
            </div>
    </footer>
</body>

</html>