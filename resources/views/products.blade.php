

@extends('layouts.new')

@section('content')
	<h2>Produktu sarasas</h2>
	<div class="row">
	@foreach ($list as $products)
		<div class="col-sm-6 col-md-4">
			<div class="thumbnail">
				<img src="https://cdn.arstechnica.net/wp-content/uploads/2016/02/5718897981_10faa45ac3_b-640x624.jpg">
					<div class="caption">
						<h3>{{ $products->title }}</h3>
						<p>{{$products->description }}</p>
						<p>Kiekis: {{$products->quantity}}
							Aprasymas: {{$products->description}}</p>
					</div>
			</div>
		</div>
	</div>
	@endforeach

@endsection