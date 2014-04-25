<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Encuesta SUPERISSSTE</title>
		<link rel="stylesheet" type="text/css" href="css/forms.css">
		<link rel="stylesheet" type="text/css" href="css/normalize.css">
		<link href='http://fonts.googleapis.com/css?family=Arimo:400,700' rel='stylesheet' type='text/css'>
	</head>
<body>
<!-- <div class="wrapper">
<style type="text/css">
 body{background-image:url('img/background.png');}
</style>	
 -->

	<header>
	</header>
	<div id="form_content">
		<figure><img src="#"></figure>
		<div id="survey_message">
		</div>
		<form name="enviar" method="POST">
			
			<div id="data_form">
				<table>
					<tr>
						<td>FECHA:</td>
					</tr>
					<tr>
						<td><input type="text" name="fecha"></td>
					</tr>
					<tr>
						<td>Nombre:</td>
					</tr>
					<tr>
						<td><input type="text" name="nombre"></td>
					</tr>
					<tr>
						<td>Unidad de Venta:</td>
					</tr>
					<tr>
						<td><input type="text" name="tienda"></td>
					</tr>
					<tr>
						<td>Ticket:</td>
					</tr>
					<tr>
						<td><input type="text" name="ticket"></td>
					</tr>

				</table>

			</div>
			<div id="questions">
				<table id="questions_tables" border=1>
					<tr><td class="td_questions"colspan=5>1. ¿La atención del ejecutivo de Mesa de Ayuda que atendió su reporte fue:?</td></tr>
					<tr>
						<td><input type="radio" name="answer1" value="Excelente">Excelente</td>
						<td><input type="radio" name="answer1" value="Bueno">Bueno</td>
						<td><input type="radio" name="answer1" value="Regular">Regular</td>
						<td><input type="radio" name="answer1" value="Malo">Malo</td>
						<td><input type="radio" name="answer1" value="Muy Malo">Muy Malo</td>
					</tr>
					<tr><td class="td_questions"colspan=5>2. ¿La solución que brindo el especialista / grupo de Asistencia fue:?</td></tr>
					<tr>
						<td><input type="radio" name="answer2" value="Excelente">Excelente</td>
						<td><input type="radio" name="answer2" value="Bueno">Bueno</td>
						<td><input type="radio" name="answer2" value="Regular">Regular</td>
						<td><input type="radio" name="answer2" value="Malo">Malo</td>
						<td><input type="radio" name="answer2" value="Muy Malo">Muy Malo</td>
					</tr>

					<tr><td class="td_questions" colspan=5>3. ¿Cómo evalúa el tiempo en que fue resuelto su ticket?</td></tr>
					<tr>
						<td><input type="radio" name="answer3" value="Excelente">Excelente</td>
						<td><input type="radio" name="answer3" value="Bueno">Bueno</td>
						<td><input type="radio" name="answer3" value="Regular">Regular</td>
						<td><input type="radio" name="answer3" value="Malo">Malo</td>
						<td><input type="radio" name="answer3" value="Muy Malo">Muy Malo</td>
					</tr>

					<tr><td class="td_questions" colspan=5>4. ¿La calidad global del servicio fue?</td></tr>
					<tr>
						<td><input type="radio" name="answer4" value="Excelente">Excelente</td>
						<td><input type="radio" name="answer4" value="Bueno">Bueno</td>
						<td><input type="radio" name="answer4" value="Regular">Regular</td>
						<td><input type="radio" name="answer4" value="Malo">Malo</td>
						<td><input type="radio" name="answer4" value="Muy Malo">Muy Malo</td>
					</tr>

					<tr><td colspan=5>5. Comentarios Adicionales?</td></tr>
					<tr>
						<td colspan=5><textarea name="comentarios" rows="5" cols="60"></textarea></td>
						
					</tr>




				</table>


			
			</div>
				<button>ENVIAR ENCUESTA</button>

		</form>

		<footer></footer>

	</div>




</body>
</html>