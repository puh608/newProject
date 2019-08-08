@extends('archive/insurancepoints/layout')

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

	<a href="{{route('insurance-points-new')}}" class="btn btn-primary mg-b-5 pull-right">AGGIUNGI</a>

	<div class="table-responsive">
		<table class="table mg-b-0">
			<thead>
				<tr>
					<th>ID</th>
					<th>Nome</th>
					<th>Compagnia</th>
					<th width="1"></th>
				</tr>
			</thead>
			<tbody>
				@foreach($insurancepoints as $g)
					<tr>
						<td>{{$g->insurancePoint_ID}}</td>
						<td>{{$g->insurancePoint_name}}</td>
						<td>{{@$g->insurance->insurance_name}}</td>
						<td><a href="{{route('insurance-points-edit',['id' => $g->insurancePoint_ID])}}" class="btn btn-info"><i class="icon ion-edit"></i></a></td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection