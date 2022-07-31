<?php
$pg = "contacto";
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body id="inicio" class="d-flex flex-column h-100">
    <header class="container">
    <?php include_once "menu.php";?>
    </header>
    <main class="container">
        <div class="row">
            <div class="col-12 mx-auto text-center cohete my-5 ">
                <a href="proyecto.html"><img src="images/cohete.svg" alt=""></a>
            </div>
            <div class="col-12 col-sm-6 offset-sm-3 text-center">
                <div class="my-4">
                <p class="px-5 py-2">Bienvenid@ a mi sitio sobre desarrollo de Sistemas.</p>
                </div>     
            </div>
            <div class="col-12 text-center pt-3 pb-5">
                <a href="proyecto.html" class="btn shadow">Conoce mis Proyectos</a>
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

</html>