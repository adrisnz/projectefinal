
 


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




<div style="background-color:white; margin-top:-170px; width:100%; text-align:center;">



  <h1>Resetear contraseña</h1>

<p>Es imposible recuperar el password perdido. Podéis pedir uno nuevo introduciendo aquí vuestro correo electrónico. Recibiréis un correo con
el enlace para poder cambiar vuestro password</p> 

<form action="<?php echo APP_W;?>recover/recover" method="POST">
  <p><input type="text" id="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="Email" required></p>

  <input type="hidden" name="submitted" value="1">
  <input type="submit" id="trametre" value="ENVIAR">
</form>




</div>
