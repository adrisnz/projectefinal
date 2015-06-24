<?php
error_reporting(0);

if ($_SESSION['islogged'] != True) 
{
   header("location:home");
   exit;
}

if($_SESSION['idusuario']!=1)
{
 header("location:home");
   exit;
  }


if(isset($_POST['submitted'])||(isset($_POST['submitted2']))||(isset($_POST['submitted3'])))

{


         $connect  = mysqli_connect("localhost","2daw12_minimal2","aMT9F9WtoW","2daw12_minimal") or die("Error " . mysqli_error($link));  
mysqli_set_charset($connect,"utf8");

        if (!$connect) {
                die(mysqli_connect_error());
            }


                mysqli_select_db($connect, "minimal");



if(isset($_POST['submitted']))

{




$plataforma=$_POST['plataforma'];

    $idplataforma = mysqli_query($connect, "SELECT plataformas.id_plataforma FROM plataformas WHERE plataformas.nombre='$plataforma'");





  while($row = mysqli_fetch_array($idplataforma)) {
$id_plataforma = $row['id_plataforma'];


           }




$idjuego=$_POST['id_juego'];

$nombre=$_POST['nombre'];

$fecha=$_POST['fecha'];

$nota=$_POST['nota'];


$query = "UPDATE videojuegos SET nombre='$nombre',plataforma='$id_plataforma',nombre='$nombre',fecha='$fecha',nota_profesionales='$nota' WHERE id_juego='$idjuego'";



if($connect->query($query)){
   header("location:#");


}else{
  echo "S'ha produit un error";
}

}



if(isset($_POST['submitted2']))

{




$email=$_POST['email'];




$idusuario=$_POST['id_usuario'];



$query = "UPDATE usuarios SET email='$email' WHERE id_usuario='$idusuario'";



if($connect->query($query)){
  echo "Todo correcto";


}else{
  echo "S'ha produit un error";
}


}


if(isset($_POST['submitted3']))

{




$plataforma=$_POST['plataforma'];

    $idplataforma = mysqli_query($connect, "SELECT plataformas.id_plataforma FROM plataformas WHERE plataformas.nombre='$plataforma'");





  while($row = mysqli_fetch_array($idplataforma)) {
$id_plataforma = $row['id_plataforma'];


           }




$idjuego=$_POST['id_juego'];

$nombre=$_POST['nombre'];

$fecha=$_POST['fecha'];

$nota=$_POST['nota'];


$query = "INSERT INTO videojuegos(nombre, nota_profesionales, url_imagen, fecha, plataforma) VALUES('$nombre', '$nota', '', '$fecha', '$id_plataforma')";


if($connect->query($query)){
   header("location:#");


}else{
  echo "S'ha produit un error";
}

}








}



if(is_null($_POST['submitted'])or(is_null($_POST['submitted2']))or(is_null($_POST['submitted3'])))

