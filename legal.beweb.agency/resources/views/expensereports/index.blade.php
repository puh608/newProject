@extends('expensereports/layout')

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

	<a href="{{route('expensereports-new')}}" class="btn btn-primary mg-b-5 pull-right">AGGIUNGI</a>

	<div class="table-responsive">
		<table class="table mg-b-0">
			<thead>
				<tr>
					<th>ID</th>
					<th>Data</th>
					<th>Mese</th>
					<th>Anno</th>
					<th>Tipo</th>
					<th>Categoria</th>
					<th>Importo Totale</th>
					<th width="1"></th>
				</tr>
			</thead>
			<tbody>
				<?php $total = 0;?> 
				@foreach($expensereports as $g)
					<?php
					$expenseReportDate = explode('/', $g->expenseReport_date);

					$expenseReport_typeName = config('global.MOVEMENT_TYPES_LIST')[$g->expenseReport_typeID];
					if($g->expenseReport_typeID == 1){
						$expenseReport_expenseTypeName = config('global.MOVEMENT_IN_TYPES_LIST')[$g->expenseReport_expenseTypeID];
						$expenseReport_lblTolal = "+ €  ".number_format($g->expenseReport_total,2);
					} elseif($g->expenseReport_typeID == 2){
						$expenseReport_expenseTypeName = config('global.MOVEMENT_OUT_TYPES_LIST')[$g->expenseReport_expenseTypeID];
						$expenseReport_lblTolal = "- €  ".number_format($g->expenseReport_total,2);
					} else {
						$expenseReport_expenseTypeName = "";
						$expenseReport_lblTolal = number_format($g->expenseReport_total,2);
					}
					$total += $g->expenseReport_total;
					?>
					<tr>
						<td>{{$g->expenseReport_ID}}</td>
						<td>{{$expenseReportDate[0]}}</td>
						<td>{{$expenseReportDate[1]}}</td>
						<td>{{$expenseReportDate[2]}}</td>
						<td>{{$expenseReport_typeName}}</td>
						<td>{{$expenseReport_expenseTypeName}}</td>
						<td>{{$expenseReport_lblTolal}}</td>
						<td><a href="{{route('expensereports-edit',['id' => $g->expenseReport_ID])}}" class="btn btn-info"><i class="icon ion-edit"></i></a></td>
					</tr>
				@endforeach
					<tr>
						<td colspan="6" class="text-right">Totale</td>
						<td>{{number_format($total,2)}}</td>
					</tr>
			</tbody>
		</table>
	</div>
@endsection