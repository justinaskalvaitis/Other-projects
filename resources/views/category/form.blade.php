@extends('layouts.new')

@section('content')


@if(isset($category))
<h2>Kategorijos "editinimas"</h2>
{!! Form::model($category, ['route' => ['categories.update', $category->id], 'method' => 'put'])!!}
@else
<h2>Kategorijos kurimas</h2>
{!! Form::open(['route' => 'categories.store', 'method'=>'post']) !!}
@endif


<div class="form-group">
{!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'category title']) !!}
</div>

{!! Form::submit('save', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

@if(isset($category))
{!! Form::open(['route' => ['categories.destroy', $category->id], 'method' => 'delete']) !!}

{!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}

{!! Form::close() !!}
@endif

@endsection