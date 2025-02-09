@extends('master.master')

@section('main')

<section class="first-section flx-cc">

	<div class="container-80">

		<div>
@foreach($Books as $Book)
			<div class="book">
				<div>{{ $Book->name }}</div>
				<div>{{ $Book->Level->level }}</div>
			</div>
@endforeach
		</div>

	</div>

</section>

@endsection 