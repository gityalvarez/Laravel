<!DOCTYPE html>
<html>
<head>
	<title>Laravel</title>
</head>
<body>
	<h2>Notas de la Base de Datos</h2>
	<ul>
		@foreach ($notes as $note)
			<li>
				{{$note->notes}}
			</li>
		@endforeach
	</ul>	
</body>
</html>