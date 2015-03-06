<?php
session_start();
include('lib/conexion.php');
?>
<!DOCTYPE HTML>
<html>
<head>
  <title> Catalogo de Productos</title>
  <meta charset="utf-8">
  <link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
  <div id="wrapper">

    <article id="content_page">
     <section id="products">
      <!--Falta crear un metodo para filtrar los productos por categoria-->
      <h1>Catalogo de productos</h1>
       <?php
       $sql = mysql_query("SELECT * FROM productos", Conectar::conexion());
       $num_rows = mysql_num_rows($sql);
       if($num_rows != 0){
        while($row = mysql_fetch_array($sql)){
          ?>
          <div>
           <img src="administrator/productos/<?php echo $row[1]?>" width="150" height="150" style="margin: 10px 0px 8px 20px;" >
           <p class="product_row" style="color: #fe0025; font-weight: bold;"><?php echo $row[2]?></p> 
           <p class="product_row">Precio: $<?php echo $row[4]?></p>
           <?php if($row[5] != 0){
            ?>
            <p class="product_row">Disponibles: <?php echo $row[5]?></p>

            <form id="add_carrito" method="post" action="carrito.php"> 
              <input type="hidden" name="id" value="<?php echo $row[0]?>"> 
              <input type="hidden" name="imagen" value="<?php echo $row[1]?>"> 
              <input type="hidden" name="nombre" value="<?php echo $row[2]?>"> 
              <input type="hidden" name="precio" value="<?php echo $row[4]?>"> 

              <input type="hidden" name="stock" value="<?php echo $row[5]?>">  

              <input type="hidden" name="cantidad" value="1"> 
              <input type="submit" value="Añadir al Carrito" class="button1" style="margin-left:20px; ">
            </form>

            <form action="ver_detalle.php" method="post" style="margin-bottom: 20px;">
              <input type="hidden" name="id" value="<?php echo $row[0]?>"> 
              <input type="submit" value="Ver Detalles" class="button1" style="margin-left:20px;">   
            </form>
            <?php
          }else{
           echo'<br>';
           echo'<br>';
           echo '<p style="color:white; font-weight: bold; background-color:orange;">No disponible por el momento</p>';
         }
         ?>
       </div>               

       <?php           
     }           
   }
  ?>

</section>        


</article>
</div>
</body>
</html>
