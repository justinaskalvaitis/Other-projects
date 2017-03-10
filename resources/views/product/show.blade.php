@extends('layouts.new')

@section('content')

<h1>{{$product->title}}</h1>

<img src="{{$product->image_url}}" alt="" width="500px" class="img-responsive">
<p>{{$product->description}}</p>
<ul>
	<li>{{$product->price}}</li>
	<li>{{$product->quantity}}</li>
	<li>{{$product->category->title}}</li>
	<li>{{$product->manufacturer->title}}</li>
</ul>

<a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary">Edit</a>

@endsection