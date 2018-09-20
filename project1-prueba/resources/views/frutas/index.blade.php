<h1>listado de frutas</h1>
<a href="{{ route('naranjitas') }}">Ir a naranjas</a>
<a href="{{ action('FrutasController@getPeras') }}">Ir a Peras</a>

<ul>
	@foreach($frutas as $fruta)
	<li>{{ $fruta }}</li>
	@endforeach
</ul>

<h1>formulario</h1>

<form action="{{ url('/recibir') }}" method="POST">
	<p>
		<label for="nombre">Nombre de la fruta:</label>
		<input type="text" name="nombre"/>
	</p>
	<p>
		<label for="descripcion">Descripcion de la fruta:</label>
		<textarea type="text" name="descripcion"></textarea>

		<input type="submit" value="enviar"/>
	</p>
</form>