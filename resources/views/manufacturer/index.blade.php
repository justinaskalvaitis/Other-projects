
@extends('layouts.new')

@section('content')
	<h2>Produktu sarasas</h2>
	<div class="row">
	@foreach ($list as $manufacturers)
		<div class="col-md-4 col-sm-6 ">
			<div class="thumbnail">
					<div class="caption">
						<h3>{{ $manufacturers->title }}</h3>
						<p>{{$manufacturers->country }}</p>
						<p>Website: {{$manufacturers->website_url}}
							
						@if ($manufacturers->category)
		                <strong>Kategorija:</strong> {{ $manufacturers->category->title }}
						@endif
		                @if ($manufacturers->manufacturer)
		                     <br/>
		                     <strong>Gamintojas:</strong> {{ $manufacturers->manufacturer->title }}
		                 @endif
            			</p>
					</div>
			</div>
		</div>
	@endforeach
	</div>
@endsection