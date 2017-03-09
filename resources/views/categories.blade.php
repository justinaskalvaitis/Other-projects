@extends('layouts.new')

@section('content')
	<h2>Kategorijų sąrašas</h2>
	<ul>
	  @foreach ($list as $category)
	  <li>{{ $category->title}}</li>
	  @endforeach
	</ul>



@endsection
