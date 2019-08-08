@extends('layouts/default')

@section('content')
<?php 
/*if($fb=fopen("debug.txt","w")){
	fwrite($fb,print_r(json_encode($archiveManager_users),true));
	fclose($fb);
}*/
?>
<div class="container" id="container">
    <div class="slim-pageheader">
        <ol class="breadcrumb slim-breadcrumb">
            <li class="breadcrumb-item"><a href="/home">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Home</li>
        </ol>
        <h6 class="slim-pagetitle">Pratica</h6>
    </div>
    <div class="section-wrapper">
        <label class="section-title">Sezione Dati Agenzia</label>
        <fieldset class="form-group">
            <legend class="col-form-label">PRATICA</legend>
            <div class="form-layout">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">Numero <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" id="shortNumber" name="shortNumber" disabled="disabled">
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label"><span id="requestDateLabel">Data Richiesta Risarcimento</span><span class="tx-danger">*</span></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="icon ion-calendar tx-16 lh-0 op-6"></i>
                                    </div>
                                </div>
                                <input type="text" autocomplete="off" id="requestDate" name="requestDate" required="required" class="form-control fc-datepicker" placeholder="DD/MM/YYYY">
                                <button type="button" id="requestDateAlarm" class="btn btn-info" disabled><i class="icon ion-ios-alarm"></i><span>off</span></button>
                            </div>
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-4" id="hgrp_deliveryDate">
                        <div class="form-group">
                            <label class="form-control-label">Data Ricevuta Richiesta<span class="tx-danger">*</span></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="icon ion-calendar tx-16 lh-0 op-6"></i>
                                    </div>
                                </div>
                                <input type="text" autocomplete="off" id="deliveryDate" name="deliveryDate" required="required" class="form-control fc-datepicker" placeholder="DD/MM/YYYY">
                                <button type="button" id="deliveryDateAlarm" class="btn btn-info" disabled><i class="icon ion-ios-alarm"></i><span>off</span></button>
                            </div>
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-8">
                        <div class="form-group">
                            <label class="form-control-label">Tipologia <span class="tx-danger">*</span></label>
                            <select name="typeID" id="typeID" class="form-control ">
                                @for ($i = 0; $i < count($PRACTICE_TYPES_LIST); $i++)
                                    <option value="{{$i}}">{{$PRACTICE_TYPES_LIST[$i]}}</option>
                                @endfor
                            </select>
                        </div>
                    </div><!-- col-8 -->
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">&nbsp</label>
                            <button type="button" class="btn btn-primary form-control" click="openDocuments()" disabled>FASCICOLO</button>
                        </div>
                    </div><!-- col-4 -->
                    
                    <div class="col-lg-12" id="hgrp_management" style="display: none;">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">Gestione <span class="tx-danger">*</span></label>
                                    <select name="managementTypeID" id="managementTypeID" class="form-control">
                                        @for ($i = 0; $i < count($PRACTICE_MANAGEMENT_TYPES_LIST); $i++)
                                            <option value="{{$i}}">{{$PRACTICE_MANAGEMENT_TYPES_LIST[$i]}}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6" id="hgrp_complaint" style="display: none;">
                                <div class="form-group">
                                    <label class="form-control-label">Data Denuncia all'Agenzia di Polizza</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="icon ion-calendar tx-16 lh-0 op-6"></i>
                                            </div>
                                        </div>
                                        <input type="text" autocomplete="off" id="complaintDate" name="complaintDate" required="required" class="form-control fc-datepicker" placeholder="DD/MM/YYYY">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8" id="hgrp_managementCl" style="display: none;">
                        <div class="form-group">
                            <label class="form-control-label">Ambito</label>
                            <select name="managementClTypeID" id="managementClTypeID" class="form-control ">
                                @for ($i = 0; $i < count($PRACTICE_MANAGEMENTCL_TYPES_LIST); $i++)
                                    <option value="{{$i}}">{{$PRACTICE_MANAGEMENTCL_TYPES_LIST[$i]}}</option>
                                @endfor
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-8" id="hgrp_managementAb" style="display: none;">
                        <div class="form-group">
                            <label class="form-control-label">Ambito</label>
                            <select name="managementAbTypeID" id="managementAbTypeID" class="form-control ">
                                @for ($i = 0; $i < count($PRACTICE_MANAGEMENTAB_TYPES_LIST); $i++)
                                    <option value="{{$i}}">{{$PRACTICE_MANAGEMENTAB_TYPES_LIST[$i]}}</option>
                                @endfor
                            </select>
                        </div>
                    </div>
                    
                </div><!-- row -->
            </div><!-- form-layout -->
        </fieldset>
        
        <fieldset class="form-group">
            <legend class="col-form-label">STATO</legend>
            <div class="form-layout">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">Descrizione</label>
                            <select name="statusTypeID" id="statusTypeID" class="form-control">
                            </select>
                        </div>
                    </div><!-- col-12 -->
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">Note </label>
                            <textarea rows="3" name="statusDescription" id="statusDescription" class="form-control" placeholder=""></textarea>
                        </div>
                    </div><!-- col-12 -->
                    
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">Inserita da </label>
                            <select name="tip_ownerID" id="tip_ownerID" class="form-control ">
                                <!-- archiveAgencies -->
                            </select>
                        </div>
                    </div><!-- col-8 -->
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">&nbsp;</label>
                            <div class="input-group">
                                &nbsp;
                            </div>
                        </div>
                    </div><!-- col-6 -->
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">Gestita da </label>
                            <select name="managerID" id="managerID" class="form-control">
                                <option></option>
                                @foreach ($archiveManagers as $manager))
                                    <option value="{{$manager->agency_ID}}">{{$manager->agency_name."(".$manager->type->externalValue_value.")"}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div><!-- col-6 -->
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">&nbsp; </label>
                            <select name="managerUserID" id="managerUserID" class="form-control ">
                            </select>
                        </div>
                    </div><!-- col-6 -->
                    <div class="col-lg-8">
                        <div class="form-group">
                            <label class="form-control-label">Segnalata da </label>
                            <div class="input-group">
                                <input class="form-control" type="text" id="getter_name" name="getter_name" disabled="disabled">
                                <input class="form-control" type="hidden" id="getterID" name="getterID">
                                <button type="button" class="btn btn-info" id="getterListBtn" data-toggle="modal" data-target="#modalGetterList"><i class="icon ion-ios-list"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon ion-plus"></i></button>
                            </div>
                        </div>

                        <div id="modalGetterList" class="modal fade show">
                            <div class="modal-dialog modal-lg" style="width: 800px;">
                                <div class="modal-content">
                                    <div class="modal-header pd-x-20">
                                        <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Archivio Segnalatori</h6>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body pd-20">
                                        <table class="table table-hover" id="gettersListTable"  style="width:100%">
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
                    </div><!-- col-8 -->
                </div><!-- row -->
            </div><!-- form-layout -->
        </fieldset>

        <label class="section-title">Sezione Dati Clienti</label>

        <fieldset class="form-group">
            <legend class="col-form-label">CLIENTE</legend>
            <div class="form-layout">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">Tipoligia</label>
                            <select name="customerTypeID" id="customerTypeID" class="form-control"></select>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">Aggiungi</label>
                            <div class="input-group">
                                <select name="customerPersonTypeID" id="customerPersonTypeID" class="form-control"></select>
                                <button type="button" class="btn btn-primary" id="addPersonBtn" disabled><i class="icon ion-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </fieldset>

        <div id="vgrp_customerPeople" style="display: none;"></div>


    </div>
</div>

<script type="text/javascript">
    var archiveManagers={!!json_encode($archiveManagers)!!};

    var PRACTICE_PART_TYPES_LIST = {!!json_encode($PRACTICE_PART_TYPES_LIST)!!};
    var PRACTICE_PERSON_TYPES_LIST = {!!json_encode($PRACTICE_PERSON_TYPES_LIST)!!};
    var PRACTICE_PERSON_PG_LIST = {!!json_encode($PRACTICE_PERSON_PG_LIST)!!};
    var PRACTICE_PERSON_DAMAGE_TYPES_LIST = {!!json_encode($PRACTICE_PERSON_DAMAGE_TYPES_LIST)!!};
  
    function setStatus(){
        //$('#tip_statusTypeID').val() = availableStatusTypesList[ddl_statusTypeID.selectedIndex];
    }

    var GET_GETTERS_URL = "{{route('newpractice-getgetters')}}";
    var GET_CUSTOMERS_URL = "{{route('newpractice-getcustomers')}}";
</script>

<script id="clientTemplate" type="text/x-jQuery-tmpl">
    <div style="border: 1px solid #ccc;padding: 10px;" id="customer${ID}">
        <fieldset class="form-group">
            <div class="person">
                <legend class="col-form-label">CLIENTE - ${lbl_typeName} <a href="javscript:;;" id="deletePracticeCustomerBtn${ID}" rel="${ID}" class="text-danger">[ ELIMINA ]</a></legend>
                <div class="form-layout">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="form-group">
                                <label class="form-control-label">Nome <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input class="form-control" type="text" name="customer_name${ID}" disabled="disabled">
                                    <input class="form-control" type="hidden" name="customerID${ID}">
                                    <button type="button" class="btn btn-info" id="customerListBtn${ID}" data-toggle="modal" data-target="#modalCustomerList${ID}"><i class="icon ion-ios-list"></i></button>
                                    <button type="button" class="btn btn-primary"><i class="icon ion-plus"></i></button>
                                </div>
                            </div>

                            <div id="modalCustomerList${ID}" class="modal fade show">
                                <div class="modal-dialog modal-lg" style="width: 800px;">
                                    <div class="modal-content">
                                        <div class="modal-header pd-x-20">
                                            <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Archivio Clienti</h6>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body pd-20">
                                            <table class="table table-hover" id="customersListTable${ID}"  style="width:100%">
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
                        </div><!-- col-8 -->

                        <div class="col-lg-4" id="hgrp_gotAccidentInsurance" style="display: ${hgrp_gotAccidentInsuranceShow}">
                            <div class="form-group">
                                <label class="mg-t-30"><input type="checkbox" name="gotAccidentInsurance" id="gotAccidentInsurance">${gotAccidentInsuranceLabel}</label>
                            </div>
                        </div>
                    </div>

                    <div class="row" id="hgrp_documents">
                        <div class="col-lg-12">
                            <button type="button" class="btn btn-info" disabled><i class="icon ion-ios-bookmarks-outline"></i> DIARIO</button>
                            <button type="button" class="btn btn-info" disabled><i class="icon ion-calculator"></i> CONTEGGIO</button>
                            <button type="button" class="btn btn-info" disabled><i class="icon ion-cash"></i> FATTURA</button>
                            <button type="button" class="btn btn-info" disabled><i class="icon ion-folder"></i> FASCICOLO</button>
                            <button type="button" class="btn btn-info" disabled><i class="icon ion-folder"></i> FASCICOLO SPESE</button>
                        </div>
                    </div>
                </div>

                <div id="vgrp_damageStatus">
                    <legend class="col-form-label">STATO DANNO MATERIALE</legend>
                    <div class="form-layout">

                    </div>
                </div>
            </div>
        </fieldset>

        <fieldset class="form-group" id="hgrp_insurance" style="display: none;">
            <legend class="col-form-label"><span id="lbl_insuranceTypeName"></span></legend>

            <div class="form-layout">
                <div class="row">
                    <div class="col-lg-8">
                        
                    </div><!-- col-8 -->
                </div>  
            </div>
        </fieldset>
    </div>
</script>

<script type="text/javascript" src="{{asset('js/newpractice.js')}}"></script>
<script type="text/javascript" src="{{asset('js/newpractice-customer.js')}}"></script>
@stop

