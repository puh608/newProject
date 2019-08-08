@extends('archive/bankagencies/layout')

@section('sub_content')
	<fieldset class="form-group">
		<form method="post" action="{{route('bankagencies-new-save')}}">
			{{ csrf_field() }}
			<div class="form-layout">
				<div class="row mg-b-25">
					<div class="col-lg-12">
	                    <div class="form-group">
	                        <label class="form-control-label">Nome <span class="tx-danger">*</span></label>
	                        <input class="form-control" type="text" id="name" name="name">
	                    </div>

	                    <div class="form-group">
	                    	<label class="form-control-label">Ist. di Credito</label>
	                    	<div class="input-group">
		                        <input class="form-control" type="text" id="bankAgency_name" disabled="disabled">
	                            <input class="form-control" type="hidden" id="bankID" name="bankID">
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
	                        <input class="form-control" type="text" id="abi" name="abi">
	                    </div>
	                    <div class="form-group">
	                        <label class="form-control-label">CAB</label>
	                        <input class="form-control" type="text" id="cab" name="cab">
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
		                    		<label class="form-control-label">Telefono</label>
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