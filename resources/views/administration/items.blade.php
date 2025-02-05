@extends('administrationmaster.administrationmaster')

@section('main')

<section class="first-section flx-cc">

	<div>

		<div class="flx-cc">
			<a href="administration/{{ $models }}/create">
				<button class="btn btn-primary">NEW {{ strtoupper($model) }}</button>
			</a>
		</div>

		<div class="container-90">

@foreach($Items as $Item)
	
			{!! $Item->items() !!}
		
@endforeach

		</div>

	</div>

</section>

@endsection 