@extends('administrationmaster.administrationmaster')

@section('main')

<input type="hidden" name="model" value="{{ $model }}">

@if($model == 'customer' )

<form id="set-customer-id-form" action="set-customer-id" method="POST">
	@csrf
	<input type="hidden" name="id">
</form>

@endif



<section class="first-section flx-cc">

	<div class="container-90">

		<div class="flx-cc mb-40">
			<a href="administration/{{ $models }}/create">
				<button class="btn btn-primary">NEW {{ strtoupper($model) }}</button>
			</a>
		</div>

		<div>
			<div>
@foreach($Items as $Item)
				<div class="item">{!! $Item->items() !!}</div>
@endforeach
			</div>
		</div>

	</div>

</section>

<script src="/js/items.js"></script>

@endsection
