@extends('archive/specialists/layout')

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

	<a href="{{route('specialists-new')}}" class="btn btn-primary mg-b-5 pull-right">AGGIUNGI</a>

	<div class="table-responsive">
		<table class="table mg-b-0">
			<thead>
				<tr>
					<th>ID</th>
					<th>Nome</th>
					<th>Tipo</th>
					<th>Località</th>
					<th width="1"></th>
				</tr>
			</thead>
			<tbody>
				@foreach($specialists as $g)
					<tr>
						<td>{{$g->specialist_ID}}</td>
						<td>{{$g->specialist_name}}</td>
						<td>{{@$g->type->externalValue_value}}</td>
						<td>{{$g->specialist_location}}</td>
						<td><a href="{{route('specialists-edit',['id' => $g->specialist_ID])}}" class="btn btn-info"><i class="icon ion-edit"></i></a></td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection