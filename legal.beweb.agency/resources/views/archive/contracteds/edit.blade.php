@extends('archive/contracteds/layout')

@section('sub_content')
	<fieldset class="form-group">
		<form method="post" action="{{route('contracteds-edit-save', ['id' => $rec->contracted_ID])}}">
			{{ csrf_field() }}
			<div class="form-layout">
				<div class="row mg-b-25">
					<div class="col-lg-12">
	                    <div class="form-group">
	                        <label class="form-control-label">Nome <span class="tx-danger">*</span></label>
	                        <input class="form-control" type="text" id="name" name="name" value="{{$rec->contracted_name}}">
	                    </div>

	                    <div class="form-group">
	                        <label class="form-control-label">Indirizzo</label>
	                        <input class="form-control" type="text" id="address" name="address" value="{{$rec->contracted_address}}">
	                    </div>

	                    <div class="row">
		                    <div class="col-lg-4">
		                    	<div class="form-group">
		                    		<label class="form-control-label">CAP</label>
		                    		<input class="form-control" type="text" id="cap" name="cap" value="{{$rec->contracted_cap}}">
		                    	</div>
		                    </div>

		                    <div class="col-lg-8">
		                    	<div class="form-group">
		                    		<label class="form-control-label">Località </label>
		                    		<input class="form-control" type="text" id="location" name="location" value="{{$rec->contracted_location}}">
		                    	</div>
		                    </div>
	                    </div>

	                    <div class="row">
		                    <div class="col-lg-6">
		                    	<div class="form-group">
		                    		<label class="form-control-label">Telefono <span class="tx-danger">*</span></label>
		                    		<input class="form-control" type="text" id="telephone1" name="telephone1" value="{{$rec->contracted_telephone1}}">
		                    	</div>
		                    </div>

		                    <div class="col-lg-6">
		                    	<div class="form-group">
		                    		<label class="form-control-label">Telefono Alternativo</label>
		                    		<input class="form-control" type="text" id="telephone2" name="telephone2" value="{{$rec->contracted_telephone2}}">
		                    	</div>
		                    </div>
	                    </div>

	                    <div class="row">
		                    <div class="col-lg-7">
		                    	<div class="form-group">
		                    		<label class="form-control-label">Email</label>
		                    		<input class="form-control" type="text" id="email" name="email" value="{{$rec->contracted_email}}">
		                    	</div>
		                    </div>

		                    <div class="col-lg-5">
		                    	<div class="form-group">
		                    		<label class="form-control-label">Fax</label>
		                    		<input class="form-control" type="text" id="fax" name="fax" value="{{$rec->contracted_fax}}">
		                    	</div>
		                    </div>
	                    </div>

	                    <div class="form-group">
	                		<label class="form-control-label">Condizioni </label>
	                    	<textarea rows="3" name="conditions" id="conditions" class="form-control" placeholder="">{{$rec->contracted_conditions}}</textarea>
	                	</div>

	                	<div class="form-group">
	                		<label class="form-control-label">Note </label>
	                    	<textarea rows="3" name="notes" id="notes" class="form-control" placeholder="">{{$rec->contracted_notes}}</textarea>
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