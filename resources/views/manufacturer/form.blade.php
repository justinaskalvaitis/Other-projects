@extends('layouts.new')

@section('content')

<h2>Gamintojo kurimas</h2>

@if(isset($manufacturer))
{!! Form::model($manufacturer, ['route' => ['manufacturers.update', $manufacturer->id], 'method' => 'put'])!!}
@else
{!! Form::open(['route' => 'manufacturers.store', 'method'=>'post']) !!}
@endif


<div class="form-group">
{!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Manufacturer title']) !!}
</div>

<div class="form-group">
{!! Form::text('website_url', null, ['class' => 'form-control', 'placeholder' => 'website url']) !!}
</div>

<div class="form-group">
{!! Form::text('country', null, ['class' => 'form-control', 'placeholder' => 'Country']) !!}
</div>
{!! Form::submit('save', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

@if(isset($manufacturer))
{!! Form::open(['route' => ['manufacturers.destroy', $manufacturer->id], 'method' => 'delete']) !!}

{!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}

{!! Form::close() !!}
@endif

@endsection