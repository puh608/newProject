@extends('archive/customers/layout')

@section('sub_content')
	<fieldset class="form-group">
		<form method="post" action="{{route('customers-edit-save', ['id' => $rec->customer_ID])}}">
			{{ csrf_field() }}
			<div class="form-layout">
				<div class="row mg-b-25">
					<div class="col-lg-12">
	                    <div class="form-group">
	                        <label class="form-control-label">Nome <span class="tx-danger">*</span></label>
	                        <div class="row">
	                        	<div class="col-lg-2">
	                        		<select name="qualificationID" id="qualificationID" class="form-control ">
				                        @for ($i = 0; $i < count($customer_qualifications_list); $i++)
				                            <option value="{{$i}}" @if($rec->customer_qualificationID == $i) selected @endif>{{$customer_qualifications_list[$i]}}</option>
				                        @endfor
				                    </select>	
	                        	</div>
	                        	<div class="col-lg-10">
	                        		<input class="form-control" type="text" id="name" name="name" value="{{$rec->customer_name}}">
	                        	</div>
	                        </div>
	                    </div>

	                    <div class="row">
		                    <div class="col-lg-8">
		                    	<div class="form-group">
		                    		<label class="form-control-label">Cod. Fiscale</label>
		                    		<input class="form-control" type="text" id="cf" name="cf" value="{{$rec->cf}}">
		                    	</div>
		                    </div>

		                    <div class="col-lg-8">
		                    	<div class="form-group">
		                    		<label class="form-control-label">Nato a</label>
		                    		<input class="form-control" type="text" id="birthLocation" name="birthLocation" value="{{$rec->customer_birthLocation}}">
		                    	</div>
		                    </div>

		                    <div class="col-lg-4">
		                    	<div class="form-group">
		                    		<label class="form-control-label">Nato il</label>
		                    		<div class="input-group">
		                                <div class="input-group-prepend">
		                                    <div class="input-group-text">
		                                        <i class="icon ion-calendar tx-16 lh-0 op-6"></i>
		                                    </div>
		                                </div>
		                                <input type="text" autocomplete="off" id="birthDate" name="birthDate" class="form-control fc-datepicker" placeholder="DD/MM/YYYY"  value="{{$rec->customer_birthDate}}">
		                            </div>
		                    	</div>
		                    </div>
	                    </div>

	                    <div class="row">
		                    <div class="col-lg-4">
		                    	<div class="form-group">
		                    		<label class="form-control-label">Documento</label>
		                    		<div class="input-group">
		                                <select class="form-control" name="documentTypeID" id="documentTypeID">
		                                	@for ($i = 0; $i < count($practice_person_id_types_list); $i++)
			                                    <option value="{{$i}}" @if($rec->customer_documentTypeID == $i) selected @endif>{{$practice_person_id_types_list[$i]}}</option>
			                                @endfor
		                                </select>
		                            </div>
		                    	</div>
		                    </div>

		                    <div class="col-lg-4">
		                    	<div class="form-group">
		                    		<label class="form-control-label">N.</label>
		                    		<div class="input-group">
		                                <input type="text" name="documentNumber" id="documentNumber" class="form-control" value="{{$rec->customer_documentNumber}}">
		                            </div>
		                    	</div>
		                    </div>

		                    <div class="col-lg-4">
		                    	<div class="form-group">
		                    		<label class="form-control-label">Rilasciato il</label>
		                    		<div class="input-group">
		                                <div class="input-group-prepend">
		                                    <div class="input-group-text">
		                                        <i class="icon ion-calendar tx-16 lh-0 op-6"></i>
		                                    </div>
		                                </div>
		                                <input type="text" autocomplete="off" id="documentReleaseDate" name="documentReleaseDate" class="form-control fc-datepicker" placeholder="DD/MM/YYYY" value="{{$rec->customer_documentReleaseDate}}">
		                            </div>
		                    	</div>
		                    </div>
	                    </div>

	                    <div class="row">
	                    	<div class="col-lg-12">
		                    	<div class="form-group">
		                    		<label class="form-control-label">Professione</label>
		                    		<div class="input-group">
		                                <input type="text" name="occupation" id="occupation" class="form-control" value="{{$rec->customer_occupation}}">
		                            </div>
		                    	</div>
		                    </div>

		                    <div class="col-lg-12">
		                    	<div class="form-group">
		                    		<label class="form-control-label">Indirizzo</label>
		                    		<div class="input-group">
		                                <input type="text" name="address" id="address" class="form-control" value="{{$rec->customer_address}}">
		                            </div>
		                    	</div>
		                    </div>
	                    </div>

	                    <div class="row">
	                    	<div class="col-lg-4">
		                    	<div class="form-group">
		                    		<label class="form-control-label">CAP</label>
		                    		<div class="input-group">
		                                <input type="text" name="cap" id="cap" class="form-control" value="{{$rec->customer_cap}}">
		                            </div>
		                    	</div>
		                    </div>

		                    <div class="col-lg-8">
		                    	<div class="form-group">
		                    		<label class="form-control-label">Località</label>
		                    		<div class="input-group">
		                                <input type="text" name="location" id="location" class="form-control" value="{{$rec->customer_location}}">
		                            </div>
		                    	</div>
		                    </div>
	                    </div>

	                    <div class="row">
	                    	<div class="col-lg-6">
		                    	<div class="form-group">
		                    		<label class="form-control-label">Telefono</label>
		                    		<div class="input-group">
		                                <input type="text" name="telephone1" id="telephone1" class="form-control" value="{{$rec->customer_telephone1}}">
		                            </div>
		                    	</div>
		                    </div>

		                    <div class="col-lg-6">
		                    	<div class="form-group">
		                    		<label class="form-control-label">Telefono Alternativo</label>
		                    		<div class="input-group">
		                                <input type="text" name="telephone2" id="telephone2" class="form-control" value="{{$rec->customer_telephone2}}">
		                            </div>
		                    	</div>
		                    </div>
	                    </div>

	                    <div class="row">
	                    	<div class="col-lg-7">
		                    	<div class="form-group">
		                    		<label class="form-control-label">Email</label>
		                    		<div class="input-group">
		                                <input type="text" name="email" id="email" class="form-control" value="{{$rec->customer_email}}">
		                            </div>
		                    	</div>
		                    </div>

		                    <div class="col-lg-5">
		                    	<div class="form-group">
		                    		<label class="form-control-label">Fax</label>
		                    		<div class="input-group">
		                                <input type="text" name="fax" id="fax" class="form-control" value="{{$rec->customer_fax}}">
		                            </div>
		                    	</div>
		                    </div>
	                    </div>

	                    <div class="form-group">
	                		<label class="form-control-label">Note </label>
	                    	<textarea rows="3" name="notes" id="notes" class="form-control" placeholder="">{{$rec->customer_notes}}</textarea>
	                	</div>

                    	<div class="form-group">
                    		<label class="form-control-label">Ha conosciuto la nostra agenzia tramite</label>
                    		<div class="input-group">
                                <select class="form-control" name="gotByID" id="gotByID">
                                	@for ($i = 0; $i < count($customer_got_by_list); $i++)
	                                    <option value="{{$i}}" @if($rec->customer_gotByID == $i) selected @endif>{{$customer_got_by_list[$i]}}</option>
	                                @endfor
                                </select>
                            </div>
                    	</div>

                    	<legend class="col-form-label">FEEDBACK</legend>
                    	<div class="row">
                    		<div class="col-lg-4">
		                    	<div class="form-group">
		                    		<label class="form-control-label">Data</label>
		                    		<div class="input-group">
		                                <div class="input-group-prepend">
		                                    <div class="input-group-text">
		                                        <i class="icon ion-calendar tx-16 lh-0 op-6"></i>
		                                    </div>
		                                </div>
		                                <input type="text" autocomplete="off" id="feedbackDate" name="feedbackDate" class="form-control fc-datepicker" placeholder="DD/MM/YYYY" value="{{$rec->customer_feedbackDate}}">
		                            </div>
		                    	</div>
		                    </div>
		                    <div class="col-lg-4">
		                    	<div class="form-group">
		                    		<label class="form-control-label">Valutazione</label>
		                    		<select class="form-control" name="feedbackEvaluation" id="feedbackEvaluation">
		                    			<option></option>
		                    			<option value="1" @if($rec->customer_feedbackEvaluation == 1) selected @endif>1 su 5</option>
		                    			<option value="2" @if($rec->customer_feedbackEvaluation == 2) selected @endif>2 su 5</option>
		                    			<option value="3" @if($rec->customer_feedbackEvaluation == 3) selected @endif>3 su 5</option>
		                    			<option value="4" @if($rec->customer_feedbackEvaluation == 4) selected @endif>4 su 5</option>
		                    			<option value="5" @if($rec->customer_feedbackEvaluation == 5) selected @endif>5 su 5</option>
		                    		</select>
		                    	</div>
		                    </div>
		                    <div class="col-lg-12">
		                    	<div class="form-group">
		                    		<label class="form-control-label">Descrizione</label>
		                    		<textarea class="form-control" name="feedbackText" id="feedbackText">{{$rec->customer_feedbackText}}</textarea>
		                    	</div>
		                    </div>
                    	</div>

	                	<legend class="col-form-label">CARD</legend>


	                	<legend class="col-form-label">AREA PRIVATA</legend>
	                	<div class="form-group">
	                		<label class="form-control-label">Username</label>
	                		<div class="input-group">
	                			<input class="form-control" type="text" id="username" name="username" value="{{$rec->customer_username}}">
	                            <div class="input-group-btn">
	                                <button type="button" class="btn btn-info" title="Genera Username" id="generateUsername"><i class="icon ion-loop"></i></button>
	                            </div>
	                        </div>
	                	</div>
	                	<div class="form-group">
	                		<label class="form-control-label">Password</label>
	                		<div class="input-group">
	                			<input class="form-control" type="text" id="password" name="password" value="{{$rec->customer_password}}">
	                            <div class="input-group-btn">
	                                <button type="button" class="btn btn-info" title="Genera Password" id="generatePassword"><i class="icon ion-loop"></i></button>
	                            </div>
	                        </div>
	                	</div>
	                </div>
				</div>

				<div class="form-layout-footer">
					<button class="btn btn-primary bd-0">Salva Modifiche</button>
				</div>
			</div>
		</form>
	</fieldset>

	<script type="text/javascript">
		$(document).ready(function(){
			$('.fc-datepicker').datepicker({
		      showOtherMonths: true,
		      selectOtherMonths: true,
		      dateFormat: 'dd/mm/yy'
		    });

			$("#generateUsername").click(function(){
				var name = $("#name").val();
				var myPattern = /\s/g;
				name = name.toLowerCase().replace(myPattern,".");
				$("#username").val(name);
			});

			$("#generatePassword").click(function(){
				var charsList = "abcdefghijkmnopqrstuvwxyzABCDEFGHIJKMNOPQRSTUVWXYZ023456789";
				var string = "";
				for (var i=0; i<8;i++) string+=charsList.charAt(Math.floor(Math.random()*(charsList.length-1)));
				$("#password").val(string);
			});
		});
	</script>
@endsection