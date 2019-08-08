@extends('archive/getters/layout')

@section('sub_content')
	<fieldset class="form-group">
		<form method="post" action="{{route('getters-new-save')}}">
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

	                    <div class="form-group">
	                		<label class="form-control-label">Indirizzo</label>
	                		<input class="form-control" type="text" id="address" name="address">
	                	</div>

	                	<div class="row">
		                    <div class="col-lg-4">
		                    	<div class="form-group">
		                    		<label class="form-control-label">CAP</label>
		                    		<input class="form-control" type="text" id="cap" name="cap">
		                    	</div>
		                    </div>

		                    <div class="col-lg-8">
		                    	<div class="form-group">
		                    		<label class="form-control-label">Località</label>
		                    		<input class="form-control" type="text" id="location" name="location">
		                    	</div>
		                    </div>
	                    </div>

	                    <div class="row">
		                    <div class="col-lg-6">
		                    	<div class="form-group">
		                    		<label class="form-control-label">Telefono <span class="tx-danger">*</span></label>
		                    		<input class="form-control" type="text" id="telephone1" name="telephone1">
		                    	</div>
		                    </div>

		                    <div class="col-lg-6">
		                    	<div class="form-group">
		                    		<label class="form-control-label">Telefono Alternativo</label>
		                    		<input class="form-control" type="text" id="telephone2" name="telephone2">
		                    	</div>
		                    </div>
	                    </div>

	                    <div class="row">
		                    <div class="col-lg-7">
		                    	<div class="form-group">
		                    		<label class="form-control-label">Email</label>
		                    		<input class="form-control" type="text" id="email" name="email">
		                    	</div>
		                    </div>

		                    <div class="col-lg-5">
		                    	<div class="form-group">
		                    		<label class="form-control-label">Fax</label>
		                    		<input class="form-control" type="text" id="fax" name="fax">
		                    	</div>
		                    </div>
	                    </div>

	                    <div class="form-group">
	                		<label class="form-control-label">Note </label>
	                    	<textarea rows="3" name="notes" id="notes" class="form-control" placeholder=""></textarea>
	                	</div>

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