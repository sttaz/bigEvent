@extends('master')

@section('header')
    

<header>
	<div class="row header">
		<div id="logo" class="col-xs-6 logo">
      	<img src="{{asset('img-header/BigEventlogo.png')}}" width="100px" height="100px">
   		</div>
      <div class="col-xs-6">
   	      <ul class="item-header">
   	         <li><a href="index.jsp" >Inicio</a></li>
   	         <li><a href="">Registrarse</a></li>
   	         <ul class="item-hidden">
   	            <li><a href="RegistrarPropietario.jsp">Propietario</a></li>
   	            <li id="usu"><a href="RegistrarCliente.jsp">Usuario</a></li>
   	         </ul>
   	         <li id="inisesion"><a href="#popup" class="popup-link" >Inicio Sesión</a></li>
   	      </ul>

      </div>
	</div>
   
   <!--<div class="modal-wrapper" id="popup" class="popup">
      <div class="popup-contenedor" id="form-olvidado">
         <form method="POST" action="ingreso">
            <a class="popup-cerrar" href="#">X</a>
            <div class="login-wrap">
               <div class="login-html">
                  <center> <img src="imag/BigEventlogo2.png" width="100px" height="100px" ></center>
                  <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab"></label>
                  <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
                  <div class="login-form">
                     <div class="sign-in-htm">
                        <div class="group">
                           <input id="user" type="text"  name="Correo" class="input" placeholder="Correo">
                        </div>
                        <div class="group">
                           <input id="pass" type="password" name="Clave" class="input" data-type="password" placeholder="Contraseña">
                        </div>
                        <div class="group">
                           <input type="submit" class="button" name="btnlog" value="Iniciar Sesión">
                        </div>
                        <br>
                        <div class="foot-lnk">
                           <a href="RecuperarContra.jsp" id="olvidado">¿Olvidaste tu Contraseña?</a>
                        </div>
                        <br>                               
                     </div>
                     <div class="sign-up-htm">
                        <div class="group">
                           <label for="user" class="label">Username</label>
                           <input id="user" type="text" class="input">
                        </div>
                        <div class="group">
                           <label for="pass" class="label">Password</label>
                           <input id="pass" type="password" class="input" data-type="password">
                        </div>
                        <div class="group">
                           <label for="pass" class="label">Repeat Password</label>
                           <input id="pass" type="password" class="input" data-type="password">
                        </div>
                        <div class="group">
                           <label for="pass" class="label">Email Address</label>
                           <input id="pass" type="text" class="input">
                        </div>
                        <div class="group">
                           <input type="submit" class="button" value="Sign Up">
                        </div>
                        <div class="hr"></div>
                        <div class="foot-lnk">
                           <label for="tab-1">Already Member?</label>
                        </div>
               		  </div>
            		</div>
           	    </div>
           	</div>
          </form>
      </div>
  	 	<div class="modal-wrapper" id="popup1" class="popup1" >
	      <div class="popup1-contenedor">
	         <a class="popup1-cerrar" href="#">X</a>
	      </div>
   		</div>!-->
   	</div>
</header>
@endsection

@section('scripts')
@endsection