@extends('archive/interveneds/layout')

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

	<a href="{{route('interveneds-new')}}" class="btn btn-primary mg-b-5 pull-right">AGGIUNGI</a>

	<div class="table-responsive">
		<table class="table mg-b-0">
			<thead>
				<tr>
					<th>ID</th>
					<th>Nome</th>
					<th>Telefonu</th>
					<th>Località</th>
					<th width="1"></th>
				</tr>
			</thead>
			<tbody>
				@foreach($interveneds as $g)
					<tr>
						<td>{{$g->intervened_ID}}</td>
						<td>{{$g->intervened_name}}</td>
						<td>{{$g->intervened_telephone1}}</td>
						<td>{{$g->intervened_location}}</td>
						<td><a href="{{route('interveneds-edit',['id' => $g->intervened_ID])}}" class="btn btn-info"><i class="icon ion-edit"></i></a></td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection