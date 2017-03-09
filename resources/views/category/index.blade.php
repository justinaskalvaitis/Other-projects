@extends('layouts.new')

@section('content')
	<h2>Kategorijų sąrašas</h2>
	<ul>
	  @foreach ($categories as $category)
	  <li><a href="{{ route('categories.show', ['id' => $category->id]) }}">{{ $category->title}}</a></li>
	  @endforeach
	</ul>



@endsection