{


?>




  <div class="container"> 

      <div class="codrops-top" style="margin-top:100px;">

      </div>
      <div class="main clearfix">
        <nav id="menu" class="nav">         
          <ul>
            <li>
              <a href="<?= APP_W.''?>">
                <span class="icon">
                  <i aria-hidden="true" class="icon-home"></i>
                </span>
                <span>Inicio</span>
              </a>
            </li>
            <li>
              <a href="<?= APP_W.'ps4'?>">
                <span class="icon"> 
                  <i aria-hidden="true" class="icon-ps4"></i>
                </span>
                <span>PS4</span>
              </a>
            </li>
            <li>
              <a href="<?= APP_W.'xbox'?>">
                <span class="icon">
                  <i aria-hidden="true" class="icon-xboxone"></i>
                </span>
                <span>Xbox One</span>
              </a>
            </li>
            <li>
              <a href="<?= APP_W.'pc'?>">
                <span class="icon">
                  <i aria-hidden="true" class="icon-pc"></i>
                </span>
                <span>PC</span>
              </a>
            </li>
            <li>
              <a href="<?= APP_W.'android'?>">
                <span class="icon">
                  <i aria-hidden="true" class="icon-android"></i>
                </span>
                <span>Android</span>
              </a>
            </li>
                        <li>
              <a href="<?= APP_W.'ios'?>">
                <span class="icon">
                  <i aria-hidden="true" class="icon-ios"></i>
                </span>
                <span>iOS</span>
              </a>
            </li>
                         <li>
              <a href="<?= APP_W.'paypal'?>">
                <span class="icon">
                  <i aria-hidden="true" class="icon-team"></i>
                </span>
                <span>PayPal</span>
              </a>
            </li>
                         <li>
              <a href="<?= APP_W.'contacto'?>">
                <span class="icon">
                  <i aria-hidden="true" class="icon-contact"></i>
                </span>
                <span>Contacto</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </div>




<div style="margin-top: 0px;   text-align: center;">


    <h2>AÑADIR JUEGO</h2>


<div class="">
<p class="titulo_tabla"></p>
<div style="display:inline-flex;">
<table class="tabla_home" id="blava">
<thead>
  <tr>
    <th>Nombre</th>
    <th>Nota Profesionales</th> 
    <th>Plataforma</th> 
    <th>Fecha lanzamiento</th> 
    <th>AÑADIR</th> 

  </tr>
  </thead>
  <tbody>
  <tr>                   

<form name="juegos" method="POST" action="#"> 
                    <td style="border-bottom:2px solid lightgrey; border-top:2px solid lightgrey;"> <input type="hidden" name="submitted3" value="1"><input type="text" name="nombre"></td></td>
                    <td style="border-bottom:2px solid lightgrey; border-top:2px solid lightgrey;"><input type="text" name="nota"></td>
                    <td style="border-bottom:2px solid lightgrey; border-top:2px solid lightgrey;"><input type="text" name="plataforma"></td>
                    <td style="border-bottom:2px solid lightgrey; border-top:2px solid lightgrey;"><input type="date" name="fecha"></td>
                    <td style="border-bottom:2px solid lightgrey; border-top:2px solid lightgrey;"><input type="submit" value="Añadir"></form></td>


              

                </tr>

  </tbody>
</table>
</div>
</div>




<div style="margin-top: 50px;   text-align: center;">

    <h2>MODIFICAR JUEGOS</h2>



<div class="">
<p class="titulo_tabla"></p>
<div style="display:inline-flex;">
<table class="tabla_home" id="blava">
<thead>
  <tr>
    <th>ID Juego</th>
    <th>Juego</th>
    <th>Nota Profesionales</th> 
    <th>Plataforma</th> 
    <th>Fecha lanzamiento</th> 
    <th>GUARDAR</th> 

  </tr>
  </thead>
  <tbody>
<?php 
        
       
         $connect  = mysqli_connect("localhost","2daw12_minimal2","aMT9F9WtoW","2daw12_minimal") or die("Error " . mysqli_error($link));  
mysqli_set_charset($connect,"utf8");

        if (!$connect) {
                die(mysqli_connect_error());
            }


                mysqli_select_db($connect, "minimal");


    $queryNovedades = mysqli_query($connect, "SELECT videojuegos.id_juego, videojuegos.nombre, videojuegos.nota_profesionales, videojuegos.fecha, plataformas.nombre AS p_nombre FROM videojuegos INNER JOIN plataformas on videojuegos.plataforma = plataformas.id_plataforma ORDER BY videojuegos.id_juego ASC");





  while($row = mysqli_fetch_array($queryNovedades)) {


            ?>




            <tr>                   


                    <td style="border-bottom:2px solid lightgrey; border-top:2px solid lightgrey;"><?php echo '<form name="juegos" method="POST" action="#">    <input type="hidden" name="submitted" value="1">
<input readonly name="id_juego" type="text" value="'.$row['id_juego'].'">';?></td>
                    <td style="border-bottom:2px solid lightgrey; border-top:2px solid lightgrey;"><?php echo '<input type="text" name="nombre" value="'.$row['nombre'].'">';?></td>
                    <td style="border-bottom:2px solid lightgrey; border-top:2px solid lightgrey;"><?php echo '<input type="text" name="nota" value="'.$row['nota_profesionales'].'">';?></td>
                    <td style="border-bottom:2px solid lightgrey; border-top:2px solid lightgrey;"><?php echo '<input type="text" name="plataforma" value="'.$row['p_nombre'].'">';?></td>
                    <td style="border-bottom:2px solid lightgrey; border-top:2px solid lightgrey;"><?php echo '<input type="date" name="fecha" value="'.$row['fecha'].'">';?></td>
                    <td style="border-bottom:2px solid lightgrey; border-top:2px solid lightgrey;"><?php echo '<input type="submit" value="Guardar"></form>';?></td>


                </tr>
<?php



    }     


          ?>

            
  </tbody>
</table>
</div>
</div>


  


</div></div>






<div style="margin-top: 50px;   text-align: center;">

    <h2>MODIFICAR USUARIOS</h2>



<div class="">
<p class="titulo_tabla"></p>
<div style="display:inline-flex;">
<table class="tabla_home" id="blava">
<thead>
  <tr>
    <th>ID Usuario</th>
    <th>Email</th>
    <th>GUARDAR</th> 

  </tr>
  </thead>
  <tbody>
<?php 
        
       
         $connect  = mysqli_connect("localhost","2daw12_minimal2","aMT9F9WtoW","2daw12_minimal") or die("Error " . mysqli_error($link));  
mysqli_set_charset($connect,"utf8");

        if (!$connect) {
                die(mysqli_connect_error());
            }


                mysqli_select_db($connect, "minimal");


    $queryNovedades = mysqli_query($connect, "SELECT usuarios.id_usuario, usuarios.email FROM usuarios");





  while($row = mysqli_fetch_array($queryNovedades)) {


            ?>




            <tr>                   


                    <td style="border-bottom:2px solid lightgrey; border-top:2px solid lightgrey;"><?php echo '<form name="usuarios" method="POST" action="#">    <input type="hidden" name="submitted2" value="1">
<input readonly name="id_usuario" type="text" value="'.$row['id_usuario'].'">';?></td>
                    <td style="border-bottom:2px solid lightgrey; border-top:2px solid lightgrey;"><?php echo '<input type="email" name="email" value="'.$row['email'].'">';?></td>
                    <td style="border-bottom:2px solid lightgrey; border-top:2px solid lightgrey;"><?php echo '<input type="submit" value="Guardar"></form>';?></td>


                </tr>
<?php



    }     


          ?>

            
  </tbody>
</table>
</div>
</div>


  


</div></div>



<?php } ?>
