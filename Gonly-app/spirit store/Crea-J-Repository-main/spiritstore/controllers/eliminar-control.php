<?php session_start();
    if (isset($_SESSION['usuario'])) {
      $numTable = $_SESSION['TablaNum'];
      $id = $_SESSION['idcarro'];
      $categoria = $_SESSION['categoryCarP'];
      $conex = mysqli_connect('localhost', 'root', '', "spirit_store");
      $consulta = "SELECT * FROM $categoria WHERE IdCategoria=" . $id;
      $resp = mysqli_query($conex,$consulta);
      if($resp){
        $arreglo[$numTable]['ModeloCarro'] = NULL;
        $arreglo[$numTable]['Descripcion'] = NULL;
        $arreglo[$numTable]['Precio'] = NULL;
        $arreglo[$numTable]['ImagenCarro'] = NULL;
        $arreglo[$numTable]['Category'] = NULL;
        $arreglo[$numTable]['IdCar'] = NULL;
        $_SESSION['carrito'][$numTable] = $arreglo;

      }

  }
    header('Refresh:0; url=carrito-control.php', true);

 ?>
