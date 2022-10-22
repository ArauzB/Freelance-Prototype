<?php
include'db.php';
session_start();

    if(isset($_SESSION['primero']) || isset($_SESSION['segundo'])){
        $veruno = $_SESSION['primero'];
        $verdos = $_SESSION['segundo'];

        $resultado = mysqli_query($conect,"SELECT * FROM registrar WHERE Usuario = '$veruno' AND Pass = '$verdos'");

        $valores = mysqli_fetch_array($resultado);
        $valuar = $valores['Codigo'];

            $resulll = mysqli_query($conect,"SELECT * FROM datos WHERE codigo = '$valuar'");
            $valor = mysqli_fetch_array($resulll);
            
            $imagen = $valor['imagen'];
            $dire = $valor['direccion'];
            $tel = $valor['telefono'];
            $mail = $valor['email'];
            $nombre = $valor['nombre'];
            $prof = $valor['profesion'];
            $exp = $valor['experiencia'];
            $info = $valor['informacion'];
            $usu = $valor['Usuario'];

    }else{
        $imagen = "";
        $dire = "";
        $tel = "";
        $mail = "";
        $nombre = "";
        $prof = "";
        $exp = "";
        $info = "";
        $usu = "";
    }
?>

<!DOCTYPE html>
<html lang="en">
<!------------------------------------------------------------------------>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil
    </title>
    <link href="estiloPerfil.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@500&family=Rubik&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">


</head>
<!------------------------------------------------------------------------>

<body>

    <!--Encabezado cambio-->
    <header>
        <nav>
            <a href="index.php"><button> Inicio
            </button></a>
            <a href="closed.php"><button> Cerrar Sesion
            </button></a>
        </nav>

        <section class="textos-header">
            <h1>
                FreeLance</h1>
        </section>
    </header>
    <!------------------------------------------------------------------------>
    <!--Perfil-->
    <main>
        <section class="contenedor">
            <div class="datos">

                <form action="image.php" method="post" enctype="multipart/form-data">

                <h1 style="text-align:center;"><?php echo $usu ?></h1>
                
                    <div class="foto">
                        <img src="
                        <?php if(isset($imagen)){ ?>
                            <?php echo " " ?>
                            <?php }else{ ?>
                                <?php echo "../imagenes/ ".$imagen ?>
                                <?php } ?>" width="100%" height="100%" style="border-radius: 50%;">
                    </div>

                    <div class="fill">
                        <input type="file" name="imagen" class="inpu">
                        <input style="float: right;" type="submit" name="guardar" value="Realizar cambio" class="inpu">
                    </div>

                </form>

                <!--datos1-->
                <div class="tres">
                <h3 class="ee">Direccion</h3>
            <p class="aa"><?php echo $dire ?></p>
            <h3 class="ee">Telefono</h3>
            <p class="aa"><?php echo $tel ?></p>
            <h3 class="ee">e-mail</h3>
            <p class="aa"><?php echo $mail ?></p>
                </div>

            </div>
            <div class="dos">

<div class="cuatrodos">
    <h3 class="ee">Nombre</h3>
    <p class="aa"><?php echo $nombre ?></p>
    <h3 class="ee">Profecion</h3>
    <p class="aa"><?php echo $prof ?></p>
    <h3 class="ee">Años de experiencia</h3>
    <p class="aa"><?php echo $exp ?></p>
</div>

<div class="cuatro">
    <h3 class="ee">Experiencia en trabajo</h3>
    <p class="ii"><?php echo $info ?></p>
</div>

<button onclick="changeStyle()" class="btn">Editar</button>

