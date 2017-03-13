@extends('layouts.new')

@section('content')


	<h1>{{ $category->title }}</h1>
	<a href="{{route('categories.edit', ['id'=>$category->id])}}">EDIT</a>
	<div class="row">
	@foreach ($category->products as $products)
		<div class="col-md-4 col-sm-6 ">
			<div class="thumbnail">
				<img src="{{ $products->image_url }}" alt="{{ $products->title }}">
					<div class="caption">
						<h3>{{ $products->title }}</h3>
						<p>{{$products->description }}</p>
						<p>Kiekis: {{$products->quantity}}<br>
							Aprasymas: {{$products->description}}</p>

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

