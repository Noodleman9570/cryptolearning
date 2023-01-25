<?php
    session_start();

    if (!empty($_SESSION)) {
      header("Location: SIM-HOME.php");
    }

    if (isset($_GET) && !empty($_GET)) {
      $mail = $_GET['mail'];
    } else {
      $mail = "";
    }

    include 'template/header.php';
?>
    <link rel="stylesheet" href="css/SIM-SIGN1.css">

    <article id="main">
      <section id="tittle">
        <div class="container">
           <h1>Crear Cuenta</h1>
           <p>Crea un cuenta para empezar y descubre el mundo del trading</p>
        </div>
      </section>

      <section id="sign">
        <div class="container">
          <form 
            action="../library/signup.php"
            method="POST"
            autocomplete="on"
            class="resgistrarse"
          >
            <ul>
              <li>
                <input
                  value="<?= $mail; ?>"
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
                <select 
                  name="pais"
                  class="country" 
                  form="registrarse"
                >
                  <option
                    hidden="true"
                    selected="true"
                    disabled="disabled"
                    class="placeholder"
                  >
                    País
                  </option>
                  <option value="1">Antigua y Barbuda</option>
                  <option value="2">Argentina</option>
                  <option value="3">Bahamas</option>
                  <option value="4">Barbados</option>
                  <option value="5">Belice</option>
                  <option value="6">Bolivia</option>
                  <option value="7">Colombia</option>
                  <option value="8">Costa Rica</option>
                  <option value="9">Cuba</option>
                  <option value="10">Chile</option>
                  <option value="11">Dominica</option>
                  <option value="12">Ecuador</option>
                  <option value="13">El Salvador</option>
                  <option value="14">Granada</option>
                  <option value="15">Guatemala</option>
                  <option value="16">Guyana</option>
                  <option value="17">Haití</option>
                  <option value="18">Honduras</option>
                  <option value="19">Jamaica</option>
                  <option value="20">México</option>
                  <option value="21">Nicaragua</option>
                  <option value="22">Panamá</option>
                  <option value="23">Paraguay</option>
                  <option value="24">Perú</option>
                  <option value="25">República Dominicana</option>
                  <option value="26">San Cristóbal y Nieves</option>
                  <option value="27">San Vicente y las Granadinas</option>
                  <option value="28">Santa Lucía</option>
                  <option value="29">Surinam</option>
                  <option value="30">Trinidad y Tobago</option>
                  <option value="31">Estados Unidos de América</option>
                  <option value="32">Uruguay</option>
                  <option value="33">Venezuela</option>
                </select>
              </li>
              <li>
                <button>Comenzar</button>
              </li>
            </ul>
          </form>
        </div>
      </section>

      <section id="alt">
        <div class="container">
           <a href="SIM-LOGIN.php">
            ¿Ya estás registrado?
          </a>
        </div>
      </section>
    </article>

<?php
    include 'template/footer.php';
?>