@extends('archive/specialists/layout')

@section('sub_content')
	<fieldset class="form-group">
		<form method="post" action="{{route('specialists-edit-save', ['id' => $rec->specialist_ID])}}">
			{{ csrf_field() }}
			<div class="form-layout">
				<div class="row mg-b-25">
					<div class="col-lg-12">
	                    <div class="form-group">
	                        <label class="form-control-label">Nome <span class="tx-danger">*</span></label>
	                        <div class="row">
	                        	<div class="col-lg-2">
	                        		<select name="qualificationID" id="qualificationID" class="form-control ">
				                        @for ($i = 0; $i < count($CONTACT_QUALIFICATIONS_LIST); $i++)
				                            <option value="{{$i}}" @if($rec->specialist_qualificationID == $i) selected @endif>{{$CONTACT_QUALIFICATIONS_LIST[$i]}}</option>
				                        @endfor
				                    </select>
	                        	</div>
	                        	<div class="col-lg-10">
	                        		<input class="form-control" type="text" id="name" name="name" value="{{$rec->specialist_name}}">
	                        	</div>
	                        </div>
	                    </div>

	                    <div class="form-group">
	                        <label class="form-control-label">C.F. / Part. IVA</label>
	                        <input class="form-control" type="text" id="cf" name="cf" value="{{$rec->specialist_cf}}">
	                    </div>

	                    <div class="form-group">
	                        <label class="form-control-label">Tipo <span class="tx-danger">*</span></label>
	                        <select name="typeID" id="typeID" class="form-control ">
	                        	<option></option>
	                        	@foreach($SPECIALIST_TYPES_LIST as $type)
	                        		<option value="{{$type->externalValue_ID}}" @if($rec->specialist_typeID == $type->externalValue_ID) selected @endif>{{$type->externalValue_value}}</option>
	                        	@endforeach
		                    </select>
	                    </div>

	                    <div class="form-group">
	                        <label class="form-control-label">Indirizzo</label>
	                        <input class="form-control" type="text" id="address" name="address" value="{{$rec->specialist_address}}">
	                    </div>

	                    <div class="row">
		                    <div class="col-lg-4">
		                    	<div class="form-group">
		                    		<label class="form-control-label">CAP</label>
		                    		<input class="form-control" type="text" id="cap" name="cap" value="{{$rec->specialist_cap}}">
		                    	</div>
		                    </div>

		                    <div class="col-lg-8">
		                    	<div class="form-group">
		                    		<label class="form-control-label">Località</label>
		                    		<input class="form-control" type="text" id="location" name="location" value="{{$rec->specialist_location}}">
		                    	</div>
		                    </div>
	                    </div>

	                    <div class="row">
		                    <div class="col-lg-6">
		                    	<div class="form-group">
		                    		<label class="form-control-label">Telefono</label>
		                    		<input class="form-control" type="text" id="telephone1" name="telephone1" value="{{$rec->specialist_telephone1}}">
		                    	</div>
		                    </div>

		                    <div class="col-lg-6">
		                    	<div class="form-group">
		                    		<label class="form-control-label">Telefono Alternativo</label>
		                    		<input class="form-control" type="text" id="telephone2" name="telephone2" value="{{$rec->specialist_telephone2}}">
		                    	</div>
		                    </div>
	                    </div>

	                    <div class="row">
		                    <div class="col-lg-7">
		                    	<div class="form-group">
		                    		<label class="form-control-label">Email</label>
		                    		<input class="form-control" type="text" id="email" name="email" value="{{$rec->specialist_email}}">
		                    	</div>
		                    </div>

		                    <div class="col-lg-5">
		                    	<div class="form-group">
		                    		<label class="form-control-label">Fax</label>
		                    		<input class="form-control" type="text" id="fax" name="fax" value="{{$rec->specialist_fax}}">
		                    	</div>
		                    </div>
	                    </div>

	                    <div class="form-group">
	                		<label class="form-control-label">Note </label>
	                    	<textarea rows="3" name="notes" id="notes" class="form-control" placeholder="">{{$rec->specialist_notes}}</textarea>
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