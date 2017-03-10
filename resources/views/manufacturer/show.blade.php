@extends('layouts.new')

@section('content')

<h1>{{$manufacturer->title}}</h1>

<img src="{{$manufacturer->image_url}}" alt="" width="500px" class="img-responsive">
<ul>
	<li>{{$manufacturer->website_url}}</li>
	<li>{{$manufacturer->country}}</li>
</ul>

<a href="{{ route('manufacturers.edit', $manufacturer->id) }}" class="btn btn-primary">Edit</a>

@endsection