<?php

    session_start();

    if (empty($_SESSION)) {
      header("Location: ../index.php");
    } else {
      if (!$_SESSION['noob']) {
        header("Location: SIM-HOME.php");
      }
    }

    include 'template/header.php';
?>
    <link rel="stylesheet" href="css/SIM-SIGN2.css">

    <article id="main">
    	<section id="tittle">
        <div class="container">
          <h1>Personaliza Tu Perfil</h1>
          <p>Escoge una foto y un alias único
          para que los demás te reconozcan</p>
        </div>
    	</section>

      <section id="profileImg">
        <div container>
          <div class="marco0">
            <div class="marco1">
              <div class="marco2">
                <img
                  src="img/monalisa-avatar.jpg"
                  alt="img-avatar"
                />
                <button
                  type="button"
                  class="changeAvatar"
                >
                    <i class="icon"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
      </section>

  		<section id="profile">
        <div class="container">
          <form action="SIM-HOME.php">
            <ul>
              <li>
                <input
                  type="text"
                  placeholder="Ingresa tu alias"
                  class="nickname"
                />
              </li>
              <li>
                <button>Continuar</button>
              </li>
            </ul>
          </form>
        </div>
  		</section>
    </article>

<?php
    include 'template/footer.php';
?>
