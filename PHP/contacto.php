<!DOCTYPE html>
<html lang="es">
	<head>
		<title>contactanos</title>
		<style type="text/css">
		h1{font-family: kaushanscript, playball, quicksand; color: #000;}
		h2{color: #000;}
		body{background-color: #fff; background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ4XqS4WicyJ17fCh5t0q03vOkt63Rer75OZh6snvcjzOkbImp4');
		}
		p{font-size: 15px;}
		#container{
			margin:5% 10% 5% 10%;
			border: 9px solid #FCFF4B;
			background-color: #FCFF4B;
			padding: 0 10px 10px 10px; 
		}
		label{font-weight: bold;}
	</style>
	</head>
<body>
	<div id="container">
	<h1>contactanos</h1>
	<p style="text-align=justificy; font-size: 20px;">
	contactanos y descubre todos nuestros servicios, ofertas, premios, te solucionaremos inquietudes, responderemos toda duda, ademas tendremos en cuenta cada sugerencia que nos des. 
	</p>
	<form>
		<p>
			<div>
				<label>Nombre:</label>
		</div>
		<input type="text" name="nombre"/>
		</p>
		<p>
			<div>
				<label>E-mail</label>
			</div>
			<input type="text" name="email"/>
		</p>
		<p>
			<label>Deja tu comentario...</label>
		</p>
		<p>	
			<textarea name="comentario"
				cols="100" rows="10"> 
			</textarea>
		</p>
		<p>
			<input type="submit" value="enviar mensaje"/>
			<input type="reset" value="limpiar datos"/>
		</p>
	</form>
</div>
</body>
</html>