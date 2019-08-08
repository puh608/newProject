@extends('archive/insuranceagencies/layout')

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

	<a href="{{route('insuranceagencies-new')}}" class="btn btn-primary mg-b-5 pull-right">AGGIUNGI</a>

	<div class="table-responsive">
		<table class="table mg-b-0">
			<thead>
				<tr>
					<th>ID</th>
					<th>Nome</th>
					<th>Telefono</th>
					<th width="1"></th>
				</tr>
			</thead>
			<tbody>
				@foreach($insuranceagencies as $g)
					<tr>
						<td>{{$g->insuranceAgency_ID}}</td>
						<td>{{$g->insuranceAgency_name}}</td>
						<td>{{$g->insuranceAgency_telephone1}}</td>
						<td><a href="{{route('insuranceagencies-edit',['id' => $g->insuranceAgency_ID])}}" class="btn btn-info"><i class="icon ion-edit"></i></a></td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection