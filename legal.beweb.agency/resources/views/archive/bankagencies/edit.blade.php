@extends('archive/bankagencies/layout')

@section('sub_content')
	<fieldset class="form-group">
		<form method="post" action="{{route('bankagencies-edit-save', ['id' => $rec->bankAgency_ID])}}">
			{{ csrf_field() }}
			<div class="form-layout">
				<div class="row mg-b-25">
					<div class="col-lg-12">
	                    <div class="form-group">
	                        <label class="form-control-label">Nome <span class="tx-danger">*</span></label>
	                        <input class="form-control" type="text" id="name" name="name" value="{{$rec->bankAgency_name}}">
	                    </div>

	                    <div class="form-group">
	                    	<label class="form-control-label">Ist. di Credito</label>
	                    	<div class="input-group">
		                        <input class="form-control" type="text" id="bankAgency_name" disabled="disabled"  value="{{@$rec->bank->bank_name}}">
	                            <input class="form-control" type="hidden" id="bankID" name="bankID" value="{{$rec->bankAgency_bankID}}">
	                            <button type="button" class="btn btn-info" id="bankAgencyListBtn" data-toggle="modal" data-target="#modalbankAgencyList"><i class="icon ion-ios-list"></i></button>
	                            <button type="button" class="btn btn-primary"><i class="icon ion-plus"></i></button>
	                        </div>

                            <div id="modalbankAgencyList" class="modal fade">
	                            <div class="modal-dialog modal-lg" style="width: 800px;">
	                                <div class="modal-content">
	                                    <div class="modal-header pd-x-20">
	                                        <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Archivio Banche</h6>
	                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                                        <span aria-hidden="true">×</span>
	                                        </button>
	                                    </div>
	                                    <div class="modal-body pd-20">
	                                        <table class="table table-hover" id="bankAgencyListTable"  style="width:100%">
	                                            <thead>
	                                                <tr>
	                                                    <th>Nome</th>
	                                                    <th>Localita</th>
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
	                        <label class="form-control-label">ABI</label>
	                        <input class="form-control" type="text" id="abi" name="abi" value="{{$rec->bankAgency_abi}}">
	                    </div>
	                    <div class="form-group">
	                        <label class="form-control-label">CAB</label>
	                        <input class="form-control" type="text" id="cab" name="cab" value="{{$rec->bankAgency_cab}}">
	                    </div>

	                    <div class="form-group">
	                        <label class="form-control-label">Indirizzo</label>
	                        <input class="form-control" type="text" id="address" name="address" value="{{$rec->bankAgency_address}}">
	                    </div>

	                    <div class="row">
		                    <div class="col-lg-4">
		                    	<div class="form-group">
		                    		<label class="form-control-label">CAP</label>
		                    		<input class="form-control" type="text" id="cap" name="cap" value="{{$rec->bankAgency_cap}}">
		                    	</div>
		                    </div>

		                    <div class="col-lg-8">
		                    	<div class="form-group">
		                    		<label class="form-control-label">Località</label>
		                    		<input class="form-control" type="text" id="location" name="location" value="{{$rec->bankAgency_location}}">
		                    	</div>
		                    </div>
	                    </div>

	                    <div class="row">
		                    <div class="col-lg-6">
		                    	<div class="form-group">
		                    		<label class="form-control-label">Telefono</label>
		                    		<input class="form-control" type="text" id="telephone1" name="telephone1" value="{{$rec->bankAgency_telephone1}}">
		                    	</div>
		                    </div>

		                    <div class="col-lg-6">
		                    	<div class="form-group">
		                    		<label class="form-control-label">Telefono Alternativo</label>
		                    		<input class="form-control" type="text" id="telephone2" name="telephone2" value="{{$rec->bankAgency_telephone2}}">
		                    	</div>
		                    </div>
	                    </div>

	                    <div class="row">
		                    <div class="col-lg-7">
		                    	<div class="form-group">
		                    		<label class="form-control-label">Email</label>
		                    		<input class="form-control" type="text" id="email" name="email" value="{{$rec->bankAgency_email}}">
		                    	</div>
		                    </div>

		                    <div class="col-lg-5">
		                    	<div class="form-group">
		                    		<label class="form-control-label">Fax</label>
		                    		<input class="form-control" type="text" id="fax" name="fax" value="{{$rec->bankAgency_fax}}">
		                    	</div>
		                    </div>
	                    </div>

	                    <div class="form-group">
	                		<label class="form-control-label">Note </label>
	                    	<textarea rows="3" name="notes" id="notes" class="form-control" placeholder="">{{$rec->bankAgency_notes}}</textarea>
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
			$("#bankAgencyListBtn").click(function(){
		        var table = $('#bankAgencyListTable').DataTable({
		            processing: true,
		            serverSide: true,
		            ajax: "{{route('bankagencies-banks')}}",
		            columns: [
		                { data: 'bank_name', name: 'bank_name' },
		                { data: 'bank_email', name: 'bank_email' },
		                { data: 'bank_location', name: 'bank_location' }
		            ],
		            bLengthChange: false,
		            language: {
		                searchPlaceholder: 'Search...',
		                sSearch: '',
		                lengthMenu: '_MENU_ items/page',
		            },
		            paging: false
		        });

		        $('#bankAgencyListTable tbody').on('dblclick', 'tr', function () {
		            var data = table.row( this ).data();
		            $("#bankAgency_name").val(data.bank_name);
		            $("#bankID").val(data.bank_ID);
		            $('#bankAgencyListTable tbody').html("");
		            $('#modalbankAgencyList').modal('toggle');
		            table.destroy();
		            $('#bankAgencyListTable tbody').off('dblclick');
		        });
		        
		    });
		});
	</script>
@endsection