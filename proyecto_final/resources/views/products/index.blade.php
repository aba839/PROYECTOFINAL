<!DOCTYPE html>
<html>
  <head>
    <title>Listado de productos</title>
  </head>
  <body>
    <h1>Listado de productos</h1>
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Nombre</th>
          <th>Cantidad</th>
          <th>Precio</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($products as $product) { ?>
          <tr>
            <td><?php echo $product->id; ?></td>
            <td><?php echo $product->name; ?></td>
            <td><?php echo $product->quantity; ?></td>
            <td><?php echo $product->price; ?></td>
            <td>
              <a href="/products/<?php echo $product->id; ?>">Ver</a>
              <a href="/products/<?php echo $product->id; ?>/edit">Editar</a>
              <form method="POST" action="/products/<?php echo $product->id; ?>">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button type="submit">Eliminar</button>
              </form>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
    <a href="crear">Crear producto</a>
  </body>
</html>
