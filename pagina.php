<?php
include 'comment.php';
include 'story.php';
session_start();

//Story::store('Mundo');

//Comment::store('esto es un comentario para hola', 'Alejandro', '16');

// echo "<h2>Comentarios Hola</h2>";
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Navbar</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="stylesPagina.css" />
    <script src="https://kit.fontawesome.com/7e5b2d153f.js" crossorigin="anonymous"></script>
    <script defer src="pagina.js"></script>

</head>

<body>
    <header class="header">
        <nav class="nav">
            <img src="./LogoPDS.PNG" alt="logo" id="logo">
            <button class="nav-toggle" aria-label="Abrir menú">
                <i class="fas fa-bars"></i>
            </button>
            <ul class="nav-menu">
                <li class="nav-menu-item">
                    <a href="#" class="nav-menu-link nav-link"></a>
                </li>

                <li class="nav-menu-item">
                    <a href="./index.php" class="nav-menu-link nav-link nav-menu-link_active" id="cerrarSesion">Cerrar Sesion </a>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="seccion1">
            <h2>Escribe tu historia</h2>
            <form method="POST" action="./createStory.php">
                <input type="text" name="description" required id="testimonio" class="cajonTestimonio" placeholder="Escribe tu testimonio">
                <select name="category" class="form">
                <option>----Categoria----</option>
                <option value="salud">Salud</option>
                <option value="genero">Genero</option>
                <option value="edad">Edad</option>
                <option value="salario">Salario</option>
                <option value="discriminacion">Discriminacion</option>
                <option value="inequidad">Inequidad</option>
                <option value="mobbing">Mobbing</option>
                <option value="bossing">Bossing</option>
                <option value="acoso perverso">Acoso perverso</option>
               
            </select>
                <button type="submit">
                    Publicar
                </button>
            </form>
            <div id="publicacionDeTestimonio">

            </div>
        </section>

        <section class="seccion2">
            <?php
            if ($result = Story::getAll()) {
                while ($obj = $result->fetch_object()) {
                    $id = $obj->id;
                    $created_at = $obj->created_at;
                    $description = $obj->description;
                    $usuario = $_SESSION['usuario'];

                    $comments = "";
                    if ($resultComment = Comment::getByStoriesId($id)) {
                        while ($comment = $resultComment->fetch_object()) {
                            $comments .= "<li>" . $comment->description . "</li>";
                        }
                    }

                    echo <<<EOT
                        <div class="story-card">
                            <p class="story-card__author">Anónimo</p>
                            <p class="story-card__date">$created_at</p>
                            <p class="story-card__description">$description</p>
                            <h4>Comentarios</h4>
                            <ol class="comentarios">
                                $comments
                            </ol>
                            <form method="POST" action="./createComment.php" class="cajaComentarios">
                                <input hidden name="stories_id" value="$id" />
                                <input hidden name="author" value="$usuario" />
                                <textarea class="cajaComentario" name="description" placeholder="Escribe tu comentario"></textarea>
                                <button type="submit">Comentar</button>
                            </form>
                        </div>
                        EOT;
                }
            }
            ?>
        </section>
    </main>

</body>

</html>