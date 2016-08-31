<!-- Vista para añadir-->

    <form  action="<?php echo APP_URL; ?>transactions/add" method="POST">
      
						<select name="account_id">
            <option value="" disabled selected>Elige la cuenta</option>
<?php foreach ($accounts as $account): ?>
            <option value="<?php echo $account["id"]; ?>"> <?php echo $account["name"]; ?></option>
<?php endforeach; ?>
            </select>
            <label>Nombre de la cuenta: </label>
       
            <select name="category_id">
<?php foreach ($categories as $category): ?>
            <option value="<?php echo $category["id"]; ?>"> <?php echo $category["name"]; ?></option>
<?php endforeach; ?>
            </select>
            <label>Categoria de transaccion:</label>
        
            <input type="text" name="description">
            <label for="description" class="validate" >Description: </label>
          </div>
				</div>
        <div class="row">
          <div class="input-field col s12 m12 l6">
            <i class="material-icons prefix">payment</i>
            <input type="number" name="amount">
            <label for="amount" class="validate">Monto: </label>
          </div>
         
          
            <input type="date" name="date">
          </div>
       
       
        
          <button class="btn waves-effect waves-light" type="submit" name="add" value="Save">Enviar
              
          </button>
				</div>
      </div>
</form>
