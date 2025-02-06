@extends('administrationmaster.administrationmaster')

@section('main')

<section class="first-section flx-cc">




		<form class="container-90" method="post" action="administration/{{ $models }}/{{ $Item->id }}">
			@csrf
			<input type="hidden" name="id" value="{{ $Item->id }}">
			{!! method_field('PUT')!!}

@foreach($Fields as $FieldName => $FieldInfo)
	
			{!! App\Models\Field::createField($FieldName, $FieldInfo, $Item->$FieldName ) !!}
		
@endforeach

			<div class="flx-cc"><button class="btn btn-primary">UPDATE</button></div>
		</form>


</section>

@endsection 