@extends('layouts.new')

@section('content')

<h2>Produkto sukurimas</h2>

@if(isset($product))
{!! Form::model($product, ['route' => 'products.store', 'method' => 'post'])  !!}
@else

{!! Form::open(['route' => 'products.store', 'method'=> 'post']) !!}
@endif


<div class="form-group">
{!! Form::select('category_id', $categories, null, ['class' =>'form-control']) !!}
</div>

<div class="form-group">
{!! Form::select('manufacturer_id', $manufacturers, null, ['class' =>'form-control']) !!}
</div>



<div class="form-group">
{!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Huehuehue']) !!}
</div>
<div class="form-group">
{!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
{!!Form::number('price', null, ['class' => 'form-control', 'placeholder' => 'Price']) !!}
</div>
<div class="form-group">
{!!Form::number('quantity', null, ['class' => 'form-control', 'placeholder' => 'Quantity']) !!}
</div>
<div class="form-group">
{!!Form::text('image_url', null, ['class' => 'form-control', 'placeholder' => 'image_url']) !!}
</div>
{!! Form::submit('save', ['class' => 'btn btn-primary']) !!}



{!! Form::close() !!}

@endsection