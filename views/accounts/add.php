<!-- Vista para añadir-->
<h3>Añadir Cuentas</h3>
<form  action="<?php echo APP_URL; ?>accounts/add" method="POST">
      <input id="name" type="text" class="validate" name="name">
    <label for="name">Name: </label>
      <select name="user_id" >
        <option value="" >Elige el usuario</option>
<?php foreach ($users as $user): ?>
        <option value="<?php echo $user["id"]; ?>"> <?php echo $user["username"]; ?></option>
<?php endforeach; ?>
      </select>
   
   
      <button  type="submit" name="add" value="Save">Enviar
      </button>
</form>
</div>
