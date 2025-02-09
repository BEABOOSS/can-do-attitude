@extends('master.master')

@section('main')

<section class="first-section flx-cc">

	<div class="container-80">

		<div>			
@foreach($Books as $Book)
			<div class="item">
				{{$Book->name}}

				{{ $Level->level }}
			</div>
@endforeach
		</div>

	</div>

</section>

@endsection 