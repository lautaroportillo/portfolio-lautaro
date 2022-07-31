<?php
$pg = "contacto";
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Mi</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body id="sobre-mi" class="d-flex flex-column h-100">
    <header class="container">
    <?php include_once "menu.php";?>
    </header>
    <main>
        <section class="container" id="descripcion">
            <div class="row">
                <div class="col-12 col-sm-7 pb-3">
                    <h1 class="pb-5 pt-3">Sobre mí</h1>
                    <p>
                        Apasionado por la tecnología y gestión de proyectos. Conocimiento en programación Full Stack y de Base de datos.
                    </p>
                    <div class="mt-5">
                        <a href="contacto.html" class="btn btn-rojo">Enviar Mensaje</a>
                    </div>
                </div>
                <div class="col-12 col-sm-5 p-5 mt-5">
                    <img src="Images/lautaro portillo.jpg" alt="portillolautaro" class="foto-perfil">
                </div>
            </div>
        </section>
        <section id="tecnologias">
            <div class="container">
                <div class="row">
                    <div class="col-12 cpt-3 pb-2 mb-5">
                        <h2>Stack tecnológico</h2>
                    </div>
                </div>
                <div class="row pb-4">
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-6 mb-sm-0">
                            <h3 class="logos">Javascript</h3>
                            <img class="img-fluid d-bock mx-auto" width="60" src="images/javascript.jpg">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h3 class="logos">PHP</h3>
                            <img class="img-fluid d-bock mx-auto" width="60" src="images/imagen PHP.jpg">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h3 class="logos">HTML5</h3>
                            <img class="img-fluid d-bock mx-auto" width="60" src="images/HTML 5.png">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h3 class="logos">React.js</h3>
                            <img class="img-fluid d-bock mx-auto" width="60" src="images/React.js.png">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h3 class="logos">jQuery</h3>
                            <img class="img-fluid d-bock mx-auto" width="60" src="images/jQuery.jpg">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h3 class="logos">Bootstrap</h3>
                            <img class="img-fluid d-bock mx-auto" width="60" src="images/Bootstrap.png">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h3 class="logos">Laravel</h3>
                            <img class="img-fluid d-bock mx-auto" width="60" src="images/Laravel.png">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h3 class="logos">MySQL</h3>
                            <img class="img-fluid d-bock mx-auto" width="60" src="images/MySQL.png">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h3 class="logos">CSS</h3>
                            <img class="img-fluid d-bock mx-auto" width="60" src="images/css.png">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h3 class="logos">Git</h3>
                            <img class="img-fluid d-bock mx-auto" width="60" src="images/git.png">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h3 class="logos">Apache</h3>
                            <img class="img-fluid d-bock mx-auto" width="60" src="images/Apache.png">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h3 class="logos">MercadoPago</h3>
                            <img class="img-fluid d-bock mx-auto" width="60" src="images/Mercado pago.jpg">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="experiencia">
            <div class="container">
                <div class="row">
                    <div class="col-12 py-4">
                        <h2>
                            <i class="fa-solid fa-briefcase"></i>Experiencia laboral
                        </h2>
                    </div>
                </div>
            </div>
            <div class="container shadow mb-4">
                <div class="row mb-3">
                    <div class="col-2 d-none d-sm-block p-5">
                        <img src="images/herramientas auto.jfif" alt="herramientas">
                    </div>
                    <div class="col-sm-10 p-5">
                        <h3>Empleado</h3>
                        <h4>Mecanica de autos</h4>
                        <h5>ene-2016-dic-2018 </h5>
                        <p>Arreglos de tren delantero, frenos, alineación y
                            valanceo de autos.</p>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-2 d-none d-sm-block p-5">
                        <img src="images/amalubricantes.png" alt="amalubricantes">
                    </div>
                    <div class="col-sm-10 p-5">
                        <h3>Empleado</h3>
                        <h4>Ama Lubricantes</h4>
                        <h5>marz-2018-actualidad</h5>
                        <p>Experiencia en Ama lubricantes como empleado. Experiencias en maquinas de
                            picos de embases de 1 L y bidones de 4 L, experiencia con bombas neumaticas para embasar
                            tambores, baldes y bulks, experiencia en el area de expedición facturando y remitiendo
                            pedidos.
                        </p>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-2 d-none d-sm-block p-5">
                        <img src="images/autoelevador.jfif" alt="autoelevador">
                    </div>
                    <div class="col-sm-10 p-5">
                        <h3>Empleado</h3>
                        <h4>Experiencias adquiridas</h4>
                        <h5>nov-2018-Actualidad</h5>
                        <p>Experiencia y buen manejo de autoelevadores.</p>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-2 d-none d-sm-block p-5">
                        <img src="images/apilador.jfif" alt="apilador">
                    </div>
                    <div class="col-sm-10 p-5">
                        <h3>Empleado</h3>
                        <h4>Experiencias adquiridas</h4>
                        <h5>nov-2018-Actualidad</h5>
                        <p>Experiencia y buen manejo de apiladores.</p>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <section id="formacion">
            <div class="container">
                <div class="row">
                    <div class="col-12 py-4">
                        <h2>
                            <i class="fa-solid fa-graduation-cap"></i>Formación acádemica
                        </h2>
                    </div>
                </div>
            </div>
            <div class="container shadow mb-4">
                <div class="row mb-3">
                    <div class="col-2 d-none d-sm-block p-5">
                        <img src="images/primaria.png" alt="primaria">
                    </div>
                    <div class="col-sm-10 p-5">
                        <h3>Formación primaria</h3>
                        <h4>Escuela primaria N°56</h4>
                        <h5>2006-2012 </h5>
                        <p></p>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-2 d-none d-sm-block p-5">
                        <img src="images/electromecanica.png" alt="electromecanica">
                    </div>
                    <div class="col-sm-10 p-5">
                        <h3>Tecnico Electromecánico</h3>
                        <h4>Escuela de educación secundaria tecnica N°2</h4>
                        <h5>2012-2018 </h5>
                        <p></p>
                    </div>
                </div>
            </div>
        </section>
        <section id="cursos">
            <div class="container">
                <div class="row">
                    <div class="col-12 py-4">
                        <h2>
                            <i class="fa-solid fa-graduation-cap"></i>Cursos de desallorro profesional
                        </h2>
                    </div>
                </div>
            </div>
            <div class="container shadow mb-4">
                <div class="row mb-3">
                    <div class="col-2 d-none d-sm-block p-2">
                        <img src="images/reparaciondecelulares.png" alt="reparaciondecelulares">
                    </div>
                    <div class="col-sm-10 p-5">
                        <h3>Programación y Reparación de celulares</h3>
                        <h4>Eddis Educativa</h4>
                        <h5>Expedición: jun 2021 </h5>
                        <p>https://www.eddis.edu.ar</p>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-2 d-none d-sm-block p-5">
                        <img src="images/logo-depcsuite.svg" alt="DePC" class="depc">
                    </div>
                    <div class="col-sm-10 p-5">
                        <h3>Programación Full Stack</h3>
                        <h4>DePC</h4>
                        <h5>Expedición: may 2022</h5>
                        <p></p>
                    </div>
                </div>
            </div>
        </section>
        <section id="idiomas">
            <div class="container">
                <div class="row py-5 mb-5">
                    <div class="col-sm-6 col-12 pb-sm-0">
                        <div class="row mr-sm-1 bg-white shadow m-5">
                            <div class="col-4 text-center idioma">
                                <i class="fas fa-comment-alt p-3"></i>
                            </div>
                            <div class="col-8 p-5">
                                <h3 class="p-3">IDIOMAS</h3>
                                <ul>
                                    <li>ESPAÑOL-Nativo</li>
                                    <li>INGLÉS-Basico</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 pb-sm-0">
                        <div class="row mr-sm-1 bg-white shadow m-5">
                            <div class="col-4 text-center idioma">
                                <i class="fas fa-star p-3"></i>
                            </div>
                            <div class="col-8 p-5">
                                <h3 class="p-3">HOBBIES</h3>
                                <ul>
                                    <li>Gimnasio</li>
                                    <li>Juegos</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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