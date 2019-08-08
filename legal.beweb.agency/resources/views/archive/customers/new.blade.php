@extends('archive/customers/layout')

@section('sub_content')
	<fieldset class="form-group">
		<form method="post" action="{{route('customers-new-save')}}">
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
				                            <option value="{{$i}}">{{$customer_qualifications_list[$i]}}</option>
				                        @endfor
				                    </select>	
	                        	</div>
	                        	<div class="col-lg-10">
	                        		<input class="form-control" type="text" id="name" name="name">
	                        	</div>
	                        </div>
	                    </div>

	                    <div class="row">
		                    <div class="col-lg-8">
		                    	<div class="form-group">
		                    		<label class="form-control-label">Cod. Fiscale</label>
		                    		<input class="form-control" type="text" id="cf" name="cf">
		                    	</div>
		                    </div>

		                    <div class="col-lg-8">
		                    	<div class="form-group">
		                    		<label class="form-control-label">Nato a</label>
		                    		<input class="form-control" type="text" id="birthLocation" name="birthLocation">
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
		                                <input type="text" autocomplete="off" id="birthDate" name="birthDate" class="form-control fc-datepicker" placeholder="DD/MM/YYYY">
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
			                                    <option value="{{$i}}">{{$practice_person_id_types_list[$i]}}</option>
			                                @endfor
		                                </select>
		                            </div>
		                    	</div>
		                    </div>

		                    <div class="col-lg-4">
		                    	<div class="form-group">
		                    		<label class="form-control-label">N.</label>
		                    		<div class="input-group">
		                                <input type="text" name="documentNumber" id="documentNumber" class="form-control">
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
		                                <input type="text" autocomplete="off" id="documentReleaseDate" name="documentReleaseDate" class="form-control fc-datepicker" placeholder="DD/MM/YYYY">
		                            </div>
		                    	</div>
		                    </div>
	                    </div>

	                    <div class="row">
	                    	<div class="col-lg-12">
		                    	<div class="form-group">
		                    		<label class="form-control-label">Professione</label>
		                    		<div class="input-group">
		                                <input type="text" name="occupation" id="occupation" class="form-control">
		                            </div>
		                    	</div>
		                    </div>

		                    <div class="col-lg-12">
		                    	<div class="form-group">
		                    		<label class="form-control-label">Indirizzo</label>
		                    		<div class="input-group">
		                                <input type="text" name="address" id="address" class="form-control">
		                            </div>
		                    	</div>
		                    </div>
	                    </div>

	                    <div class="row">
	                    	<div class="col-lg-4">
		                    	<div class="form-group">
		                    		<label class="form-control-label">CAP</label>
		                    		<div class="input-group">
		                                <input type="text" name="cap" id="cap" class="form-control">
		                            </div>
		                    	</div>
		                    </div>

		                    <div class="col-lg-8">
		                    	<div class="form-group">
		                    		<label class="form-control-label">Località</label>
		                    		<div class="input-group">
		                                <input type="text" name="location" id="location" class="form-control">
		                            </div>
		                    	</div>
		                    </div>
	                    </div>

	                    <div class="row">
	                    	<div class="col-lg-6">
		                    	<div class="form-group">
		                    		<label class="form-control-label">Telefono</label>
		                    		<div class="input-group">
		                                <input type="text" name="telephone1" id="telephone1" class="form-control">
		                            </div>
		                    	</div>
		                    </div>

		                    <div class="col-lg-6">
		                    	<div class="form-group">
		                    		<label class="form-control-label">Telefono Alternativo</label>
		                    		<div class="input-group">
		                                <input type="text" name="telephone2" id="telephone2" class="form-control">
		                            </div>
		                    	</div>
		                    </div>
	                    </div>

	                    <div class="row">
	                    	<div class="col-lg-7">
		                    	<div class="form-group">
		                    		<label class="form-control-label">Email</label>
		                    		<div class="input-group">
		                                <input type="text" name="email" id="email" class="form-control">
		                            </div>
		                    	</div>
		                    </div>

		                    <div class="col-lg-5">
		                    	<div class="form-group">
		                    		<label class="form-control-label">Fax</label>
		                    		<div class="input-group">
		                                <input type="text" name="fax" id="fax" class="form-control">
		                            </div>
		                    	</div>
		                    </div>
	                    </div>

	                    <div class="form-group">
	                		<label class="form-control-label">Note </label>
	                    	<textarea rows="3" name="notes" id="notes" class="form-control" placeholder=""></textarea>
	                	</div>

                    	<div class="form-group">
                    		<label class="form-control-label">Ha conosciuto la nostra agenzia tramite</label>
                    		<div class="input-group">
                                <select class="form-control" name="gotByID" id="gotByID">
                                	@for ($i = 0; $i < count($customer_got_by_list); $i++)
	                                    <option value="{{$i}}">{{$customer_got_by_list[$i]}}</option>
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
		                                <input type="text" autocomplete="off" id="feedbackDate" name="feedbackDate" class="form-control fc-datepicker" placeholder="DD/MM/YYYY">
		                            </div>
		                    	</div>
		                    </div>
		                    <div class="col-lg-4">
		                    	<div class="form-group">
		                    		<label class="form-control-label">Valutazione</label>
		                    		<select class="form-control" name="feedbackEvaluation" id="feedbackEvaluation">
		                    			<option></option>
		                    			<option value="1">1 su 5</option>
		                    			<option value="2">2 su 5</option>
		                    			<option value="3">3 su 5</option>
		                    			<option value="4">4 su 5</option>
		                    			<option value="5">5 su 5</option>
		                    		</select>
		                    	</div>
		                    </div>
		                    <div class="col-lg-12">
		                    	<div class="form-group">
		                    		<label class="form-control-label">Descrizione</label>
		                    		<textarea class="form-control" name="feedbackText" id="feedbackText"></textarea>
		                    	</div>
		                    </div>
                    	</div>

	                	<legend class="col-form-label">CARD</legend>


	                	<legend class="col-form-label">AREA PRIVATA</legend>
	                	<div class="form-group">
	                		<label class="form-control-label">Username</label>
	                		<div class="input-group">
	                			<input class="form-control" type="text" id="username" name="username">
	                            <div class="input-group-btn">
	                                <button type="button" class="btn btn-info" title="Genera Username" id="generateUsername"><i class="icon ion-loop"></i></button>
	                            </div>
	                        </div>
	                	</div>
	                	<div class="form-group">
	                		<label class="form-control-label">Password</label>
	                		<div class="input-group">
	                			<input class="form-control" type="text" id="password" name="password">
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