@extends('layouts.new')

@section('content')

<h1>{{$manufacturer->title}}</h1>

<ul>
	<li>{{$manufacturer->website_url}}</li>
	<li>{{$manufacturer->country}}</li>
</ul>

<a href="{{ route('manufacturers.edit', $manufacturer->id) }}" class="btn btn-primary">Edit</a>

@endsection