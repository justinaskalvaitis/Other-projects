

@extends('layouts.new')

@section('content')
	<h2>Produktu sarasas</h2>
	<div class="row">
	@foreach ($list as $products)
		<div class="col-md-4 col-sm-6 ">
			<div class="thumbnail">
				<img src="{{ $products->image_url }}" alt="{{ $products->title }}">
					<div class="caption">
						<h3>{{ $products->title }}</h3>
						<p>{{$products->description }}</p>
						<p>Kiekis: {{$products->quantity}}
							Aprasymas: {{$products->description}}</p>
							Kaina: {{$products->price}}

						<p>
						@if ($products->category)
		                <strong>Kategorija:</strong> {{ $products->category->title }}
						@endif
		                @if ($products->manufacturer)
		                     <br/>
		                     <strong>Gamintojas:</strong> {{ $products->manufacturer->title }}
		                 @endif
            			</p>
					</div>
			</div>
		</div>
	@endforeach
	</div>
@endsection