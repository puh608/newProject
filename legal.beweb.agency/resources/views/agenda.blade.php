@extends('layouts/default')
@section('content')
<link href="/css/responsive-calendar.css" rel="stylesheet">
<style>
    @media screen and (max-width : 768px){
        .select2-selection__arrow{
            width: 100% !important;
        }
        .select2-selection__arrow b {
            left:90% !important;
        }
        .select2-container{
            width: 100% !important;
        }
    }
    @media screen and (max-width: 480px){
        .select-mobile, .select-mobile select{
            width: 90px !important;
        }
        .modal-link-mobile{
            width: 100%;
            margin-top: 20px;
        }
        .modal::before {
            height: 10%;
        }
        #newItem{
            width: 98%;
            /*z-index: 1000000000;*/
        }
        .wd-90, .wd-90  select{
            width: 62px !important;
            margin-left: 10px !important;
        }
        .modal-dialog{
            width:98%;
        }
        .modal-body{
            padding: 1rem;
        }
        .mobile-unvisible,
        #addnewform .row:nth-child(1) > .form-group:nth-child(1){
            display:none;
        }
        #addnewform > div{
            width:100%;
            margin-left : 0px;
            margin-right: 0px;
        }
        
        #addnewform {
            /*width:90% !important;*/
        }
        .mobile-full{
            width:100% !important;
        }
        .mobile-half{
            width:45% !important;
        }
        .mobile-half span{
            width:100% !important;
        }
      
     
        .input-medium > span{
            width:100% !important;
            
        }
        .input-medium .select2-selection__arrow {
            right:15px !important;
        }
        
        
        /**/
        .select2-selection__arrow{
            width: 100% !important;
        }
        .select2-selection__arrow b {
            left:90% !important;
        }
        .select2-container{
            width: 100% !important;
        }
    }
    
    
</style>
<div class="container" id="container">
    <div class="slim-pageheader">
      <ol class="breadcrumb slim-breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Forms</a></li>
        <li class="breadcrumb-item active" aria-current="page">Form Layouts</li>
      </ol>
      <h6 class="slim-pagetitle">Agenda Calendar Detials</h6>
    </div>
    <div class="section-wrapper" >
        <!-- Responsive calendar - START -->
        <div class="responsive-calendar">
            <div class="controls">
                <div class="row">
                    <div class="col-md-2 col-sm-12 col-12 mg-b-5"  >
                    <select id="select_month" class="form-control" data-placeholder="Choose one" >
                        <option value="01" <?php echo $selmonth == '1' ? 'selected' : ''?>>Gennaio</option>
                        <option value="02" <?php echo $selmonth == '2' ? 'selected' : ''?>>Febbraio</option>
                        <option value="03" <?php echo $selmonth == '3' ? 'selected' : ''?>>Marzo</option>
                        <option value="04" <?php echo $selmonth == '4' ? 'selected' : ''?>>Aprile</option>
                        <option value="05" <?php echo $selmonth == '5' ? 'selected' : ''?>>Maggio</option>
                        <option value="06" <?php echo $selmonth == '6' ? 'selected' : ''?>>Giugno</option>
                        <option value="07" <?php echo $selmonth == '7' ? 'selected' : ''?>>Luglio</option>
                        <option value="08" <?php echo $selmonth == '8' ? 'selected' : ''?>>Agosto</option>
                        <option value="09" <?php echo $selmonth == '9' ? 'selected' : ''?>>Settembre</option>
                        <option value="10" <?php echo $selmonth == '10' ? 'selected' : ''?>>Ottobre</option>
                        <option value="11" <?php echo $selmonth == '11' ? 'selected' : ''?>>Novembre</option>    
                        <option value="12" <?php echo $selmonth == '12' ? 'selected' : ''?>>Dicembre</option>
                    </select>
                    </div>
                    <div class="col-md-2 col-sm-12 col-12 mg-b-5"  >
                    <select id="select_year" class="form-control " data-placeholder="Choose one">
                        @for ($i = 2010; $i < 2030; $i++)
                            <option value="{{$i}}" <?php echo $selyear == $i ? 'selected' : ''?>>{{$i}}</option>
                        @endfor
                    </select>
                    </div>
                    <div class="col-md-3 col-sm-12 col-12 mg-b-5"  >
                        <select id="agency_ID"  class="form-control " disabled="disabled">
                        @foreach ($agencies as $agency)
                            <option value="{{$agency['agency_ID']}}" <?php echo $agency['agency_ID'] == Session::get('useragencyid') ? 'selected' : ''?>>{{$agency['agency_name']}}</option>
                        @endforeach
                    </select>
                    </div>
                    <div class="col-md-2 col-sm-12 col-12 mg-b-5"  >
                        <a href="" class="btn btn-primary" data-toggle="modal" data-target="#newItem">Nuovo Promemoria</a>
                    </div>
                </div><!-- row -->
            </div>
            <br>
            <div class="day-headers">
                <div class="day header">LUN</div>
                <div class="day header">MAR</div>
                <div class="day header">MER</div>
                <div class="day header">GIO</div>
                <div class="day header">VEN</div>
                <div class="day header">SAB</div>
                <div class="day header">DOM</div>
            </div>
            <div class="days" data-group="days">

            </div>
        </div>
        <!-- Responsive calendar - END -->
    </div>
    <div id="editdiv"></div>
