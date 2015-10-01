@extends('app')

@section('content')
<div class="container">

			<div class="panel panel-default">
				<div class="panel-body">
					
					@foreach( $posts as $post )

							<div class="panel panel-default">
								<div class="panel-heading">{{ $post['titulo'] }}</div>
								<div class="panel-body">{{ $post['descricao'] }}</div>
							</div>
					@endforeach

				</div>
			</div>
</div>
@endsection