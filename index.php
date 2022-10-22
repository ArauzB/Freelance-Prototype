<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="shortcut icon" href="img/logo.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@500&family=Rubik&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <script src="https://kit.fontawesome.com/54bdf0cfde.js" crossorigin="anonymous"></script>


</head>



<body>
<?php

if(isset($_SESSION['primero'])){
    echo 1;
}else{
    echo 0;
}
?>
    <header>
        <nav>
        <?php
if(isset($_SESSION['primero'])){
    ?>
    <a href="perfil.php"><button> Perfil</button></a>
    <?php
}else{
    ?>
    <a href="registrar1.html"><button> Registrarse</button></a>

<button class="btn-overlay" id="ingresar"> Ingresar</button>
    <?php
}
?>
        </nav>

        <section class="textos-header">
            <h1>
                FreeLance</h1>
        </section>
    </header>


    <div class="overlay " id="overlay">
        <div class="popup" id="popup">
            <a class="btn-cerrar-popup" href="#" id="btn-cerrar-popup">
                <i class="fas fa-times"></i>
            </a>
            <div class="content">
                <h2>Login</h2>

                <button type="button" class="icon-button social-signing-button facebook-signing-button"><span class="lFICM06 provider-icon" aria-hidden="true" style="width: 18px; height: 18px;"><svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M20 10.0022C20.0004 8.09104 19.4532 6.2198 18.4231 4.61003C17.393 3.00026 15.9232 1.71938 14.1877 0.919062C12.4522 0.118741 10.5237 -0.167503 8.63053 0.0942223C6.73739 0.355948 4.9589 1.15468 3.50564 2.39585C2.05237 3.63701 0.985206 5.26863 0.430495 7.0975C-0.124217 8.92636 -0.143239 10.8759 0.37568 12.7152C0.894599 14.5546 1.92973 16.2067 3.35849 17.476C4.78726 18.7453 6.54983 19.5786 8.4375 19.8772V12.8922H5.89875V10.0022H8.4375V7.79843C8.38284 7.28399 8.44199 6.76382 8.61078 6.2748C8.77957 5.78577 9.05386 5.33986 9.4142 4.96866C9.77455 4.59746 10.2121 4.31007 10.6959 4.12684C11.1797 3.94362 11.6979 3.86905 12.2137 3.90843C12.9638 3.91828 13.7121 3.98346 14.4525 4.10343V6.56718H13.1925C12.9779 6.53911 12.7597 6.55967 12.554 6.62733C12.3484 6.69498 12.1607 6.80801 12.0046 6.95804C11.8486 7.10807 11.7283 7.29127 11.6526 7.49408C11.577 7.69689 11.5479 7.91411 11.5675 8.12968V10.0047H14.3412L13.8975 12.8947H11.5625V19.8834C13.9153 19.5112 16.058 18.3114 17.6048 16.4999C19.1516 14.6884 20.001 12.3842 20 10.0022Z"></path></svg></span><p>Continuar con Facebook</p></button>

                <button type="button" class="icon-button social-signing-button google-signing-button"><span class="lFICM06 provider-icon" aria-hidden="true" style="width: 18px; height: 18px;"><svg width="18" height="19" viewBox="0 0 18 19" xmlns="http://www.w3.org/2000/svg"><path d="M9 7.84363V11.307H13.8438C13.6365 12.428 12.9994 13.373 12.0489 14.0064V16.2534H14.9562C16.6601 14.6951 17.641 12.4029 17.641 9.67839C17.641 9.04502 17.5854 8.43176 17.4792 7.84865H9V7.84363Z" fill="#3E82F1"></path><path d="M9.00001 14.861C6.65394 14.861 4.67192 13.2876 3.96406 11.1714H0.955627V13.4937C2.43709 16.4142 5.48091 18.4198 9.00001 18.4198C11.432 18.4198 13.4697 17.6206 14.9562 16.2533L12.0489 14.0064C11.245 14.5443 10.2135 14.861 9.00001 14.861Z" fill="#32A753"></path><path d="M3.96404 5.45605H0.955617C0.348876 6.66246 0 8.02972 0 9.47238C0 10.915 0.348876 12.2823 0.955617 13.4887L3.96404 11.1714C3.78202 10.6335 3.6809 10.0605 3.6809 9.47238C3.6809 8.88426 3.78202 8.31122 3.96404 7.77336V5.45605Z" fill="#F9BB00"></path><path d="M0.955627 5.45597L3.96406 7.77327C4.67192 5.65703 6.65394 4.08368 9.00001 4.08368C10.3197 4.08368 11.5079 4.53608 12.4382 5.42078L15.0219 2.85214C13.4646 1.40948 11.427 0.52478 9.00001 0.52478C5.48091 0.52478 2.43709 2.53043 0.955627 5.45597Z" fill="#E74133"></path></svg></span><p>Continuar con Google</p></button>

                <form action="conectUsu.php" method="post">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Usuario</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese su usuario" name="Usuariod">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Contraseña</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Ingrese su contraseña" name="Contrad">
                    </div>
                    <div class="botones">
                        <button type="submit" class="btn btn-primary" name="ingre"> Ingresar </button>
                        <button type="button" class="btn btn-primary" id="btn-registrar">Registrarse</button>
                    </div>

                </form>

            </div>
        </div>
    </div>

    <script src="js/popup.js"></script>


    <main>
        <section class="principal servicios">
            <div class="swiper mySwiper contenedor">
                <h2 class="titulo">Servicios</h2>
                <div class="swiper-wrapper contenido">
                    <div class="swiper-slide tarjeta">
                        <div class="contenido-tarjeta">

                            <div class="imagen">
                                <img src="img/servicios/foto1.jpg" alt="">
                            </div>


                            <div class="profesion">
                                <span class="nombre-profesion">Programacion</span>
                            </div>


                            <div class="button">
                                <a href="personas.php"><button class="Entrar">ENTRAR</button></a>
                            </div>


                        </div>

                    </div>

                    <div class="swiper-slide tarjeta">
                        <div class="contenido-tarjeta">

                            <div class="imagen">
                                <img src="img/servicios/foto2.jpg" alt="">
                            </div>


                            <div class="profesion">
                                <span class="nombre-profesion">Diseno Grafico</span>
                            </div>


                            <div class="button">
                                <button class="Entrar">ENTRAR</button>
                            </div>


                        </div>

                    </div>

                    <div class="swiper-slide tarjeta">
                        <div class="contenido-tarjeta">

                            <div class="imagen">
                                <img src="img/servicios/foto3.jpg" alt="">
                            </div>


                            <div class="profesion">
                                <span class="nombre-profesion">Maketing Digital</span>
                            </div>


                            <div class="button">
                                <button class="Entrar">ENTRAR</button>
                            </div>


                        </div>

                    </div>

                    <div class="swiper-slide tarjeta">
                        <div class="contenido-tarjeta">

                            <div class="imagen">
                                <img src="img/servicios/foto4.jpg" alt="">
                            </div>


                            <div class="profesion">
                                <span class="nombre-profesion">Escritura y Traduccion</span>
                            </div>


                            <div class="button">
                                <button class="Entrar">ENTRAR</button>
                            </div>


                        </div>

                    </div>

                    <div class="swiper-slide tarjeta">
                        <div class="contenido-tarjeta">

                            <div class="imagen">
                                <img src="img/servicios/foto5.jpg" alt="">
                            </div>


                            <div class="profesion">
                                <span class="nombre-profesion">Musica y Audio</span>
                            </div>


                            <div class="button">
                                <button class="Entrar">ENTRAR</button>
                            </div>


                        </div>

                    </div>

                    <div class="swiper-slide tarjeta">
                        <div class="contenido-tarjeta">

                            <div class="imagen">
                                <img src="img/servicios/foto6.jpg" alt="">
                            </div>


                            <div class="profesion">
                                <span class="nombre-profesion">Video y Animacion</span>
                            </div>


                            <div class="button">
                                <button class="Entrar">ENTRAR</button>
                            </div>


                        </div>

                    </div>

                </div>

            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>

        </section>

        <!-- Swiper JS -->
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

        <!-- Initialize Swiper -->
        <script>
            var swiper = new Swiper(".mySwiper", {
                slidesPerView: 3,
                spaceBetween: 30,
                slidesPerGroup: 3,
                loop: true,
                loopFillGroupWithBlank: true,
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
            });
        </script>




        <section class="contenedor sobre-nosotros">
            <h2 class="titulo">Beneficios de trabajar como FreeLance aqui.</h2>
            <div class="contenedor-sobre-nosotros">
                <img src="img//sobrenosotros/img1.svg" alt="" class="imagen-about">

                <div class="contenido-textos">
                    <h3><span>1</span>Mejor servicio</h3>
                    <p>El Freelance es uno de los mejores servicios que hay actualmente para un trabajo bien pagado y remoto.</p>
                    <h3><span>2</span>Experiencia</h3>
                    <p>Al momento de trabajar como freelance es una gran oportunidad ya que es una de las maneras mas rapidas y eficacez de obtener experiencia laboral si quieres empezar a trabajar para otra empresa.</p>
                    <h3><span>3</span>Ayuda</h3>
                    <p>Nosotros siempre te ayudaremos tanto como freelance o como un cliente.</p>
                    <h3><span>4</span>Apoyo</h3>
                    <p>El apoyo que obtendras aqui es infinito ya que hay millones de personas esperando tu servicio.</p>
                </div>

            </div>
        </section>



    </main>


    <footer>
        <div class="contenedor-footer">
            <p class="copy">Todos los derechos reservados &copy;</p>
        </div>

        <div>
            <a href="soporte/soporte.html" class="links">Soporte</a>
            <a href="AcercaDe/acerca.html" class="links">Acerca De</a>

        </div>
    </footer>



</body>

</html>