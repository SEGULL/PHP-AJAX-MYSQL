<?php include '../extend/header.php'; ?>
	<div class="row">
	  <div class="col s12">
	    <div class="card">
	      <div class="card-content">
	       <span class="card-title">Alta de Usuarios</span>
	       <form class="form" action="ins_usuario.php" method="get"  enctype="multipart/form-data">
			<div class="input-field">				
		      	<input type="text" name="nick" required autofocus title="Debe de contener entre 8 a 15 caracteres, solo letras" pattern="[A-Za-z]{8,15}" id="nick" onblur="may(this.value,this.id)">
				<label for="nick">Nick:</label>
			</div>
	        <div class="validacion"></div>
			<div class="input-field">				
				      	<input type="text" name="pass1" title="Contraseña con Numeros, Letras Mayusculas y Minusculas entre 8 y 15 caracteres" pattern="[A-Za-z0-9]{8,15}"  id="pass1"  required >
				<label for="pass1">Contraseña</label>
			</div>
			<div class="input-field">				
				      	<input type="text"  title="Contraseña con Numeros, Letras Mayusculas y Minusculas entre 8 y 15 caracteres" pattern="[A-Za-z0-9]{8,15}"  id="pass2"  required >
				<label for="pass2">Verificar Contraseña</label>
			</div>

			<select name="nivel" required>
				<option value="" disabled  selected >ELIGE UN NIVEL DE USUARIO</option>
				<option value="Administrador"> ADMINISTRADOR</option>
				<option value="Asesor">ASESOR</option>
			</select>

			<div class="input-field">				
				      	<input type="text" name="nombre" title="NOMBRE DEL USUARIO"  id="nombre" 
				      	onblur="may(this.value,this.id)"
				      	required pattern="[A-Z/s]+" 
				      	>
						<label for="nombre">Nombre Completo del usuario</label>
			</div>

			<div class="input-field">				
				      	<input type="email" name="correo" title="Correo"  id="correo" >
						<label for="correo">Correo Electronico</label>
			</div>
			<div class="file-field input-field">
				<div class="btn">
					<span>Foto:</span>
					<input type="file" name="foto">
				</div>
				<div class="file-path-wrapper">
					<input class="file-path validate" type="text" >
				</div>
			</div>
			<button type="submit" id="btn_guardar" class="btn black"> Guardar
				<i class="material-icons">send</i>
			</button>
	       </form>
	      </div>      
	    </div>
	  </div>
	</div>

<?php include '../extend/scripts.php'; ?>
<script src="../js/validacion.js"></script>
</body>
</html>

