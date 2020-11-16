var formulario = document.getElementsByName("formulario")[0],
elementos = formulario.elements,
boton = document.getElementById("boton");

var usuario= formulario.usuario.value;
var contraseña = formulario.contraseña.value;


var validarNombre = function(e){
var usuario= formulario.usuario.value;
	if (usuario == "") {
		Swal.fire({
			icon: 'error',
			title: 'Acceso denegado',
			text: 'Debe ingresar un usuario, el campo no puede estar vacio.',
		});
	document.getElementById('usuario').focus();
	e.preventDefault(); 
	}
};

var validarPassword = function(e){
var contraseña = formulario.contraseña.value;
	if (contraseña == "") {
		Swal.fire({
			icon: 'error',
			title: 'Acceso denegado',
			text: 'Debe ingresar una contraseña, el campo no puede estar vacio.',
		});
	document.getElementById('contraseña').focus();
	e.preventDefault(); 
	} 
};

var validarUsuario = function(usuario, contraseña){
var usuario= formulario.usuario.value;
var contraseña = formulario.contraseña.value;
	if ((usuario == "administrador" && contraseña == "12345") || (usuario == "cliente" && contraseña == "12345") ){
        validarIngreso();
	} 
	else{
		Swal.fire({
			icon: 'error',
			title: 'Acceso denegado',
			text: 'El usuario y contraseña ingresados no se encuentran registrados.',
		});
	}	
};

var validarIngreso = function(){
var usuario= formulario.usuario.value;
	switch(usuario){
        case 'administrador':
            window.location.href = './admin/inicio.html';
		break;
				
		case 'cliente':
			window.location.href = './cliente/inicio.html';
		break;
	}		
};

var validar = function(e){
    validarNombre(e);
	validarPassword(e);
	validarUsuario();
	e.preventDefault();
		
};

formulario.addEventListener("submit", validar);