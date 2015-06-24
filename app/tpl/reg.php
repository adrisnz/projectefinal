<?php
ob_start();
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

    
<script type="text/javascript">
function checkPasswordMatch() {
    var password = $("#password").val();
    var confirmPassword = $("#txtConfirmPassword").val();

    if (password != confirmPassword)
    {


        $("#divCheckPasswordMatch").html("Las contraseñas no coinciden.");
        $("#submit").attr("disabled", "disabled");
    }

    else{
        $("#divCheckPasswordMatch").html("Las contraseñas coinciden.");

  $("#submit").removeAttr("disabled");

    }
}

$(document).ready(function () {
   $("#txtConfirmPassword").keyup(checkPasswordMatch);
}



);


</script>

<div style="width:100%; text-align:center;"><h1>Registro</h1></div>



 <?php  if(isset($_SESSION['email'])){ //si algú està loguejat, no el deixarà crear un compte


                  echo 'No es permet crear més dun compte';


                }else{


  echo '
<form id="form" name="formregister" method="post" action="'.APP_W.'home/reg">
  <div id="block" style="height:165px; margin-top:60px;">
    <label id="user" for="name">p</label>
    <input type="text" name="email" id="name" placeholder="email" required/>
    <label id="pass" for="password">k</label>
    <input type="password" name="password" id="password" placeholder="Contraseña" required />
    <label id="pass" for="password">k</label>
    <input type="password" name="verpassword" placeholder="Confirmar Contraseña" id="txtConfirmPassword" onChange="checkPasswordMatch();" />
        <input style="font-family:Arial !important; font-size:0.9em; margin-top: -110px;" type="submit" id="submit" name="submit" value="Registrarse"/>
             <div class="confirmar_pass" id="divCheckPasswordMatch"></div>

</div>
</form>
<div id="option"> 
    <a class="btn-recordar"  href="'.APP_W.'login">¿Ya tienes cuenta? Conéctate</a>
</div>


';

}?>
