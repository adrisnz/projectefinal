<!DOCTYPE html>
<html lang="ca">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?= $titol;?></title>

        <meta name="description" content="Template">
                <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>

    <link rel="stylesheet"  type="text/css" href="<?= APP_W.'pub/theme/k/css/app.css'; ?>">
    <link href='http://fonts.googleapis.com/css?family=Roboto:100|Open+Sans' rel='stylesheet' type='text/css'>
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>


            <script src="pub/theme/k/js/modernizr.custom.js"></script>




<!--SCRIPTS PARA EL DATEPICKER DE INTERNET EXPLORER-->
<!-- cdn for modernizr, if you haven't included it already -->
<script src="http://cdn.jsdelivr.net/webshim/1.12.4/extras/modernizr-custom.js"></script>
<!-- polyfiller file to detect and load polyfills -->
<script src="http://cdn.jsdelivr.net/webshim/1.12.4/polyfiller.js"></script>
<script>
  webshims.setOptions('waitReady', false);
  webshims.setOptions('forms-ext', {types: 'date'});
  webshims.polyfill('forms forms-ext');
 webshim.activeLang('es-ES');
</script>


<script>//script para hacer un append (en este caso prepend, que es parecido) del icono menú para versiones móviles
$(document).ready(function()
{

var variable=0;

variable="<?php if(isset($_SESSION['islogged']) && $_SESSION['islogged']==True){echo '0';}else{echo '1';} if(isset($_SESSION['admin']) && $_SESSION['admin']==True){ echo '2';}?>";


if(variable==0){


(function($){



        $('#menu').prepend('<button type="button" id="menutoggle" class="navtoogle" aria-hidden="true"><i aria-hidden="true" class="icon-menu"> </i> <div style="display:inline-block;">Menú</div><a class="botologin_movil" href="/projecte/panell">Panel</a><a class="botoreg_movil" href="/projecte/home/tancar">Cerrar sesión</a></button>');
      $('#menutoggle').on('click', function(e) {
        var mobileMenu = $('.js .nav ul');
        if(!$('ul').hasClass('menuClicked')) {
          mobileMenu.animate({'max-height' : '30em'}, 500),
          $('ul').addClass('menuClicked');
        }
        else{
        mobileMenu.animate({'max-height' : '0em'}, 500),
        $('ul').removeClass('menuClicked');
      }
      
      });

    })(jQuery); 

}

if(variable==1){



(function($){



        $('#menu').prepend('<button type="button" id="menutoggle" class="navtoogle" aria-hidden="true"><i aria-hidden="true" class="icon-menu"> </i> <div style="display:inline-block;">Menú</div><a class="botologin_movil" href="/projecte/login">Conectarse</a><a class="botoreg_movil" href="/projecte/reg">Registrarse</a></button>');
      $('#menutoggle').on('click', function(e) {
        var mobileMenu = $('.js .nav ul');
        if(!$('ul').hasClass('menuClicked')) {
          mobileMenu.animate({'max-height' : '30em'}, 500),
          $('ul').addClass('menuClicked');
        }
        else{
        mobileMenu.animate({'max-height' : '0em'}, 500),
        $('ul').removeClass('menuClicked');
      }
      
      });

    })(jQuery); 




}


if(variable==02){


(function($){



        $('#menu').prepend('<button type="button" id="menutoggle" class="navtoogle" aria-hidden="true"><i aria-hidden="true" class="icon-menu"> </i> <div style="display:inline-block;">Menú</div><a class="botologin_movil" href="/projecte/admin">Admin</a><a class="botoreg_movil" href="/projecte/home/tancar">Cerrar sesión</a></button>');
      $('#menutoggle').on('click', function(e) {
        var mobileMenu = $('.js .nav ul');
        if(!$('ul').hasClass('menuClicked')) {
          mobileMenu.animate({'max-height' : '30em'}, 500),
          $('ul').addClass('menuClicked');
        }
        else{
        mobileMenu.animate({'max-height' : '0em'}, 500),
        $('ul').removeClass('menuClicked');
      }
      
      });

    })(jQuery); 



}








    });

    </script>

    </head>



  <body>        
  

<header class="header-login-signup">

  <div class="header-wrap">

            <a href="<?= APP_W; ?>"><img class="logo" alt="Put your logo" src="<?= APP_W.'pub/theme/k/'.$logo;?>"/></a>

        <?php  if(isset($_SESSION['email'])){


          if($_SESSION['email']=="minimal@minimal.com")
          {
echo '<ul>
      <li id="bienvenido"><p>Bienvenido admin '.$_SESSION['email'].'</p></li>
      <li><a href="'.APP_W.'admin">Panel de admin</a></li>
      <li><a href="'.APP_W.'home/tancar">Cerrar sesión</a></li>
    </ul>';

          }else{
echo '<ul>
      <li id="bienvenido"><p>Bienvenido de nuevo '.$_SESSION['email'].'</p></li>
      <li><a href="'.APP_W.'panell">Panel de control</a></li>
      <li><a href="'.APP_W.'home/tancar">Cerrar sesión</a></li>
    </ul>';

          }

 

}else{
  echo '<ul class="logindesktop">
      <li><a href="'.APP_W.'login">Conectarse</a></li>
      <li><a href="'.APP_W.'reg">Registrarse</a></li>
    </ul>';
}

 ?>

    

  </div>

</header>

  