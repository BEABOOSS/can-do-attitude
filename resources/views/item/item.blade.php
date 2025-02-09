@extends('master.master')

@section('main')

<section class="first-section flx-cc">

	<div class="container-80">

		<div>
@foreach($Items as $Item)
			<div class="item">
				{{ $Item->title }}
			</div>
@endforeach
		</div>

	</div>

</section>

@endsection 