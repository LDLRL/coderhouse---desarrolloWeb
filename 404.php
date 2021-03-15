<!DOCTYPE html>
<html lang="es">
<head>

	<meta charset="UTF-8">
	<title>Pagina no encontrada</title>
	<style>
		
#oops {
	display: grid;
	align-items: center;
	grid-template-rows: auto auto;
	grid-template-areas: 
	"imgOops"
	"oops2";
	margin: 1% 0 1% 0;

	.imgOops {
		grid-area: imgOops;
		margin: 0 auto 0 auto;
		padding: 0 2em;
	}	
}

#oops2 {
	grid-gap: oops2;
	text-align: center;
	font-family: $fuenteTexto; 	
	margin: 0 auto 0 auto;
	padding: .5em 2em;
}
	#oops2 h4 {
		color:$colApoyo2;
		font-size: $fuenteTamH4;
		font-weight: 600;
	}

	#oops2 a {
		text-decoration: none;
		color:$colApoyo3;
		font-size: $fuenteExtrag;
		text-shadow: 0 1px 1px rgba(0,0,0,0.1);
		font-weight: 600;		 
	}

	</style>
	
	
</head>

<body>

	<main>
		<div id="oops">

			<a href="./index.html" class="imgOops"><img  src="./img/oops.jpg" alt="Página no encontrada, Imagen para redirigir a página de Inicio"></a>	

			<div id="oops2">
				<h4> Lo sentimos, no podemos encontrar la Página que buscas.</h4>
				<a href="./index.html">Ir a la página Inicio</a>
			</div> 
			
			
		</div>


	</main>


	</body>


</html>

