@extends('articles/layout')

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

	<a href="{{route('articles-new')}}" class="btn btn-primary mg-b-5 pull-right">AGGIUNGI</a>

	<div class="table-responsive">
		<table class="table mg-b-0">
			<thead>
				<tr>
					<th>Numero</th>
					<th>Titolo</th>
					<th>Responsabilità</th>
					<th width="1"></th>
				</tr>
			</thead>
			<tbody>
				@foreach($articles as $g)
					<tr>
						<td>{{$g->article_number}}</td>
						<td>{{$g->article_title}}</td>
						<td>{{$g->article_responsability}}</td>
						<td><a href="{{route('articles-edit',['id' => $g->article_ID])}}" class="btn btn-info"><i class="icon ion-edit"></i></a></td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection