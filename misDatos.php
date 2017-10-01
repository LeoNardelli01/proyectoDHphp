<?php
session_start();

if (!isset($_SESSION['nombre'])){
  header("location: index.php");
}
?>



<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>Mis Datos - HS - </title>
      <link rel="stylesheet" href="css/header.css">
      <link rel="stylesheet" href="css/footer.css">
      <link rel="stylesheet" href="css/fonts.css">
      <link rel="stylesheet" href="css/misDatos.css">
      <script src="https://use.fontawesome.com/bb1fbcebba.js"></script>
      <link href="https://fonts.googleapis.com/css?family=EB+Garamond|News+Cycle" rel="stylesheet">
   </head>
   <body>
      <?php include('header.php') ?>
      <div class="container">
         <section class="datos-personales">
            <div class="img-perfil">

               <?php

               $imgPerfil = "";
               if($_SESSION['avatar']['ruta'] == NULL ){
                  $imgPerfil = "images/imgPerfil.jpeg";
               }else{
                  $imgPerfil = "img/" . $_SESSION['avatar']['ruta'];
               }
               ?>

               <img src="<?php echo $imgPerfil ?>" alt="Imagen de perfil">
               <h3>"<?php echo strtoupper($_SESSION['usuario']) ?>"</h3>
            </div>
            <div class="datos">
               <form class="" action="" method="post">
                  <label for="">Nombre: </label>
                  <input type="text" name="" value="<?php echo $_SESSION['nombre']?>" readonly><br>
                  <label for="">Apellido:</label>
                  <input type="text" name="" value="<?php echo $_SESSION['apellido']?>" readonly><br>
                  <label for="">Email:</label>
                  <input type="text" name="" value="<?php echo $_SESSION['email']?>" readonly><br>

               </form>
            </div>
         </section>
      </div>

      <?php include('footer.php') ?>
   </body>
</html>