</div>
<div id="newItem" class="modal fade">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content  tx-size-sm">
            <div class="modal-header pd-x-20">
              <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Promemoria Personali</h6>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body pd-20">
              <form id="addnewform">
                  <input type="hidden" id="_token" name="_token" value="{{csrf_token()}}">
                  <div class="row mg-b-25">
                    <div class=" col-md-4 col-sm-12 col-12">
                      <div class="form-group">
                        <label class="form-control-label">Data: <span class="tx-danger">*</span></label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <div class="input-group-text">
                              <i class="icon ion-calendar tx-16 lh-0 op-6"></i>
                            </div>
                          </div>
                            <input type="text" autocomplete="off" id="notedate" name="notedate" required="required" class="form-control fc-datepicker" placeholder="DD/MM/YYYY">
                        </div>

                      </div>
                    </div><!-- wd-150 -->
                    <div class="col-md-2 col-sm-6 col-6">
                      <div class="form-group mg-b-10-force">
                        <label class="form-control-label">Dalle: <span class="tx-danger">*</span></label>
                        <select name="statTime1" class="form-control ">
                          @for ($i = 0; $i < 24; $i++)
                              <option value="{{addzero($i)}}">{{addzero($i)}}</option>
                          @endfor
                        </select>
                      </div>
                    </div><!-- wd-90 mg-l-10 -->
                    <!--<div class="form-group mobile-unvisible"> &nbsp;&nbsp; </div>-->
                    <div class=" col-md-2 col-sm-6 col-6">
                      <div class="form-group mg-b-10-force">
                        <label class="form-control-label" style="width:100%">&nbsp;</label>
                        <select name="statTime2" class="form-control ">
                          @for ($i = 0; $i < 60; $i=$i+5)
                              <option value="{{addzero($i)}}">{{addzero($i)}}</option>
                          @endfor
                        </select>
                      </div>
                    </div><!-- wd-90 mg-l-10 -->

                    <div class="col-md-2 col-sm-6 col-6">
                      <div class="form-group mg-b-10-force">
                        <label class="form-control-label">Alle: </label>
                        <select name="toTime1" class="form-control ">
                          @for ($i = 0; $i < 24; $i++)
                              <option value="{{addzero($i)}}">{{addzero($i)}}</option>
                          @endfor
                        </select>
                      </div>
                    </div><!-- wd-90 mg-l-10 -->
                    <!--<div class="form-group mobile-unvisible"> &nbsp;&nbsp; </div>-->
                    <div class="col-md-2 col-sm-6 col-6">
                      <div class="form-group mg-b-10-force">
                        <label class="form-control-label">&nbsp;</label>
                        <select name="toTime2" class="form-control ">
                          @for ($i = 0; $i < 60; $i=$i+5)
                              <option value="{{addzero($i)}}">{{addzero($i)}}</option>
                          @endfor
                        </select>
                      </div>
                    </div><!-- wd-90 mg-l-10 -->
                    <div class="mobile-full col-md-12 col-12">
                          <!--<div class="form-group mg-b-10-force">-->
                          <div class="form-group input-medium">
                              <label class="form-control-label" style="width: 12%">Repeti:</label>
                              <select name="repeatTypeID" class="form-control  select-85" style="" >
                              <option value="0">mai</option>
                              <option value="1">ogni anno</option>
                              <option value="2">ogni mese</option>
                              <option value="3">ogni settimana</option>
                              <option value="4">ogni giorno</option>
                            </select>
                          </div>
                    </div><!-- col-4 -->
                    <div class="col-md-12 col-12" style="width: 100%; padding-left:15px" >
                          <div class="form-group mg-b-10-force">
                            <label class="form-control-label">Descrizione: <span class="tx-danger">*</span></label>
                            <textarea id="notedescription" name="notedescription" rows="2" class="form-control" placeholder=""></textarea>
                          </div>
                    </div><!-- col-4 -->
                    <div class="col-md-12 col-12">
                        <label class="ckbox">
                            <input type="checkbox" name="isSecretary" value="1"><span>DI COMPETENZA DELLA SEGRETERIA</span>
                        </label>
                    </div>
                  </div><!-- row -->

              </form>
            </div><!--modal-body-->
            <div class="modal-footer">
                <button type="button" id="addnewbtn" class="btn btn-primary" >Azioni</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Chiudi</button>
            </div>
        </div>
    </div>
