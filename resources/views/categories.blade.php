@extends('layouts.new')

@section('content')
<ul>
  @foreach ($list as $category)
  <li>{{ $category->title}}</li>
  @endforeach
</ul>



@endsection
