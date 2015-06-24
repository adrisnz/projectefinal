<?php
ob_start();



if(isset($_POST['submitted2']))

{

         $connect  = mysqli_connect("localhost","2daw12_minimal2","aMT9F9WtoW","2daw12_minimal") or die("Error " . mysqli_error($link));  
mysqli_set_charset($connect,"utf8");

        if (!$connect) {
                die(mysqli_connect_error());
            }


                mysqli_select_db($connect, "minimal");

if(isset($_POST['favorito']))
{
$favorito=$_POST['favorito'];

}else{

$favorito=0;

}



$idjuego=$_POST['idjuego'];
$idusuario=$_SESSION['idusuario'];



    $queryy = mysqli_query($connect, "SELECT videojuegos_usuarios.videojuego FROM videojuegos_usuarios WHERE videojuegos_usuarios.usuario='$idusuario' AND videojuegos_usuarios.videojuego='$idjuego'");


    $row_cnt = mysqli_num_rows($queryy);


    if($row_cnt>0)
    {
$query ="UPDATE videojuegos_usuarios SET favorito='$favorito' WHERE videojuegos_usuarios.usuario='$idusuario' AND videojuegos_usuarios.videojuego='$idjuego'"; 




    }else{



      $query ="INSERT INTO videojuegos_usuarios VALUES ('$idusuario', '$idjuego', 'Puntuar', 1)"; 



}





if($connect->query($query)){
echo '<script>location.href="'.APP_W.'android"</script>';

}else{

}


}else{

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


<div style="width:100%; text-align:center;"><h1>Android</h1>



   


<div class="wr_tabla5">

<div style="display:inline-flex;">
<table class="tabla_home" id="verda_android">
<thead>
  <tr>
    <th>Imagen</th>
    <th>Juego</th>
    <th>Nota Profesionales</th> 
     <th>Favorito</th> 
   <?php if(isset($_SESSION['islogged']) && $_SESSION['islogged']==True){echo'<th>GUARDAR</th>';}?> 
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




    $queryXboxOne = mysqli_query($connect, "SELECT videojuegos.nombre, videojuegos.url_imagen, videojuegos.id_juego, videojuegos.nota_profesionales FROM videojuegos WHERE videojuegos.plataforma=5");





  while($row = mysqli_fetch_array($queryXboxOne)) {


if(isset($_SESSION['islogged']) && $_SESSION['islogged']==True){



 $email=$_SESSION['email'];
   
$idusuario = "SELECT usuarios.id_usuario FROM usuarios WHERE email='$email'" or die("Error in the consult.." . mysqli_error($connect)); 
$result = $connect->query($idusuario); 

$row2 = mysqli_fetch_array($result);

$id_usuario = $row2['id_usuario'];


$idjuegocompfav=$row['id_juego'];
   
    $querycomprobarfavorito2 = mysqli_query($connect, "SELECT videojuegos_usuarios.favorito FROM videojuegos_usuarios WHERE videojuegos_usuarios.usuario='$id_usuario' AND videojuegos_usuarios.videojuego='$idjuegocompfav' AND videojuegos_usuarios.favorito=1");

    $row_cnt = mysqli_num_rows($querycomprobarfavorito2);}



            ?>

<form method="POST" action="#"><input type="hidden" name="submitted2" value="1">



            <tr>    

                    <td style="border-bottom:2px solid lightgrey; border-top:2px solid lightgrey;"><?php echo '<img width="110px" src="./'.$row['url_imagen'].'">';?></td>
                    <td style="border-bottom:2px solid lightgrey; border-top:2px solid lightgrey;"><?php echo $row['nombre']?></td>
                    <td style="border-bottom:2px solid lightgrey; border-top:2px solid lightgrey;"><?php echo $row['nota_profesionales']?></td>
                    <td style="border-bottom:2px solid lightgrey; border-top:2px solid lightgrey;"><?php if(isset($_SESSION['islogged']) && $_SESSION['islogged']==True){ echo'<input type="checkbox" name="favorito" value="1"'; if($row_cnt>0){echo 'checked>';}}else{echo 'Regístrate';}?></td>


               
<?php if(isset($_SESSION['islogged']) && $_SESSION['islogged']==True){echo'<td style="border-top:2px solid lightgrey; border-bottom:2px solid lightgrey;"><input type="submit" value="OK" style="color:black; width:30px; margin-left:10px;"></td>
                </tr>';}?>
<?php

echo '<input style="display:none;" readonly name="idjuego" type="text" value="'.$row['id_juego'].'"></form>';


    }     


          ?>

            
  </tbody>
</table>
</div>
</div>

</div>

<?php } ?>