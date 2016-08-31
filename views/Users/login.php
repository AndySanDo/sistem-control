
<form  action="<?php echo APP_URL; ?>users/login" method="POST">

    <h2 class="center-align">Acceso al sistema</h2>
<p>
   <label for="username">Usuario</label>
</p>
<p>
    <input id="username" type="text" class="validate" name="username">
</p>
     <p>
        <label for="pass">Contraseña</label>
     </p>
      <input id="pass" type="password" class="validate" name="password">
     <p>
        <button type="submit" name="action">Enviar
       
      </button>
     </p>
</form>
