<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
	<title>PDF Generado</title>
	<meta name="generator" content="LibreOffice 7.6.7.2 (Linux)"/>
	<meta name="author" content="DULCE M.H"/>
	<meta name="created" content="2024-09-18T23:27:00"/>
	<meta name="changedby" content="DULCE M.H"/>
	<meta name="changed" content="2024-09-19T00:23:00"/>
	<meta name="AppVersion" content="16.0000"/>
	<style type="text/css">
		@page { size: 8.5in 14in; margin-left: 10%; margin-right:10%; margin-top: 1%; margin-bottom: 1%; }
		body { font-family: 'Calibri', serif; }
		table { width: 100%; border-collapse: collapse; } /* Reducir el ancho de las tablas */
		td, th { border: 1px solid #000; padding: 5px; } /* Reducir el padding para tablas más compactas */
		.text-right { text-align: right; }
		.text-center { text-align: center; }
		.text-left { text-align: left; }
		.title { font-size: 16pt; font-weight: bold; }
		.subtitle { font-size: 10pt; font-weight: bold; margin-top: 10px; }
		.small-table { width: 200px; float: right; margin-bottom: -2px; } /* Tabla más pequeña y alineada a la derecha */
		.clear-both { clear: right; } /* Limpia el float derecho para la siguiente sección */
		.same-size { height: 13px; } /* Hacer que las celdas vacías tengan la misma altura que las celdas llenas */
	</style>
</head>
<body lang="es-MX">

<!-- Contenedor principal para centrar el contenido -->
<div style="width: 100%; margin: 0 auto;">

	<!-- Título -->
	<p class="title">
		Fortalecimiento y ampliación de la capacidad de recepción y distribución de composta a productores del Suelo de Conservación
	</p>

	<!-- Subtítulo SOLICITUD DE COMPOSTA directamente debajo del título -->
	<p class="subtitle">SOLICITUD DE COMPOSTA</p>

	<!-- Tabla alineada a la derecha -->
	<table class="small-table" cellpadding="5" cellspacing="0">
		<tr>
			<td class="text-left"><b>Folio:</b></td>
		</tr>
		<tr>
			<td class="same-size"></td> <!-- Celda vacía con misma altura -->
		</tr>
		<tr>
			<td class="text-left"><b>CAC_DCPS_</b></td>
		</tr>
		<tr>
			<td class="same-size"></td> <!-- Celda vacía con misma altura -->
		</tr>
	</table>

	<!-- Limpieza del float para la siguiente sección -->
	<div class="clear-both"></div>

	<!-- Información del productor -->
	<table cellpadding="5" cellspacing="0">
		<tr>
			<td colspan="6" class="text-left"><b>Datos Generales del Productor Solicitante:</b></td>
		</tr>
		<tr>
			<td>1</td>
			<td colspan="5">Nombre completo del productor (a): {{ $composta->nombre_productor }}</td>
		</tr>
		<tr>
			<td>2</td>
			<td colspan="5">Teléfono celular del productor (a): {{ $composta->telefono_celular }}</td>
		</tr>
		<tr>
			<td>3</td>
			<td colspan="5">Teléfono fijo (casa o trabajo) del productor (a): {{ $composta->telefono }}</td>
		</tr>
		<tr>
			<td>4</td>
			<td>Fecha de nacimiento: {{ $composta->fecha_nacimiento }}</td>
			<td>Sexo: {{ $composta->sexo }}</td>
			<td colspan="3">Sección electoral: {{ $composta->seccionElectoral }}</td>
		</tr>
		<!-- Domicilio Del Productor  -->
		<tr>
			<td colspan="6" class="text-left"><b>Domicilio del Productor:</b></td>
		</tr>
		<tr>
			<td>5</td>
			<td>Alcaldia: {{ $composta->fecha_nacimiento }}</td>
			<td colspan="4">Pueblo: {{ $composta->seccionElectoral }}</td>
		</tr>
		<tr>
			<td>6</td>
			<td>Colonia o Barrio: {{ $composta->fecha_nacimiento }}</td>
			<td colspan="4">Codigo Postal: {{ $composta->seccionElectoral }}</td>
		</tr>

	</table>

</div>

</body>
</html>
