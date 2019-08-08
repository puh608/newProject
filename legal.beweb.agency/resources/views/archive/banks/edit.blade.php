@extends('archive/banks/layout')

@section('sub_content')
	<fieldset class="form-group">
		<form method="post" action="{{route('banks-edit-save', ['id' => $rec->bank_ID])}}">
			{{ csrf_field() }}
			<div class="form-layout">
				<div class="row mg-b-25">
					<div class="col-lg-12">
	                    <div class="form-group">
	                        <label class="form-control-label">ID</label>
	                        <input class="form-control" type="text" id="ID" name="ID" value="{{$rec->bank_ID}}" disabled>
	                    </div>

	                    <div class="form-group">
	                        <label class="form-control-label">Nome <span class="tx-danger">*</span></label>
	                        <input class="form-control" type="text" id="name" name="name" value="{{$rec->bank_name}}">
	                    </div>

	                    <div class="form-group">
	                        <label class="form-control-label">Indirizzo <span class="tx-danger">*</span></label>
	                        <input class="form-control" type="text" id="address" name="address" value="{{$rec->bank_address}}">
	                    </div>

	                    <div class="row">
		                    <div class="col-lg-4">
		                    	<div class="form-group">
		                    		<label class="form-control-label">CAP <span class="tx-danger">*</span></label>
		                    		<input class="form-control" type="text" id="cap" name="cap" value="{{$rec->bank_cap}}">
		                    	</div>
		                    </div>

		                    <div class="col-lg-8">
		                    	<div class="form-group">
		                    		<label class="form-control-label">Località <span class="tx-danger">*</span></label>
		                    		<input class="form-control" type="text" id="location" name="location" value="{{$rec->bank_location}}">
		                    	</div>
		                    </div>
	                    </div>

	                    <div class="row">
		                    <div class="col-lg-6">
		                    	<div class="form-group">
		                    		<label class="form-control-label">Telefono</label>
		                    		<input class="form-control" type="text" id="telephone1" name="telephone1" value="{{$rec->bank_telephone1}}">
		                    	</div>
		                    </div>

		                    <div class="col-lg-6">
		                    	<div class="form-group">
		                    		<label class="form-control-label">Telefono Alternativo</label>
		                    		<input class="form-control" type="text" id="telephone2" name="telephone2" value="{{$rec->bank_telephone2}}">
		                    	</div>
		                    </div>
	                    </div>

	                    <div class="row">
		                    <div class="col-lg-7">
		                    	<div class="form-group">
		                    		<label class="form-control-label">Email</label>
		                    		<input class="form-control" type="text" id="email" name="email" value="{{$rec->bank_email}}">
		                    	</div>
		                    </div>

		                    <div class="col-lg-5">
		                    	<div class="form-group">
		                    		<label class="form-control-label">Fax</label>
		                    		<input class="form-control" type="text" id="fax" name="fax" value="{{$rec->bank_fax}}">
		                    	</div>
		                    </div>
	                    </div>

	                    <div class="form-group">
	                		<label class="form-control-label">Note </label>
	                    	<textarea rows="3" name="notes" id="notes" class="form-control" placeholder="">{{$rec->bank_notes}}</textarea>
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