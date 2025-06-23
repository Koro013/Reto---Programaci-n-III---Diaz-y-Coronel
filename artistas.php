<?php
require_once "config.php";
$stmt = $pdo->query("SELECT nombre, descripcion, imagen FROM artistas ORDER BY id");
$artistas = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sonidos de la Ciudad - Artistas</title>
    <link rel="icon" type="image/png" href="./images/guitarra.ico" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Rubik+Dirt&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
    <link rel="stylesheet" href="./css/styles.css" />
  </head>

  <body>
    <header>
      <h1 id="titulo"><i hidden>Festival</i> Sonidos de la Ciudad</h1>
      <button id="alternarMenu" class="alternar-menu">
        <i class="fa-solid fa-bars"></i>
      </button>
      <nav>
        <ul>
          <li>
            <a href="index.html"><i class="fa-solid fa-house"></i> Inicio</a>
          </li>
          <li>
            <a href="artistas.php"
              ><i class="fa-solid fa-music"></i> Artistas</a
            >
          </li>
          <li>
            <a href="cronograma.html"
              ><i class="fa-solid fa-clock"></i> Cronograma</a
            >
          </li>
          <li>
            <a href="entradas.html"
              ><i class="fa-solid fa-ticket"></i> Entradas</a
            >
          </li>
          <li>
            <a href="ubicacion.html"
              ><i class="fa-solid fa-location-dot"></i> Ubicación</a
            >
          </li>
          <li>
            <a href="contacto.html"
              ><i class="fa-solid fa-address-book"></i> Contacto</a
            >
          </li>
        </ul>
      </nav>
    </header>

    <main>
      <section>
        <h2>Conoce a los Artistas</h2>
        <div class="flex-container">
<?php foreach ($artistas as $artista): ?>
          <article class="card flex-item">
            <h3><?php echo htmlspecialchars($artista['nombre']); ?></h3>
            <p><?php echo nl2br(htmlspecialchars($artista['descripcion'])); ?></p>
            <img src="<?php echo htmlspecialchars($artista['imagen']); ?>" alt="<?php echo htmlspecialchars($artista['nombre']); ?>" class="rotate-on-hover" />
          </article>
<?php endforeach; ?>
        </div>
      </section>
    </main>

    <footer>
      <p>© 2025 Sonidos de la Ciudad</p>
      <p>
        Más contenido en
        <a href="https://www.facebook.com/festivalchacarera" target="_blank"
          >nuestra página de Facebook</a
        >
      </p>
      <p>
        ¿Dudas? Escríbenos a
        <a href="mailto:info@sonidosdelaciudad.com"
          >info@sonidosdelaciudad.com</a
        >
      </p>
    </footer>
    <script src="./js/main.js"></script>
  </body>
</html>
