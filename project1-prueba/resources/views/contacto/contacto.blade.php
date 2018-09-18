<h1>Get variable</h1>
<p>{{ $nombre }}</p>

<p>
	<?PHP $numero=2; ?>
	Tabla del {{ $numero }}
</p>


{{--FOR--}}
<h1>FOR</h1>
<p>
@for($i=1; $i<=10; $i++)
	{{ $numero . ' x ' . $i . ' = ' . ($i*$numero) }} <br/>
@endfor
</p>


{{--WHILE--}}
<h1>WHILE</h1>
<p>
<?PHP $j = 1; ?>
@while( $j<=7 )
	<?PHP $j++ ?>
	{{ 'Hola Mundo ' . $j }} <br/>
@endwhile
</p>


{{--FOR EACH--}}
<h1>FOR EACH</h1>
<p>
@foreach($frutas as $fruta)
	{{ $fruta }} <br/>
@endforeach
</p>