<?php
session_start();
include('lib/conexion.php');
include('lib/carrito_compras.php')
?>
<!DOCTYPE HTML>
<html>
<head>
  <title> Carrito</title>
  <meta charset="utf-8">
  <link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
  <div id="wrapper">
  <article id="content_page">
      <?php
              /*
              if(!isset($_SESSION['usuario'])){
                  echo
                  '<script type="text/javascript">
                   alert("Para añadir productos al carrito de compras es necesario iniciar su sesion");
                   window.location.href="frm_login.php";
                  </script>';
                  
              }
           */
       ?>
 <div style="margin-left: 40px; margin-bottom:100px;">
            <h1>Carrito de compras</h1>
            <?php     
       $num_articulos = 0;
       for($i=0; $i<count($mi_carrito); $i++){ //Vaciamos los registros que contiene el  array del carrito
      if($mi_carrito[$i] != NULL){ //Si el array $mi_carrito es diferente de NULL muestra la informacion que contiene en la posición $i 
       $num_articulos = $num_articulos + 1;
     }
   }
   if ($num_articulos != 0){ 
     ?>    
     
     <p>Tus compras hasta el momento son: </p>

     <table width="900" border="0" style="text-align: center;">
      <tr style="background-color:#fe0025; color:white; text-align:center;">
        <td width="100">Portada</td>
        <td width="398">Nombre</td>
        <td width="93">Precio</td>
        <td width="116">Cantidad</td>
        <td width="102" >Subtotal</td>
        <td style="background-color:white;"width="65">&nbsp;</td>
      </tr>
      <?php
      if(isset($mi_carrito)){
       $total = 0;   
       for($i=0; $i<count($mi_carrito); $i++ ){
        if($mi_carrito[$i] != NULL){

          ?>
          <tr>
            <td><img src="administrator/productos/<?php echo $mi_carrito[$i]['imagen']?>" width="100" height="100"></td>
            <td><?php echo $mi_carrito[$i]['nombre'] ?> </td>
            <td><?php echo $mi_carrito[$i]['precio'] ?></td>
            <td> 
             <form  method="post" action="carrito.php">
              <input type="hidden" name="id2" value="<?php echo $i ?>"> <!-- Campo que almacenara el $id, el indice de la matriz -->
              <input type="number" name="cantidad2"  min="1" max="<?php echo $mi_carrito[$i]['stock'] ?>" value="<?php echo $mi_carrito[$i]['cantidad']?>">
              <input type="image" name="update" src="images/update.gif">

            </form>

          </td>

          <td>$
           <?php 
  $subtotal = $mi_carrito[$i]['precio'] * $mi_carrito[$i]['cantidad']; //calculamos el subtotal
    $total = $total + $subtotal;  //calculamos el total  
    echo $subtotal;
    ?> 
  </td>
  <td>  
    <form action="carrito.php" method="post">
      <input type="hidden" name="id3" value="<?php echo $i ?>">
      <input type="image" name="eliminar" src="images/delete.jpg">
    </form>
  </td>
</tr>
<?php
}
}
}
?>
<tr>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td style="background-color:#fe0025; color:white; text-align:center;">Total</td>
  <td> $ <?php if(isset($mi_carrito)){ echo $total; }?></td>
  <td>&nbsp;</td>
</tr>
<tr>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td> 

  </td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
</tr>
</table>
<div style="float: right; margin-right:  160px;">
  <form style="float: right;" id="confirmar_pedido" method="post" action="confirmar_pedido.php">
    <input type="hidden" name="paso_1" value="1">
    <input type="hidden" name="total" value="<?php echo $total ?>">
    <input type="submit" value="Confirmar Compra" class="button1">

  </form>
  <br>
  <form style="float: right;"  method="post" action="index.php">
    <input type="hidden" name="return" value="">
    <input type="submit" value="Seguir Comprando" class="button1">
  </form>   
</div>


<?php
}
?>
</div>
</div>
</body>
</html>
