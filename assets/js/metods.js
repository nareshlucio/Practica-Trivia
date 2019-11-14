var intentos;
function intentar(valor){
	if(intentos == 3)
		html("<meta http-equiv='Refresh' content='0.5;URL=../Vista/Pregunta-1.php'>");
	if(valor == "Error"){
		intentos++;
	}

}