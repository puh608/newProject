@extends('archive/insurancepoints/layout')

@section('sub_content')
	<fieldset class="form-group">
		<form method="post" action="{{route('insurance-points-new-save')}}">
			{{ csrf_field() }}
			<div class="form-layout">
				<div class="row mg-b-25">
					<div class="col-lg-12">
	                    <div class="form-group">
	                        <label class="form-control-label">Nome <span class="tx-danger">*</span></label>
	                        <input class="form-control" type="text" id="name" name="name">
	                    </div>

	                    <div class="form-group">
	                        <label class="form-control-label">Denominaz. <span class="tx-danger">*</span></label>
	                        <input class="form-control" type="text" id="denomination" name="denomination">
	                    </div>

	                    <div class="form-group">
                            <label class="form-control-label">Compagnia</label>
                            <div class="input-group">
                                <input class="form-control" type="text" id="insurance_name" disabled="disabled">
                                <input class="form-control" type="hidden" id="insuranceID" name="insuranceID">
                                <button type="button" class="btn btn-info" id="insuranceListBtn" data-toggle="modal" data-target="#modalinsuranceList"><i class="icon ion-ios-list"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon ion-plus"></i></button>
                            </div>

                            <div id="modalinsuranceList" class="modal fade">
	                            <div class="modal-dialog modal-lg" style="width: 800px;">
	                                <div class="modal-content">
	                                    <div class="modal-header pd-x-20">
	                                        <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Archivio Compagnie Assicurative</h6>
	                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                                        <span aria-hidden="true">×</span>
	                                        </button>
	                                    </div>
	                                    <div class="modal-body pd-20">
	                                        <table class="table table-hover" id="insurancesListTable"  style="width:100%">
	                                            <thead>
	                                                <tr>
	                                                    <th>Nome</th>
	                                                    <th>Email</th>
	                                                </tr>
	                                            </thead>
	                                        </table>
	                                    </div><!-- modal-body -->
	                                </div>
	                            </div><!-- modal-dialog -->
	                        </div>
                        </div>

                    	<div class="form-group">
                    		<label class="form-control-label">Indirizzo <span class="tx-danger">*</span></label>
                    		<input class="form-control" type="text" id="address" name="address">
                    	</div>

	                    <div class="row">
		                    <div class="col-lg-4">
		                    	<div class="form-group">
		                    		<label class="form-control-label">CAP <span class="tx-danger">*</span></label>
		                    		<input class="form-control" type="text" id="cap" name="cap">
		                    	</div>
		                    </div>

		                    <div class="col-lg-8">
		                    	<div class="form-group">
		                    		<label class="form-control-label">Località <span class="tx-danger">*</span></label>
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

	                    <div class="row">
	                    	<div class="col-lg-12">
								<label class="section-title">Orari di Ricevimento</label>
	                    	</div>
	                    	<div class="col-lg-6">
	                    		<label class="form-control-label">PUBBLICO</label>
	                    		<table class="table">
	                    			<tbody>
	                    				<tr>
	                    					<td width="1">LUN</td>
	                    					<td><input class="form-control" type="text" id="timeTable_pub1" name="timeTable_pub1"></td>
	                    				</tr>
	                    				<tr>
	                    					<td width="1">MAR</td>
	                    					<td><input class="form-control" type="text" id="timeTable_pub2" name="timeTable_pub2"></td>
	                    				</tr>
	                    				<tr>
	                    					<td width="1">MER</td>
	                    					<td><input class="form-control" type="text" id="timeTable_pub3" name="timeTable_pub3"></td>
	                    				</tr>
	                    				<tr>
	                    					<td width="1">GIO</td>
	                    					<td><input class="form-control" type="text" id="timeTable_pub4" name="timeTable_pub4"></td>
	                    				</tr>
	                    				<tr>
	                    					<td width="1">VEN</td>
	                    					<td><input class="form-control" type="text" id="timeTable_pub5" name="timeTable_pub5"></td>
	                    				</tr>
	                    			</tbody>
	                    		</table>
	                    	</div>
	                    	<div class="col-lg-6">
	                    		<label class="form-control-label">TELEFONO</label>
	                    		<table class="table">
	                    			<tbody>
	                    				<tr>
	                    					<td><input class="form-control" type="text" id="timeTable_tel1" name="timeTable_tel1"></td>
	                    				</tr>
	                    				<tr>
	                    					<td><input class="form-control" type="text" id="timeTable_tel2" name="timeTable_tel2"></td>
	                    				</tr>
	                    				<tr>
	                    					<td><input class="form-control" type="text" id="timeTable_tel3" name="timeTable_tel3"></td>
	                    				</tr>
	                    				<tr>
	                    					<td><input class="form-control" type="text" id="timeTable_tel4" name="timeTable_tel4"></td>
	                    				</tr>
	                    				<tr>
	                    					<td><input class="form-control" type="text" id="timeTable_tel5" name="timeTable_tel5"></td>
	                    				</tr>
	                    			</tbody>
	                    		</table>
	                    	</div>
	                    </div>

	                    <div class="form-group mg-t-20">
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
			$("#insuranceListBtn").click(function(){
		        var table = $('#insurancesListTable').DataTable({
		            processing: true,
		            serverSide: true,
		            ajax: "{{route('insurance-points-insurances')}}",
		            columns: [
		                { data: 'insurance_name', name: 'insurance_name' },
		                { data: 'insurance_email', name: 'insurance_email' }
		            ],
		            bLengthChange: false,
		            language: {
		                searchPlaceholder: 'Search...',
		                sSearch: '',
		                lengthMenu: '_MENU_ items/page',
		            },
		            paging: false
		        });

		        $('#insurancesListTable tbody').on('dblclick', 'tr', function () {
		            var data = table.row( this ).data();
		            $("#insurance_name").val(data.insurance_name);
		            $("#insuranceID").val(data.insurance_ID);
		            $('#insurancesListTable tbody').html("");
		            $('#modalinsuranceList').modal('toggle');
		            table.destroy();
		            $('#insurancesListTable tbody').off('dblclick');
		        });
		        
		    });
		});
	</script>
@endsection