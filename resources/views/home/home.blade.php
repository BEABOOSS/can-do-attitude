@extends('master.master')

@section('main')

<section class="first-section flx-cc">

<div style="width:100vw; border:1px solid green;" class="two-cols">
	
	<div class="flx-cc">
	
@foreach($Services as $Service)
		<div>{{ $Service->service() }}</div>
@endforeach	
	</div>
	
	<div class="flx-cc">COL TWO</div>
</div>

</section>

@endsection 