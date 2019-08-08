@extends('expensereports/layout')

@section('sub_content')
	<fieldset class="form-group">
		<form method="post" action="{{route('expensereports-new-save')}}">
			{{ csrf_field() }}
			<div class="form-layout">
				<div class="row mg-b-25">
					<div class="col-lg-12">
						<div class="row">
							<div class="col-lg-2">
			                    <div class="form-group">
			                        <label class="form-control-label">ID</label>
			                        <input class="form-control" type="text" id="ID" name="ID" disabled>
			                    </div>
		                    </div>
		                </div>

		                <div class="row">
							<div class="col-lg-4">
				                <div class="form-group">
		                            <label class="form-control-label"><span id="requestDateLabel">Data</span><span class="tx-danger">*</span></label>
					                <div class="input-group">
						                <div class="input-group-prepend">
				                            <div class="input-group-text">
				                                <i class="icon ion-calendar tx-16 lh-0 op-6"></i>
				                            </div>
				                        </div>
				                        <input type="text" autocomplete="off" id="date" name="date" required="required" class="form-control fc-datepicker" placeholder="DD/MM/YYYY">
				                    </div>
				                </div>
		                	</div>
		                </div>

		                <div class="row">
							<div class="col-lg-4">
				                <div class="form-group">
		                            <label class="form-control-label">Tipo <span class="tx-danger">*</span></label>
					                <select class="form-control" name="typeID" id="typeID">
					                	@for ($i = 0; $i < count($MOVEMENT_TYPES_LIST); $i++)
		                                    <option value="{{$i}}">{{$MOVEMENT_TYPES_LIST[$i]}}</option>
		                                @endfor
					                </select>
				                </div>
		                	</div>

		                	<div class="col-lg-8">
				                <div class="form-group">
		                            <label class="form-control-label">Categoria <span class="tx-danger">*</span></label>
					                <select class="form-control" name="expenseTypeID" id="expenseTypeID"></select>
				                </div>
		                	</div>
		                </div>
	                    <div class="form-group">
	                        <label class="form-control-label"><span id="supplierNameLabel">Pagato da</span> <span class="tx-danger">*</span></label>
					        <input type="text" class="form-control" name="supplierName" id="supplierName">
	                    </div>

	                    <div class="row">
		                	<div class="col-lg-4">
		                		<label class="form-control-label">Prezzo (€) <span class="tx-danger">*</span></label>
		                		<input type="text" class="form-control" name="price" id="price">
		                	</div>
		                	<div class="col-lg-4">
		                		<label class="form-control-label">IVA (%) <span class="tx-danger">*</span></label>
		                		<input type="text" class="form-control" name="iva" id="iva" value="21.00">
		                	</div>
		                	<div class="col-lg-4">
		                		<label class="form-control-label">Totale (€) <span class="tx-danger">*</span></label>
		                		<input type="text" class="form-control" name="total" id="total" readonly>
		                	</div>
		                </div>

		                <div class="form-group mg-t-20">
                            <label class="form-control-label">Pagamento <span class="tx-danger">*</span></label>
			                <select class="form-control" name="paymentTypeID" id="paymentTypeID">
			                	@for ($i = 0; $i < count($PAYMENT_TYPES_LIST); $i++)
                                    <option value="{{$i}}">{{$PAYMENT_TYPES_LIST[$i]}}</option>
                                @endfor
			                </select>
		                </div>

		                <div class="form-group">
	                		<label class="form-control-label">Note </label>
	                    	<textarea rows="3" name="notes" id="notes" class="form-control" placeholder=""></textarea>
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

		    $("#typeID").change(function(){
		    	checkType();
		    });

		    function checkType(){
		    	var tip_typeID = Number($("#typeID").val());
		    	$("#expenseTypeID").html("");
				if(tip_typeID == 1){
					$.each({!!json_encode($MOVEMENT_IN_TYPES_LIST)!!}, function( index, value ) {
			            $("#expenseTypeID").append('<option value="'+index+'">'+value+'</option>');
			        });
					$('#supplierNameLabel').html("Pagato da");
				}
				if(tip_typeID == 2){
					$.each({!!json_encode($MOVEMENT_OUT_TYPES_LIST)!!}, function( index, value ) {
			            $("#expenseTypeID").append('<option value="'+index+'">'+value+'</option>');
			        });
					$('#supplierNameLabel').html("Pagato a");
				}
			}

			$("#price").change(function(){
				setTotal();
			});

			$("#iva").change(function(){
				setTotal();
			});

			function setTotal(){
				$("#total").val((Number($("#price").val())*(100+Number($("#iva").val())) / 100).toFixed(2))
			}
		});
	</script>
@endsection