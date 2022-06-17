function confirmacion(e){
	if (confirm("¿Está seguro que desea elimnar este registro?")){
		return true;
	} else {
		e.preventDefault();
	}
}

let conexionDelete = document.querySelectorAll(".table_item_conexion");

for (var i = 0; i < conexionDelete.length; i++) {
	conexionDelete[i].addEventListener('click', confirmacion);
}