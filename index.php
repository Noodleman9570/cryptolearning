<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8"/>
    <meta 
      name="viewport" 
      content="width=device-width, initial-scale=1.0"
    />
    <title>CryptoLearning</title>

    <link rel="stylesheet" href="views/css/index.css">
  </head>

  <body>
    <header>
      <div class="container">
      	<a 
      		href="index.html" 
      		class="logo"
      	>
     		  <img 
  	        src="views/img/logo.png"
  	        alt="error"
  	      />
      	</a>
        <a href="">
          <p class="nameCompany">CryptoLearning</p>
        </a>
        <nav>
          <a 
            href="views/SIM-LOGIN.php" 
            target="_self"
          >Iniciar Sesión</a>
          <a 
            href="views/SIM-SIGN1.php" 
            target="_self"
          >Registrarse</a>
          <select>
            <option>Español</option>
            <option>Inglés</option>
          </select>
        </nav>
      </div>
    </header>
    
    <article id="main">
      <section  id="hero">
        <h1>Aprende a invertir con CryptoLearning</h1>
        <p>Ingresa tu e-mail para comenzar</p>
        <form
          action="views/SIM-SIGN1.php"
          method="GET"
          autocomplete="on"
          class="face" 
        >
          <ul>
            <li>
              <input
                name="mail"
                class="e-mail"
                type="e-mail"
                placeholder="example@e-mail.com"
              />
            </li>
            <li>
              <button>Comenzar</button>
            </li>
          </ul>
        </form>
      </section>

      <section id="abstract">
        <div class="container">
          <div class="vidContainer">
            <video autoplay muted loop src="vid/trade.mp4"/>
          </div>
          <div class="texto">
            <h2>
              ¿Qué es <span class=colorAcento1>CriptoLearning</span>?
            </h2>
            <p>
              Lorem ipsum dolor sit amet consectetur 
              adipisicing elit. Non, perferendis, fugit. 
              Officiis omnis id quidem tempore eos vitae 
              dolores iure ex non, nemo, sapiente dolorum 
              enim beatae asperiores nostrum, ipsam.
            </p>
          </div>
        </div>
      </section>

      <section id=features>
        <div class="container">
          <h2>
            <span class="">Explora</span> Nuestro Entorno
          </h2>
          <div class="explore">
            <div class="card">
              <h3>Aprende</h3>
              <p>
                Lorem ipsum dolor, sit, amet consectetur 
                adipisicing elit. Esse sit blanditiis 
                atque nesciunt voluptas cum veritatis, 
                aperiam?
              </p>
            </div>
            <div class="card">
              <h3>Progresa</h3>
              <p>
                Lorem ipsum dolor, sit, amet consectetur 
                adipisicing elit. Esse sit blanditiis 
                atque nesciunt voluptas cum veritatis, 
                aperiam?
              </p>
            </div>
            <div class="card">
              <h3>Debate</h3>
              <p>
                Lorem ipsum dolor, sit, amet consectetur 
                adipisicing elit. Esse sit blanditiis 
                atque nesciunt voluptas cum veritatis, 
                aperiam?
              </p>
            </div>
          </div>
          <form action="SIM-SIGN1.html">
            <button>Comenzar</button>
          </form>
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
  </body>
</html>