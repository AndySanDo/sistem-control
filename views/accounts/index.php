 
<table border="1" ">
  <h4>Listado de cuentas</h4>
    <tr>
    <th>ID</th>
				<th>ID del usuario</th>
				<th>Nombre</th>
				<th>Action</th>
		</tr>
  </head>
  <body>
<?php foreach ($accounts as $account ): ?>
    <tr>
		    <td><?php echo $account['id']; ?></td>
				<td><?php echo $account['user_id']; ?></td>
				<td><?php echo $account['name']; ?></td>
				<td>
		    		<a href="<?php echo APP_URL; ?>accounts/edit/<?php echo $account["id"]; ?>">Edit</a>
        		<a href="<?php echo APP_URL; ?>accounts/delete/?id=<?php echo $account['id']; ?>">Delete</a>
		    </td>
		</tr>
<?php endforeach; ?>
  </body>
</table>