</div>
    <!-- MODAL ALERT MESSAGE -->
    <div id="successmodal" class="modal fade">
      <div class="modal-dialog" role="document">
        <div class="modal-content tx-size-sm">
          <div class="modal-body tx-center pd-y-20 pd-x-20">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <i class="icon ion-ios-checkmark-outline tx-100 tx-success lh-1 mg-t-20 d-inline-block"></i>
            <h4 class="tx-success tx-semibold mg-b-20">Le modifiche sono state salvate con successo!</h4>
            <p class="mg-b-20 mg-x-20">Salvataggio Modifiche</p>
            <button type="button" class="btn btn-success pd-x-25" data-dismiss="modal">OK</button>
          </div><!-- modal-body -->
        </div><!-- modal-content -->
      </div><!-- modal-dialog -->
    </div><!-- modal -->
    <!-- MODAL ALERT MESSAGE -->
    <div id="editedmodal" class="modal fade">
      <div class="modal-dialog" role="document">
        <div class="modal-content tx-size-sm">
          <div class="modal-body tx-center pd-y-20 pd-x-20">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <i class="icon ion-ios-checkmark-outline tx-100 tx-success lh-1 mg-t-20 d-inline-block"></i>
            <h4 class="tx-success tx-semibold mg-b-20">Le modifiche sono state salvate con successo!</h4>
            <p class="mg-b-20 mg-x-20">Salvataggio Modifiche</p>
            <button type="button" class="btn btn-success pd-x-25" data-dismiss="modal">OK</button>
          </div><!-- modal-body -->
        </div><!-- modal-content -->
      </div><!-- modal-dialog -->
    </div><!-- modal -->
    <div id="errormodal" class="modal fade">
      <div class="modal-dialog" role="document">
        <div class="modal-content tx-size-sm">
          <div class="modal-body tx-center pd-y-20 pd-x-20">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <i class="icon icon ion-ios-close-outline tx-100 tx-danger lh-1 mg-t-20 d-inline-block"></i>
            <h4 class="tx-danger mg-b-20">Error: Cannot process your entry!</h4>
            <p class="mg-b-20 mg-x-20">Please check all input field.</p>
            <button type="button" class="btn btn-danger pd-x-25" data-dismiss="modal" aria-label="Close">Continue</button>
          </div><!-- modal-body -->
        </div><!-- modal-content -->
      </div><!-- modal-dialog -->
    </div><!-- modal -->
    <!-- SMALL MODAL -->
    <div id="deleteconfirm_modal" class="modal fade">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content bd-0 tx-14">
          <div class="modal-header pd-x-20">
            <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Notice</h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body pd-20">
              <p class="mg-b-5">Una volta Eliminato il Promemoria non potrà più essere recuperato!</p>
              <p><h3>ATTENZIONE:</h3> Eliminando questo promemoria verranno anche eliminate tutte le ricorrenze.Le ricorrenze passate saranno nascoste automaticamente senza bisogno di eliminare il promemoria.Continuare comunque? </p>
          </div>
          <div class="modal-footer justify-content-center">
              <button type="button" class="btn btn-primary" onclick="deletenoteconfirm()">Si</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
          </div>
        </div>
      </div><!-- modal-dialog -->
    </div><!-- modal -->
        <script>
        var agenda_calendar;
        function show_calendar(){
            $("#editdiv").empty(); 
            $.get("{{route('getagendamonth')}}",{year:$('#select_year').val(),month:$('#select_month').val()},function(data){
                agenda_calendar=$(".responsive-calendar").responsiveCalendar({
                    onDayClick: function(events) {
                        $("#editdiv").empty(); 
                        $.getJSON( "{{route('getcalendarnote')}}",{calendarnote_ids:$(this).data('calendarnote_ids'),agency_ID:$('#agency_ID').val()}, function(data) {
                            $.each( data, function( key, val ) {
                                var newDiv="<div class='section-wrapper mg-t-20' id='section-wrapper_"+val.calendarNote_ID+"'><div class='form-layout'>";
                                newDiv+="<div style='width:100%;display:inline-flex'><label class='section-title'>"+val.calendarNote_fromTime+"-"+val.calendarNote_toTime+"</label>";
                                newDiv+="<label class='section' style='margin-left:auto;margin-right:0px; margin-top:0;'>"+get_repeattype_str(val.calendarNote_date,val.calendarNote_repeatTypeID,val.calendarNote_weekDay)+"</label></div>";
                                newDiv+="<div class='row'><div class='col-md-4 col-sm-12 col-12'><div class='form-group'>";
                                newDiv+="<label class='form-control-label'>Data: <span class='tx-danger'>*</span></label>";
                                newDiv+="<div class='input-group'><div class='input-group-prepend'><div class='input-group-text'>";
                                newDiv+="<i class='icon ion-calendar tx-16 lh-0 op-6'></i></div></div>";
                                newDiv+="<input type='text' id='notedate_"+val.calendarNote_ID+"' value='"+val.calendarNote_date+"' name='notedate_"+val.calendarNote_ID+"' required='required' class='form-control fc-datepicker' placeholder='DD/MM/YYYY'>";
                                newDiv+="</div></div></div>";//wd-200
                                newDiv+="<div class='col-md-2 col-sm-6 col-6'><div class='form-group mg-b-10-force'><label class='form-control-label'>Dalle: <span class='tx-danger'>*</span></label>";
                                newDiv+="<select id='statTime1_"+val.calendarNote_ID+"' name='statTime1_"+val.calendarNote_ID+"' class='form-control'>";
                                @for ($i = 0; $i < 23; $i++)
                                    newDiv+="<option value='{{addzero($i)}}'>{{addzero($i)}}</option>";
                                @endfor
                                newDiv+="</select></div></div>";//<!-- col-md-12 col-12 -->


                                newDiv+="<div class='col-md-2 col-sm-6 col-6'><div class='form-group mg-b-10-force'><label class='form-control-label'>&nbsp;</label>";
                                newDiv+="<select id='statTime2_"+val.calendarNote_ID+"' name='statTime2_"+val.calendarNote_ID+"' class='form-control'>";
                                @for ($i = 0; $i < 60; $i=$i+5)
                                    newDiv+="<option value='{{addzero($i)}}'>{{addzero($i)}}</option>";
                                @endfor
                                newDiv+="</select></div></div>";//<!-- col-md-12 col-12 -->

                                newDiv+="<div class='col-md-2 col-sm-6 col-6'><div class='form-group mg-b-10-force'><label class='form-control-label'>Alle: </label>";
                                newDiv+="<select id='toTime1_"+val.calendarNote_ID+"' name='toTime1_"+val.calendarNote_ID+"' class='form-control'>";
                                @for ($i = 0; $i < 23; $i++)
                                    newDiv+="<option value='{{addzero($i)}}'>{{addzero($i)}}</option>";
                                @endfor                    
                                newDiv+="</select></div></div>";//<!-- col-md-2 col-sm-6 col-6 -->

                                newDiv+="<div class='col-md-2 col-sm-6 col-6'><div class='form-group mg-b-10-force'><label class='form-control-label'>&nbsp;</label>";
                                newDiv+="<select id='toTime2_"+val.calendarNote_ID+"' name='toTime2_"+val.calendarNote_ID+"' class='form-control'>";
                                @for ($i = 0; $i < 60; $i=$i+5)
                                    newDiv+="<option value='{{addzero($i)}}'>{{addzero($i)}}</option>";
                                @endfor
                                newDiv+="</select></div></div>";//<!-- col-md-12 col-12 -->
                                newDiv+="<div class='mobile-full col-md-12 col-12'><div class='form-group input-medium'>";
                                newDiv+="<label class='form-control-label' style='width: 12%'>Repeti:</label>";
                                newDiv+="<select id='repeatTypeID_"+val.calendarNote_ID+"' name='repeatTypeID_'"+val.calendarNote_ID+" class='form-control  select-85'>";
                                newDiv+="<option value='0'>mai</option><option value='1'>ogni anno</option><option value='2'>ogni mese</option><option value='3'>ogni settimana</option><option value='4'>ogni giorno</option>";
                                newDiv+="</select></div></div>";
                                newDiv+="<div class='col-md-12 col-12' style='width: 100%; padding-left:15px' ><div class='form-group mg-b-10-force'>";
                                newDiv+="<label class='form-control-label'>Descrizione: <span class='tx-danger'>*</span></label>";
                                newDiv+="<textarea id='notedescription_"+val.calendarNote_ID+"' name='notedescription_"+val.calendarNote_ID+"' rows='2' class='form-control' placeholder=''>"+val.calendarNote_description+"</textarea>";
                                newDiv+="</div></div>";
                                newDiv+="<div class='col-md-12 col-12'>";
                                newDiv+="<label class='ckbox'>";
                                newDiv+="<input type='checkbox' id='isSecretary_"+val.calendarNote_ID+"' name='isSecretary_"+val.calendarNote_ID+"' value='"+val.calendarNote_isSecretary+"'><span>DI COMPETENZA DELLA SEGRETERIA</span>";
                                newDiv+="</label>";
                                newDiv+="</div>";//<!-- col-md-12 col-12 -->
                                newDiv+="</div>";//<!-- row -->
                                newDiv+="<div class='form-layout-footer'><button class='btn btn-primary bd-0' onclick='editnote("+val.calendarNote_ID+")'>azioni</button><button class='btn btn-secondary mg-l-10 bd-0' onclick='deletenote("+val.calendarNote_ID+")'>Elimina</button></div>";
                                newDiv+="</div></div>";
                                
                                $(newDiv).appendTo("#editdiv");
                                $("html, body").animate({ scrollTop: $('#editdiv').offset().top }, "slow");
                                $("#statTime1_"+val.calendarNote_ID).val(val.calendarNote_fromTime.split(":")[0]);
                                $("#statTime2_"+val.calendarNote_ID).val(val.calendarNote_fromTime.split(":")[1]);
                                $("#toTime1_"+val.calendarNote_ID).val(val.calendarNote_toTime.split(":")[0]);
                                $("#toTime2_"+val.calendarNote_ID).val(val.calendarNote_toTime.split(":")[1]);
                                $("#repeatTypeID_"+val.calendarNote_ID).val(val.calendarNote_repeatTypeID);
                                if(val.calendarNote_isSecretary==1){
                                    $("#isSecretary_"+val.calendarNote_ID).prop("checked", true);
                                }
                            });
                            $('.fc-datepicker').datepicker({
                                showOtherMonths: true,
                                selectOtherMonths: true,
                                dateFormat: 'dd/mm/yy'
                            });
                        });
                    },//ondayclick
                    time: $('#select_year').val()+'-'+$('#select_month').val(),
                    events: JSON.parse(data)
                });//responsiveCalendar
            });//$.get()
        }//showcalenda
        function addZero(i){
            if(i<10)return '0'+i;
            else return i;
        }
        function addNew(){
            if($('#notedate').val()==''||$('#notedescrption').val()==''){
                $('#errormodal').modal('show');
                return;
            }
            $.post( "{{route('addagenda')}}", $( "#addnewform" ).serialize(),function(data){
                if(data=='success'){
                    $('#newItem').modal('hide');
                    show_calendar();
                    $('#successmodal').modal('show');
                }else{
                    $('#errormodal').modal('show');
                }
            });
        }
        function editnote(calendarNote_ID){
            var postdata={
                _token:$('#_token').val(),
                calendarNote_ID:calendarNote_ID,
                calendarNote_date:$('#notedate_'+calendarNote_ID).val(),
                calendarNote_fromTime:$('#statTime1_'+calendarNote_ID).val()+":"+$('#statTime2_'+calendarNote_ID).val(),
                calendarNote_toTime:$('#toTime1_'+calendarNote_ID).val()+":"+$('#toTime1_'+calendarNote_ID).val(),
                calendarNote_repeatTypeID:$('#repeatTypeID_'+calendarNote_ID).val(),
                calendarNote_description:$('#notedescription_'+calendarNote_ID).val(),
                calendarNote_isSecretary:$('#isSecretary_'+calendarNote_ID).val()
            }
            $.post( "{{route('editagenda')}}", postdata,function(data){
                if(data=='success'){                    
                    $('#editedmodal').modal('show');
                    show_calendar();
                }else{
                    $('#errormodal').modal('show');
                }
            });
        }
        function deletenote(calendarNote_ID){
            selected_calendarNote_ID=calendarNote_ID;
            $('#deleteconfirm_modal').modal('show');
            //show_calendar();
        }
        var selected_calendarNote_ID=0;
        function deletenoteconfirm(){
            $('#deleteconfirm_modal').modal('hide');
            $.post( "{{route('deleteagenda')}}", {_token:$('#_token').val(),calendarNote_ID:selected_calendarNote_ID},function(data){
                if(data=='success'){                    
                    $('#section-wrapper_'+selected_calendarNote_ID).remove();
                    show_calendar(false);
                }else{
                    $('#errormodal').modal('show');
                }
            });
        }
        function change_month(){
            //location.href="{{route('agenda')}}?year="+$('#select_year').val()+"&month="+$('#select_month').val();
            show_calendar();
        }
        var months_list= {01:"Gennaio", 02:"Febbraio", 03:"Marzo", 04:"Aprile", 05:"Maggio", 06:"Giugno", 07:"Luglio", 08:"Agosto", 09:"Settembre", 10:"Ottobre", 11:"Novembre", 12:"Dicembre"};
        var weekDaysList=['tutte le domeniche','tutti i lunedì','tutti i martedì','tutti i mercoledì','tutti i giovedì','tutti i venerdì','tutti i sabato'];
        function get_repeattype_str(date_str,repeat_type_id,weekDay){
            switch(repeat_type_id){
            case 0: ///// MAI
                    return "(Visibile sull'Agenda esclusivamente il " + date_str + ")";
            case 1: ///// OGNI ANNO
                    return "(Visibile sull'Agenda il " + date_str + " " + months_list[date_str.split("/")[1]] + " di tutti gli anni)";
            case 2: ///// OGNI MESE
                    return "(Visibile sull'Agenda il " + date_str + " di tutti i mesi)";
            case 3: ///// OGNI SETTIMANA
                    return "(Visibile sull'Agenda " + weekDaysList[weekDay] + ")";
                    break;
            case 4: ///// OGNI GIORNO
                    return "(Visibile sull'Agenda tutti i giorni)";
                    break;
    }
        }
        $(document).ready(function () {
            
            $('#addnewbtn').click(addNew);
            $('#select_month').change(change_month);
            $('#select_year').change(change_month);
            show_calendar();
            
        // Datepicker
        $('.fc-datepicker').datepicker({
          showOtherMonths: true,
          selectOtherMonths: true,
          dateFormat: 'dd/mm/yy'
        });
        
        
      });
      
        </script>
<script src="/js/responsive-calendar.js"></script>


@stop
