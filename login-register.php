<div id="myModal" class="modal">
  <div class="modal-content">
    <span class="close" onclick="closeLogin()">&times;</span>
    <div id="optionsLogin">
      <h2 id="modalTitle">Iniciar sesión</h2>
      <div class="button-wrapper">
        <div id="g_id_onload" data-client_id="794519880683-1r3hbq5j4tc0ipir7b11fppp0stta5ff.apps.googleusercontent.com"
          data-context="signin" data-ux_mode="popup" data-callback="googleResponse" data-auto_prompt="false">
        </div>

        <div class="g_id_signin" data-type="standard" data-shape="rectangular" data-theme="outline"
          data-text="signin_with" data-size="large" data-locale="es" data-logo_alignment="left" data-width="400px">
        </div>
      </div>
      <div class="button-wrapper">
        <button class="login-btn email" onclick="showLoginForm()">
          <img src="./images/user-icon.svg" alt="User Icon" class="button-icon">
          Usar correo electrónico</button>
      </div>
    </div>

    <!-- Formulario de inicio de sesión oculto -->
    <div id="loginForm" style="display:none;">
      <h2 id="modalTitle">Iniciar sesión</h2>
      <section class="login">
        <form action="connect.php" method="post" class="form">
          <input type="hidden" name="form_id" value="loginForm">
          <label id="emailLabel" for="email">Correo</label>
          <input type="email" name="email" id="email" placeholder="Correo" required>
          <input type="password" name="password" id="password" placeholder="Contraseña" required>
          <div class="cf-turnstile" data-sitekey="1x00000000000000000000AA"></div>
          <button type="submit" id="btnEnviar">Iniciar Sesión</button>
        </form>
      </section>
    </div>
    <!-- Formulario de registro oculto -->
    <div id="registerForm" style="display:none;">
      <h2 id="modalTitle">Regístrate</h2>
      <section class="login">
        <form action="connect.php" method="post" class="form">
          <input type="hidden" name="form_id" value="registerForm">
          <label id="usernameLabel" for="register-username">Nombre de Usuario</label>
          <input type="text" name="username" id="register-username" placeholder="Nombre de Usuario" required>
          <label id="emailLabel" for="register-email">Correo</label>
          <input type="email" name="email" id="register-email" placeholder="Correo" required>
          <label for="register-password">Contraseña</label>
          <input type="password" name="password" id="register-password" placeholder="Contraseña" required>
          <label for="register-confirm-password">Confirmar Contraseña</label>
          <input type="password" name="confirm-password" id="register-confirm-password"
            placeholder="Confirmar contraseña" required>
          <div class="cf-turnstile" data-sitekey="1x00000000000000000000AA"></div>
          <button type="submit" id="register-btnEnviar">Registrarse</button>
        </form>
      </section>
    </div>
  </div>