</div>
            <!------------------------------------------------------------------------>
            <!--datos2-->
            <div class="datos2">
                <!--Datos dos-->
                <!--Info-->
                <div class="cuatro">
                    <h3 class="ee">Biografia</h3>
                    <p class="ii">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci enim, dolore eligendi at nostrum recusandae ullam quidem voluptate magni accusamus debitis maiores fugit voluptatem blanditiis optio, delectus repellendus. Maiores repellendus,
                        enim optio ratione repellat facere suscipit temporibus eveniet qui mollitia non ipsum, laboriosam nam ut voluptatibus quos dolores ducimus facilis veniam? Eos repellendus nam ipsam dolorum natus vitae iure fugit temporibus corrupti
                        aliquam odit, distinctio repellat iste consequatur vero perferendis dolorem necessitatibus quas sed similique omnis sint suscipit porro quidem. In neque deleniti omnis eveniet voluptatum adipisci odit cumque. Qui ducimus quo aspernatur
                        enim perspiciatis laborum amet vel sint dolore!
                    </p>
                </div>

                <div class="cuatro">
                    <h3 class="ee">Experiencia en trabajo</h3>
                    <p class="ii">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci enim, dolore eligendi at nostrum recusandae ullam quidem voluptate magni accusamus debitis maiores fugit voluptatem blanditiis optio, delectus repellendus. Maiores repellendus,
                        enim optio ratione repellat facere suscipit temporibus eveniet qui mollitia non ipsum, laboriosam nam ut voluptatibus quos dolores ducimus facilis veniam? Eos repellendus nam ipsam dolorum natus vitae iure fugit temporibus corrupti
                        aliquam odit, distinctio repellat iste consequatur vero perferendis dolorem necessitatibus quas sed similique omnis sint suscipit porro quidem. In neque deleniti omnis eveniet voluptatum adipisci odit cumque. Qui ducimus quo aspernatur
                        enim perspiciatis laborum amet vel sint dolore!
                    </p>
                </div>

                <!--boton-->
                <button onclick="changeStyle()" class="btn">Editar</button>

            </div>


        </section>

        <!------------------------------------------------------------------------>
        <!--Editar flotante-->
        <div class="edit">
        <form action="editar.php" method="POST">
            <div class="edituno">
                <label>Direccion</label><br>
                <input class="barra" type="text" name="direccion" value="<?php echo $dire ?>"><br>
                <label>Telefono</label><br>
                <input class="barra" type="text" name="telefono" value="<?php echo $tel ?>"><br>
                <label>E-mail</label><br>
                <input class="barra" type="text" name="email" value="<?php echo $mail ?>"><br>
                <label>Nombre</label><br>
                <input class="barra" type="text" name="nombre" value="<?php echo $nombre ?>"><br>
                <label>Profecion</label><br>
                <input class="barra" type="text" name="profecion" value="<?php echo $prof ?>"><br>
            </div>
            <div class="editdos">
                <label>Años de experiencia</label><br>
                <input class="barra" type="text" name="exp" value="<?php echo $exp ?>"><br>
                <label>Experiencia de trabajo</label><br>
                <textarea class="texto" maxlength="600" name="info"><?php echo $info ?></textarea><br><br><br>
            </div>

            <input type="submit" name="guardar" value="Guardar cambios" class="btn2">

        </form>
    </div>
        <!------------------------------------------------------------------------>

        <script>
            function changeStyle() {
                document.getElementsByClassName("edit")[0].style.display = "block";
            }
        </script>

        <!--fotos descripcion-->
        <section class="contenedor">

            <div class="trabajos">

                <div class="info">
                    <h2 class="titulo">Portafolio</h2>
                    <p class="ie">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi voluptas deserunt sapiente rem voluptatem, vero odit, ut at minima dignissimos voluptate nesciunt, ratione sint quibusdam mollitia cum dolor aspernatur repellat id. Inventore
                        placeat minus quibusdam porro, at numquam! Accusantium, veniam! Sit praesentium incidunt harum aliquid, culpa voluptatem suscipit placeat tenetur doloribus officia repellat, temporibus aspernatur iusto dolorem accusantium dolorum
                        sapiente magni. Veritatis ullam nulla labore recusandae molestias adipisci fugit expedita laborum dolorum repellat delectus sint cumque praesentium numquam dolor, error incidunt deserunt provident nesciunt possimus ipsa iure eum.
                        Optio cum assumenda numquam sequi quis, aliquid. Maiores quo quam, possimus nemo esse reiciendis consequuntur sequi minima est, nihil corporis velit tenetur sint necessitatibus modi officia nam minus asperiores nobis quibusdam.
                        Incidunt neque, pariatur molestiae provident nisi porro, iste repellendus molestias iure consectetur dignissimos tenetur. Explicabo, doloribus. Ducimus totam magnam voluptas? Placeat dolorum voluptates mollitia delectus, ex vitae
                        minus explicabo eos veniam quis officia eligendi aliquid alias ab reprehenderit amet recusandae aut libero saepe ad ea consequuntur velit. Reiciendis commodi magni aspernatur, iure quas natus sit voluptatem nemo odit molestiae
                        necessitatibus sequi sapiente vitae enim id cumque animi quasi. Culpa nobis possimus, accusamus doloremque nostrum rem odit expedita placeat doloribus, distinctio sed quo maxime, voluptatem facilis. Modi, veniam culpa et exercitationem
                        earum in. Consequuntur, saepe voluptates labore quis, perspiciatis voluptatem doloremque velit excepturi placeat non ad minus repudiandae aliquid quae et. Iste quibusdam eaque modi corrupti accusantium cum distinctio quos sed rem
                        iusto, debitis eius sit officia cumque praesentium asperiores quo provident doloremque fuga possimus? Quisquam beatae similique incidunt ipsam fugit magnam sunt corporis explicabo amet optio repellendus illum dolorem eveniet aspernatur
                        totam iste, pariatur fugiat nam delectus deserunt. Ducimus, voluptates sit eum sequi temporibus repudiandae aut minima incidunt, quasi rerum possimus, magni odit nihil. Officiis eos voluptates voluptas quibusdam odit soluta corporis
                        magni recusandae, asperiores mollitia maiores porro ipsa est numquam sequi similique. Ad et corrupti tenetur itaque cum impedit cumque distinctio quos libero nesciunt. </p>
                </div>

            </div>

        </section>
        <!------------------------------------------------------------------------>
    </main>


    <footer>
        <div class="contenedor-footer">



            <p class="copy">Todos los derechos reservados &copy;</p>
        </div>
    </footer>


</body>

</html>