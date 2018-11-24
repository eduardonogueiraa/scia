<!DOCTYPE html>
<html>
<head>
	<title>Post</title>
</head>
<body>

	<form method="POST" action="{{route('postagem.salvar')}}">
		{{ csrf_field() }}

		<label>Tema</label>
		<input type="text" name="tema">
		<br>
		<label> Disciplina </label>
			<select name="id_disciplina">
			@foreach ($disciplinas as $disciplina)
				<option value="{{$disciplina['id']}}">
					{{$disciplina['nome']}}
				</option>
			@endforeach
		</select>
		<br>
		<label>Descrição</label>
		<input type="text" name="descricao">
		
		<br>
		<button type="submit">Enviar</button>
	</form>

</body>
</html>