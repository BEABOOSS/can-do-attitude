@extends('master.master')

@section('main')

<section class="first-section flx-cc">

	<div class="container-80">

		<div>
@foreach($Levels as $Level)
			<div class="level">
				<div>{{ $Level->level }}</div>
				<div>
					<a href="level/books/{{ $Level->id }}">
						<button class="btn btn-primary">books</button>
					</a>
				</div>

			</div>
@endforeach
		</div>

	</div>

</section>

@endsection 