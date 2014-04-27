<?php

$link = mysql_connect('localhost', 'root', '*mayuda01*')
or die('No se pudo conectar: ' . mysql_error());

mysql_select_db('encuesta') or die('No se pudo seleccionar la base de datos'); 

date_default_timezone_set("America/Mexico_City");

$query = "INSERT INTO survey(id,nombre,fecha,tienda,ticket,q1,q2,q3,q4,q5)
	
		 values('$_POST[nombre]','$_POST[fecha]','$_POST[tienda]','$_POST[ticket]',
		 		'$_POST[q1]','$_POST[q2]','$_POST[q3]','$_POST[q3]','$_POST[q4]','$_POST[q5]')";
$result = mysql_query($query);


if (! $result){

	echo "La consulta SQL contiene errores.".mysql_error();

	exit();

}else {

	

}

?>

	<script type="text/javascript">
	
		
	alert("REPORTE REGISTRADO CORRECTAMENTE")
	window.location="http://192.163.161.137/call-manager/llamadas.php"
	
	</script>
