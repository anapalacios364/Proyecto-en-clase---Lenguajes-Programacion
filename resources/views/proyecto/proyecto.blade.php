<html>
	<body>
		<h1>Hello</h1>

		@foreach ($proyecto as $proyecto)
			<li>{{$proyecto->nombreProducto}}</li>
		@endforeach

	</body>
</html>