@extends('archive/tribunals/layout')

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

	<a href="{{route('tribunals-new')}}" class="btn btn-primary mg-b-5 pull-right">AGGIUNGI</a>

	<div class="table-responsive">
		<table class="table mg-b-0">
			<thead>
				<tr>
					<th>ID</th>
					<th>Nome</th>
					<th>Località</th>
					<th>Telefono</th>
					<th width="1"></th>
				</tr>
			</thead>
			<tbody>
				@foreach($tribunals as $g)
					<tr>
						<td>{{$g->tribunal_ID}}</td>
						<td>{{$g->tribunal_name}}</td>
						<td>{{$g->tribunal_location}}</td>
						<td>{{$g->tribunal_telephone1}}</td>
						<td><a href="{{route('tribunals-edit',['id' => $g->tribunal_ID])}}" class="btn btn-info"><i class="icon ion-edit"></i></a></td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection