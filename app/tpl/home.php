<?php
ob_start();



if(isset($_POST['submitted']) || isset($_POST['submitted2']))

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






if(isset($_POST['submitted'])) 
{


$notanueva=$_POST['nota_usuarios'];



$idjuego=$_POST['idjuego'];


$idusuario=$_SESSION['idusuario'];


  
   
$query ="UPDATE videojuegos_usuarios SET nota='$notanueva', favorito='$favorito' WHERE videojuegos_usuarios.usuario='$idusuario' AND videojuegos_usuarios.videojuego='$idjuego'"; 


}



if(isset($_POST['submitted3'])) 
{


$notanueva=$_POST['nota_usuarios'];



$idjuego=$_POST['idjuego'];


$idusuario=$_SESSION['idusuario'];

$query ="UPDATE videojuegos_usuarios SET nota='$notanueva', favorito='$favorito' WHERE videojuegos_usuarios.usuario='$idusuario' AND videojuegos_usuarios.videojuego='$idjuego'"; 

}






if(isset($_POST['submitted2']))
{



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
}




if($connect->query($query)){
echo '<script>location.href="'.APP_W.'home"</script>';

}else{

}


}else{

?>


<!--
<ul style="display:inline;">
<a style="text-decoration:none;" href="<?= APP_W.''?>">PC</a></li>
<li style="display:inline; margin-left:10%;"><a style="text-decoration:none;" href="<?= APP_W.'reg'?>">PS4</a></li>
<li style="display:inline; margin-left:10%;"><a style="text-decoration:none;" href="<?= APP_W.'mapa'?>">Xbox One</a></li>
<li style="display:inline; margin-left:10%;"><a style="text-decoration:none;" href="<?= APP_W.'mapa'?>">Wii U</a></li>


</ul>

-->



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




<div style="width:100%; text-align:center;"><h1>Inicio</h1></div>

   
<section class="home">

<!--<div style="text-align:center; margin-left:-60px;">
<h1>ÚLTIMOS LANZAMIENTOS</h1>
<div class="w_img">
<img data-src="pub/theme/k/img/videojuegos/fallout4.jpg" src="pub/theme/k/img/videojuegos/fallout4.jpg" />
       <img data-src="pub/theme/k/img/videojuegos/witcher3-xbox.jpg" src="pub/theme/k/img/videojuegos/witcher3-xbox.jpg" />
       <img data-src="pub/theme/k/img/videojuegos/bloodborne.jpg" src="pub/theme/k/img/videojuegos/bloodborne.jpg" />
          
</div>
</div>-->

<div class="wr_tabla1" style="margin-left:120px">
<p style="margin-top:60px;">TOP 5 PROFESIONALES</p>
<div style="display:inline-flex;">
<table class="tabla_home">
<thead>
  <tr>
    <th>Imagen</th>
    <th>Juego</th>
    <th>Nota Profesionales</th> 
    <th>Plataforma</th> 

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

         



    $queryTopProfesionales = mysqli_query($connect, "SELECT videojuegos.nombre, videojuegos.url_imagen, videojuegos.nota_profesionales, plataformas.nombre AS p_nombre FROM videojuegos INNER JOIN plataformas on videojuegos.plataforma = plataformas.id_plataforma ORDER BY videojuegos.nota_profesionales DESC LIMIT 5 ");





  while($row = mysqli_fetch_array($queryTopProfesionales)) {


            ?>




            <tr>    

                    <td style="border-bottom:2px solid lightgrey; border-top:2px solid lightgrey;"><?php echo '<img alt="imagen del juego" width="90" src="./'.$row['url_imagen'].'">';?></td>
                    <td style="border-bottom:2px solid lightgrey; border-top:2px solid lightgrey;"><?php echo $row['nombre']?></td>
                    <td style="border-bottom:2px solid lightgrey; border-top:2px solid lightgrey;"><?php echo $row['nota_profesionales']?></td>
                    <td style="border-bottom:2px solid lightgrey; border-top:2px solid lightgrey;"><?php echo $row['p_nombre']?></td>


                </tr>
<?php
    }     


          ?>

            
  </tbody>
</table>
</div>
</div>
<!-- AJAX - que debería de ir pero no llegué a hacer funcionar, cosas del framework, así que la alternativa es usar form y post
<script type="text/javascript">
$(document).ready(function() {
  $('#list').change(function() {
var selected=$(this).val();


$.ajax
({
type: "POST",
url: "./ajax.php",
data: {notanueva: selected},
cache: false,
success: function(html)
{

$("#ff").html(html);
} 
});


});
});
</script>
-->


<div class="wr_tabla2" <?php if(isset($_SESSION['islogged']) && $_SESSION['islogged']==True){echo'style="margin-left:400px;"';}else{echo 'style="display:none !important; "';}?>>

<p style="margin-top:60px;">TUS FAVORITOS</p>
<div style="display:inline-flex;">
<table class="tabla_home" id="purpura">
<thead>
  <tr>
    <th>Imagen</th>
    <th>Juego</th>
    <th>Tu nota</th> 
    <th>Plataforma</th> 
   <?php if(isset($_SESSION['islogged']) && $_SESSION['islogged']==True){echo'<th>Favorito</th>';}?> 
   <?php if(isset($_SESSION['islogged']) && $_SESSION['islogged']==True){echo'<th>GUARDAR</th>';}?> 

  </tr>
  </thead>
  <tbody>
   
<?php if(isset($_SESSION['islogged'])){


 $email=$_SESSION['email'];
   
$idusuario = "SELECT usuarios.id_usuario FROM usuarios WHERE email='$email'" or die("Error in the consult.." . mysqli_error($connect)); 
$result = $connect->query($idusuario); 

$row2 = mysqli_fetch_array($result);

$id_usuario = $row2['id_usuario'];




    $queryTopUsuarios = mysqli_query($connect, "SELECT videojuegos_usuarios.usuario, videojuegos.url_imagen, videojuegos.nombre, videojuegos_usuarios.nota, videojuegos_usuarios.videojuego, videojuegos_usuarios.favorito, plataformas.nombre AS p_nombre FROM videojuegos INNER JOIN plataformas on videojuegos.plataforma = plataformas.id_plataforma INNER JOIN videojuegos_usuarios on videojuegos_usuarios.videojuego = videojuegos.id_juego WHERE videojuegos_usuarios.usuario='$id_usuario' AND videojuegos_usuarios.favorito = 1 ORDER BY videojuegos_usuarios.nota DESC LIMIT 5 ");




  while($row = mysqli_fetch_array($queryTopUsuarios)) {


            




            echo'<tr>
                    <td style="border-bottom:2px solid lightgrey; border-top:2px solid lightgrey;"><img alt="imagen del juego" width="90" src="./'.$row["url_imagen"].'"></td>
                    <td style="border-bottom:2px solid lightgrey; border-top:2px solid lightgrey;">';echo $row['nombre'].'</td>
                    <td style="border-bottom:2px solid lightgrey; border-top:2px solid lightgrey;">





<form method="POST" action="#"><input type="hidden" name="submitted" value="1"><select id="list" name="nota_usuarios">

      <option value="Puntuar"'.(($row['nota']=='Puntuar')?'selected="selected"':"").'>Puntuar</option>
      <option value="10"'.(($row['nota']=='10')?'selected="selected"':"").'>10</option>
      <option value="9"'.(($row['nota']=='9')?'selected="selected"':"").'>9</option>
      <option value="8"'.(($row['nota']=='8')?'selected="selected"':"").'>8</option>
      <option value="7"'.(($row['nota']=='7')?'selected="selected"':"").'>7</option>
      <option value="6"'.(($row['nota']=='6')?'selected="selected"':"").'>6</option>
      <option value="5"'.(($row['nota']=='5')?'selected="selected"':"").'>5</option>
      <option value="4"'.(($row['nota']=='4')?'selected="selected"':"").'>4</option>
      <option value="3"'.(($row['nota']=='3')?'selected="selected"':"").'>3</option>
      <option value="2"'.(($row['nota']=='2')?'selected="selected"':"").'>2</option>
      <option value="1"'.(($row['nota']=='1')?'selected="selected"':"").'>1</option>
      <option value="0"'.(($row['nota']=='0')?'selected="selected"':"").'>0</option>

    </select>
                   </td>
                    <td style="border-bottom:2px solid lightgrey; border-top:2px solid lightgrey;">'; echo $row['p_nombre'].'</td>

                     <td style="border-bottom:2px solid lightgrey; border-top:2px solid lightgrey;"><input type="checkbox" name="favorito" value="1"'; if($row['favorito']==1){echo 'checked';} echo '></td>

   <td style="border-top:2px solid lightgrey; border-bottom:2px solid lightgrey;"><input type="submit" value="OK" style="color:black; width:30px; margin-left:10px;"> </td>


                </tr>';
echo '<input style="display:none;" readonly name="idjuego" type="text" value="'.$row['videojuego'].'"></form>';

                 }


    
 }else{


            echo '<tr>
                    <td style="border-bottom:2px solid lightgrey; border-top:2px solid lightgrey;"><a href="/projecte/reg/">Regístrate</a></td>
                    <td style="border-bottom:2px solid lightgrey; border-top:2px solid lightgrey;"><a href="/projecte/reg/">Regístrate</a></td>
                    <td style="border-bottom:2px solid lightgrey; border-top:2px solid lightgrey;"><a href="/projecte/reg/">Regístrate</a></td>
                    <td style="border-bottom:2px solid lightgrey; border-top:2px solid lightgrey;"><a href="/projecte/reg/">Regístrate</a></td></tr>
                    ';
}


   ?>
          

            
  </tbody>
</table>
</div>
</div>

<?php if(isset($_SESSION['islogged']) && $_SESSION['islogged']==True){echo'<br/><br/>';}?>



<div class="wr_tabla3" style="margin-left:400px"<?php if(isset($_SESSION['islogged']) && $_SESSION['islogged']==True){echo'style="margin-left:9%"';}?>>
<p class="titulo_tabla">ÚLTIMOS LANZAMIENTOS</p>
<div class="inside-flex">
<table class="tabla_home" id="blava">
<thead>
  <tr>
    <th>Imagen</th>
    <th>Juego</th>
    <th>Nota Profesionales</th> 
    <th>Plataforma</th> 
    <th>Fecha lanzamiento</th> 
    <th>Favorito</th> 
   <?php if(isset($_SESSION['islogged']) && $_SESSION['islogged']==True){echo'<th>GUARDAR</th>';}?> 
  </tr>
  </thead>
  <tbody>
<?php 
        
       



    $queryNovedades = mysqli_query($connect, "SELECT videojuegos.nombre, videojuegos.url_imagen, videojuegos.id_juego, videojuegos.nota_profesionales, videojuegos.fecha, plataformas.nombre AS p_nombre FROM videojuegos INNER JOIN plataformas on videojuegos.plataforma = plataformas.id_plataforma WHERE videojuegos.fecha>'2015-01-01' ORDER BY videojuegos.nota_profesionales DESC, videojuegos.fecha DESC LIMIT 5 ");





  while($row = mysqli_fetch_array($queryNovedades)) {

if(isset($_SESSION['islogged']) && $_SESSION['islogged']==True){


$idjuegocompfav=$row['id_juego'];
    $querycomprobarfavorito = mysqli_query($connect, "SELECT videojuegos_usuarios.favorito FROM videojuegos_usuarios WHERE videojuegos_usuarios.usuario='$id_usuario' AND videojuegos_usuarios.videojuego='$idjuegocompfav'");
   
    $querycomprobarfavorito2 = mysqli_query($connect, "SELECT videojuegos_usuarios.favorito FROM videojuegos_usuarios WHERE videojuegos_usuarios.usuario='$id_usuario' AND videojuegos_usuarios.videojuego='$idjuegocompfav' AND videojuegos_usuarios.favorito=1");

    $row_cnt = mysqli_num_rows($querycomprobarfavorito2);}

            ?>



<form method="POST" action="#"><input type="hidden" name="submitted2" value="1">

            <tr>
                    <td style="border-bottom:2px solid lightgrey; border-top:2px solid lightgrey;"><?php echo '<img alt="imagen del juego" width="90" src="./'.$row['url_imagen'].'">';?></td>
                    <td style="border-bottom:2px solid lightgrey; border-top:2px solid lightgrey;"><?php echo $row['nombre']?></td>
                    <td style="border-bottom:2px solid lightgrey; border-top:2px solid lightgrey;"><?php echo $row['nota_profesionales']?></td>
                    <td style="border-bottom:2px solid lightgrey; border-top:2px solid lightgrey;"><?php echo $row['p_nombre']?></td>
                    <td style="border-bottom:2px solid lightgrey; border-top:2px solid lightgrey;"><?php echo date("d-m-Y",strtotime($row['fecha']))?></td>
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






<?php } ?>
