@extends('administrationmaster.administrationmaster')

@section('main')

<section class="first-section flx-cc">

	<div class="container-80">

		<div class="flx-cc">
			<a href="administration/{{ $models }}/create">
				<button class="btn btn-primary">NEW {{ strtoupper($model) }}</button>
			</a>
		</div>

		<div>
@foreach($Items as $Item)
			<div class="item">{!! $Item->items() !!}</div>
@endforeach
		</div>

	</div>

</section>

@endsection 