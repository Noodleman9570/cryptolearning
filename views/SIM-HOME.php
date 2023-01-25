<?php
session_start();
if (empty($_SESSION)) {
  header("Location: ../index.php");
}

$_SESSION['noob'] = false;

?>


<!DOCTYPE html>
<html lang="es">
	<head>
    <meta charset="UTF-8"/>
    <meta 
      name="viewport" 
      content="width=device-width, initial-scale=1.0"
    />
    <title>CryptoLearning - Menu</title>

    <link rel="stylesheet" href="css/SIM-HOME.css">
  </head>

	<body>
		<header>
      <div class="container">
        <a 
          href="SIM-HOME.html" 
          class="logo"
        >
          <img 
            src="img/logo.png"
            alt="error"
          />
        </a>
        <a href="SIM-HOME.html">
          <p class="nameCompany">CryptoLearning</p>
        </a>
        <nav>
        <a 
        href="../library/logout.php" 
        target="_self"
          >Cerrar Sesión</a>
          <select>
            <option>Español</option>
            <option>Inglés</option>
          </select>
        </nav>
      </div>
    </header>

    <article id="main">
      <section id="hero">
        <div class="container">
          <h1>¿Cómo empezar?</h1>
        </div>
        <div class="container">
          <div class="vidContainer">
            <video autoplay muted loop src="vid/trade.mp4"/>
          </div>
          <div class="texto">
            <h2>T R A D I N G</h2>
            <p>
              El 'trading' consiste en la compraventa de 
              activos cotizados con mucha liquidez de 
              mercado. Da tus primeros pasos y aprende 
              todo sobre este tema aquí.
            </p>
            <form action="SIM-TRADE.html">
              <button>Trade</button>
            </form>
          </div>
        </div>
      </section>
    </article>

    <footer>
      <div class="container">
        <div class="toe">
          <h3>Preguntas<br/>Frecuentes</h3>
          <ul>
            <li>
              <a href="#">FAQ</a>
            </li>
            <li>
              <a href="#">Glosario</a>
            </li>
          </ul>
        </div>
        <div class="toe">
          <h3>Contacto</h3>
          <ul>
            <li type="text">Carlos Alberto Mora Pérez</li>
            <li type="text">V-27.892.646</li>
            <li type="text">carlosamorap@gmail.com</li>
            <li type="text">(+58) 424-7432428</li>
          </ul>
        </div>
        <div class="toe">
          <h3>Comunidad</h3>
          <div class="redes">
            <a 
              href="https://www.facebook.com/"
              target="_blank" 
            >
              <img 
                src="img/fb.png" 
                alt="fb"
                width="30"
                height="30"
              />
            </a>
            <a
              href="https://twitter.com/"
              target="_blank"
            >
              <img 
                src="img/tw.png" 
                alt="tw"
                width="30"
                height="30"
              />
            </a>
            <a
              href="https://www.instagram.com/"
              target="_blank"
            >
              <img 
                src="img/ig.png" 
                alt="ig"
                width="30"
                height="30"
              />
            </a>
          </div>
        </div>
      </div>
      <div class="finalContainer">
        <div class="toe">
          <a href="#">Volver al principio</a>
        </div>
        <div class="copyrigth">
          CRYPTOLEARNING © 2022
        </div>
      </div>
    </footer>

    <script
      src="js/SIM-HOME.js"
      charset="utf-8"
    >    
    </script>
	</body>
</html>