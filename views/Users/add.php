<!-- Vista para añadir-->
<form action="<?php echo APP_URL; ?>users/add"  method="POST">
     
       
        <input id="username" type="text" name="username" class="validate">
        <label for="username">Username:</label>
      

     
        <input id="password" type="password" name="password" class="validate">
        <label for="password" >Password: </label>
   

     
       
        <input id="rol" type="text" name="rol" class="validate">
        <label for="rol">Rol </label>
     
        <button  type="submit" name="add" value="save">Enviar
    </button>
 

</form>
