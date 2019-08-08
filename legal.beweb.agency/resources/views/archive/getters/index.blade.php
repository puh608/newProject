@extends('archive/getters/layout')

@section('sub_content')
	@if(session()->has('error'))
		<div class="alert alert-warning">
			{{session()->get('error')}}
		</div>
	@endif

	@if(session()->has('success'))
		<div class="alert alert-success">
			{{session()->get('success')}}
		</div>
	@endif

	<a href="{{route('getters-new')}}" class="btn btn-primary mg-b-5 pull-right">AGGIUNGI</a>

	<div class="table-responsive">
		<table class="table mg-b-0">
			<thead>
				<tr>
					<th>Nome</th>
					<th>Telefono</th>
					<th>Località</th>
					<th width="1"></th>
				</tr>
			</thead>
			<tbody>
				@foreach($getters as $g)
					<tr>
						<td>{{$g->getter_name}}</td>
						<td>{{$g->getter_telephone1}}</td>
						<td>{{$g->getter_location}}</td>
						<td><a href="{{route('getters-edit',['id' => $g->getter_ID])}}" class="btn btn-info"><i class="icon ion-edit"></i></a></td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection