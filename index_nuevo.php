<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Navbar</title>

    <link rel="stylesheet" href="stylesPagina.css-------" />
    <script
      src="https://kit.fontawesome.com/7e5b2d153f.js"
      crossorigin="anonymous"
    ></script>
    <script defer src="pagina.js"></script>
    
  </head>
  <body>
    <header class="header">
      <nav class="nav">
        <a href="#" class="logo nav-link">Logo</a>
        <button class="nav-toggle" aria-label="Abrir menú">
          <i class="fas fa-bars"></i>
        </button>
        <ul class="nav-menu">
          <li class="nav-menu-item">
            <a href="#" class="nav-menu-link nav-link"></a>
          </li>
         
          <li class="nav-menu-item">
            <a href="#" class="nav-menu-link nav-link nav-menu-link_active"
              >Cerrar Sesion </a
            >
          </li>
        </ul>
      </nav>
    </header>
    <main >
      <section >
        <form class="form">
          <input type="text" required id="testimonio">
          <label class="lbl-nombre">
            <span class="text-nomb">Escribe tu historia</span>
          </label>
        </form>
        <button id="button">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          Publicar
        </button>
        
            <div class="select-box" id="categoriasCajon">
              <div class="options-container">
                <div class="option">
                  <input
                    type="radio"
                    class="radio"
                    id="automobiles"
                    name="category"
                  />
                  <label for="automobiles">Salud</label>
                </div>
      
                <div class="option">
                  <input type="radio" class="radio" id="film" name="category" />
                  <label for="film">Genero</label>
                </div>
      
                <div class="option">
                  <input type="radio" class="radio" id="science" name="category" />
                  <label for="science">Edad</label>
                </div>
      
                <div class="option">
                  <input type="radio" class="radio" id="art" name="category" />
                  <label for="art">Salario</label>
                </div>
      
                <div class="option">
                  <input type="radio" class="radio" id="music" name="category" />
                  <label for="music">Discriminacion</label>
                </div>
      
                <div class="option">
                  <input type="radio" class="radio" id="travel" name="category" />
                  <label for="travel">Inequidad</label>
                </div>
      
                <div class="option">
                  <input type="radio" class="radio" id="sports" name="category" />
                  <label for="sports">Mobbing</label>
                </div>
      
                <div class="option">
                  <input type="radio" class="radio" id="news" name="category" />
                  <label for="news">Bossing</label>
                </div>
      
                <div class="option">
                  <input type="radio" class="radio" id="tutorials" name="category" />
                  <label for="tutorials">Acoso perverso</label>
                </div>

                <div class="option">
                  <input type="radio" class="radio" id="tutorials" name="category" />
                  <label for="tutorials">Otra</label>
                </div>
              </div>
              <div class="selected">
                Selecciona Categoria
              </div>
              <div id="publicacionDeTestimonio">

              </div>
      </section>

      <div class="content-all">
        
        <input type="checkbox" id="check">
        <label for="check" class="icon-menu">Categorias</label>
        
        
        
        <nav class="menu">
            
              <ul>
                <li>
                    <a href="index.html" class="botones" value="Salud">Salud</a>
                </li>
                <li>
                    <a href="index.html" class="botones" value="Genero">Genero</a>
                </li>
                <li>
                    <a href="index.html" class="botones" value="Edad">Edad</a>
                </li>
                <li>
                    <a href="index.html" class="botones" value="Salario">Salario</a>
                </li>
                <li>
                  <a href="index.html" class="botones" value="Discriminacion">Discriminacion</a>
                </li>
                <li>
                <a href="index.html" class="botones" value="Inequidad">Inequidad</a>
                </li>
                <li>
                  <a href="index.html" class="botones" value="Mobbing">Mobbing</a>
                </li>
                <li>
                  <a href="index.html" class="botones" value="Bossing">Bossing</a>
                </li>
                <li>
                  <a href="index.html" class="botones" value="Acoso perverso">Acoso perverso </a>
                </li>
            </ul>
            
        </nav>
        
        
    </div>
    </main>
    
  </body>
</html>