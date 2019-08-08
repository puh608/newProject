@extends('articles/layout')

@section('sub_content')
	<fieldset class="form-group">
		<form method="post" action="{{route('articles-edit-save', ['id' => $rec->article_ID])}}">
			{{ csrf_field() }}
			<div class="form-layout">
				<div class="row mg-b-25">
					<div class="col-lg-12">
						<div class="row">
							<div class="col-lg-4">
			                    <div class="form-group">
			                        <label class="form-control-label">Numero <span class="tx-danger">*</span></label>
			                        <input class="form-control" type="text" id="number" name="number" value="{{$rec->article_number}}">
			                    </div>
		                    </div>
		                </div>

	                    <div class="form-group">
	                        <label class="form-control-label">Titolo <span class="tx-danger">*</span></label>
	                        <input class="form-control" type="text" id="title" name="title" value="{{$rec->article_title}}">
	                    </div>

	                    <div class="row">
		                    <div class="col-lg-4">
		                    	<div class="form-group">
		                    		<label class="form-control-label">Responsabilità</label>
		                    		<input class="form-control" type="text" id="responsability" name="responsability" value="{{$rec->article_responsability}}">
		                    	</div>
		                    </div>
	                    </div>

	                    <div class="form-group">
	                		<label class="form-control-label">Info </label>
	                    	<textarea rows="10" name="info" id="info" class="form-control" placeholder="">{{$rec->article_info}}</textarea>
	                	</div>
	                </div>
				</div>

				<div class="form-layout-footer">
					<button class="btn btn-primary bd-0">Salva Modifiche</button>
				</div>
			</div>
		</form>
	</fieldset>
@endsection