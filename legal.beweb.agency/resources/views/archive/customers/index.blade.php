@extends('archive/customers/layout')

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

	<a href="{{route('customers-new')}}" class="btn btn-primary mg-b-5 pull-right">AGGIUNGI</a>

	<div class="table-responsive">
		<table class="table mg-b-0">
			<thead>
				<tr>
					<th>#ID</th>
					<th>Nome</th>
					<th>Telefono</th>
					<th>Località</th>
					<th width="1"></th>
				</tr>
			</thead>
			<tbody>
				@foreach($customers as $g)
					<tr>
						<td>{{$g->customer_ID}}</td>
						<td>{{$g->customer_name}}</td>
						<td>{{$g->customer_telephone1}}</td>
						<td>{{$g->customer_location}}</td>
						<td><a href="{{route('customers-edit',['id' => $g->customer_ID])}}" class="btn btn-info"><i class="icon ion-edit"></i></a></td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection