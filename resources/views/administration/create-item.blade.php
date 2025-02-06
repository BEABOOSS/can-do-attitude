@extends('administrationmaster.administrationmaster')

@section('main')

<section class="first-section flx-cc">



	<form class="container-40" method="POST" action="administration/{{ $models }}">
		@csrf


@foreach($Fields as $name => $info)
		
		{!! App\Models\Field::createField($name, $info) !!}
@endforeach

		<div class="flx-cc"><button class="btn btn-primary">{{ strtoupper($title) }}</button></div>

	</form>

</section>

@endsection 