<?php
    session_start();

    if (!empty($_SESSION)) {
      header("Location: SIM-HOME.php");
    }

    include 'template/header.php';
?>
    <link rel="stylesheet" href="css/SIM-LOGIN.css">

    <article id="main">
      <section  id="tittle">
        <div class="container">
          <h1>Iniciar Sesión</h1>
          <p>Entra a tu cuenta y continúa donde lo dejaste</p>
        </div>
      </section>

      <section id="login">
        <div class="container">
          <form
            action="../library/login.php"
            method="POST"
            autocomplete="on"
          >
            <ul>
              <li>
                <input
                  name="mail"
                  class="e-mail"
                  type="e-mail"
                  placeholder="Correo electrónico"
                />
              </li>
              <li>
                <input 
                  name="password"
                  class="password" 
                  type="password"
                  placeholder="Contraseña" 
                  />
              </li>
              <li>
                <button>Ingresar</button>
              </li>
            </ul>
          </form>
        </div>
      </section>

      <section id="alt">
        <div class="container">
          <a href="SIM-SIGN1.php">
          ¿No tienes una cuenta?
          </a>
        </div>
      </section>
    </article>

<?php
    include 'template/footer.php';
?>