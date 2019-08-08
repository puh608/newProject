$(document).ready(function(){
    $('.fc-datepicker').datepicker({
      showOtherMonths: true,
      selectOtherMonths: true,
      dateFormat: 'dd/mm/yy'
    });

    $("#requestDate").change(function(){
        var date = $(this).val().split("/");
        $("#shortNumber").val("/"+date[2]);
        setAlarm('request');
    });

    $("#complaintDate").change(function(){
        setAlarm('request');
    });

     $("#deliveryDate").change(function(){
        setAlarm('delivery');
    });

    $("#typeID").change(function(){
        checkType();
    });

    $("#managementTypeID").change(function(){
        checkManagementType();
        setAlarm('request');
    });

    $("#managerID").change(function(){
        checkManager();
    });

    $("#customerTypeID").change(function(){
        checkPartType('customer');
    });

    var itemExists = false;

    var customerTypesList           = [];
    var counterpartTypesList        = [];
    var customerTypeLabelsList      = [];
    var counterpartTypeLabelsList   = [];
    var customerPersonTypesList     = [];

    function checkType(){
        var tip_typeID = Number($("#typeID").val());

        if(tip_typeID == 1){    //RCA
            $("#hgrp_management").show();
        } else{
            $("#hgrp_management").hide();
        }
        checkManagementType();
        
        if(tip_typeID == 5){    //CL
            $("#requestDateLabel").html("Data Apertura Pratica");

            $("#hgrp_managementCl").show();
            $("#hgrp_managementAb").hide();
            $("#hgrp_deliveryDate").hide();
            
           /* hideout.addElement(hgrp_assessor);
            hideout.addElement(hgrp_eventIntervened);
            hideout.addElement(hgrp_eventIntervenedOld);*/
            
            /*hgrp_accident.height = NaN;
            vgrp_addWitnesses.height = NaN;*/
        } else if(tip_typeID == 6){  //AB
            $("#requestDateLabel").html("Data Apertura Pratica");

            $("#hgrp_managementAb").show();
            $("#hgrp_managementCl").hide();
            $("#hgrp_deliveryDate").hide();
            
            /*hideout.addElement(hgrp_assessor);
            hideout.addElement(hgrp_eventIntervened);
            hideout.addElement(hgrp_eventIntervenedOld);
            
            hgrp_accident.height = -5;
            vgrp_addWitnesses.height = -5;*/
        }else{
            $("#requestDateLabel").html("Data Richiesta Risarcimento");

            $("#hgrp_deliveryDate").show();

            $("#hgrp_managementCl").hide();
            $("#hgrp_managementAb").hide();
            
            /*hideout.addElement(hgrp_assessor);
            vgrp_main.addElementAt(hgrp_assessor,vgrp_main.numElements-1);
            vgrp_event.addElement(hgrp_eventIntervenedOld);
            vgrp_event.addElement(hgrp_eventIntervened);
            
            hgrp_accident.height = NaN;
            vgrp_addWitnesses.height = NaN;*/
        }
        checkManagementClType();
        checkManagementAbType();
        
        
        var i;
        
        switch(tip_typeID){
            case 1: //RCA
                customerTypesList       = [0,3,4,5,6,12,10,11];
                counterpartTypesList    = [0,5,6];
                break;
            case 2: //RCT
                customerTypesList       = [0,1,2,3,4,5,6,8];
                counterpartTypesList    = [0,7,8];
                break;
            case 3: //RCO
                customerTypesList       = [0,1];
                counterpartTypesList    = [0,8];
                break;
            case 4: //RE
                customerTypesList       = [0,7,8];
                counterpartTypesList    = [0,9];
                break;
            case 5: //CL
                customerTypesList       = [0,13];
                counterpartTypesList    = [0,14];
                break;
            case 6: //AB
                customerTypesList       = [0,15];
                counterpartTypesList    = [0,16];
                break;
        }
        
        customerTypeLabelsList = [];
        for(i=0; i<customerTypesList.length; i++) customerTypeLabelsList.push(PRACTICE_PART_TYPES_LIST[customerTypesList[i]]);
        $("#customerTypeID").html("");
        $.each(customerTypeLabelsList, function( index, value ) {
            $("#customerTypeID").append('<option value="'+index+'">'+value+'</option>');
        });

        counterpartTypeLabelsList = [];
        for(i=0; i<counterpartTypesList.length; i++) counterpartTypeLabelsList.push(PRACTICE_PART_TYPES_LIST[counterpartTypesList[i]]);
        
        checkPartType('customer');
        checkPartType('counterpart');
        checkPartType('counterpart_2');
        checkPartType('counterpart_3');
    }

    function checkPartType(part){
        var type;
        var field;
        var i;
        var part1 = "";
        var part2 = "";

        var tip_customerTypeID = Number($("#customerTypeID").val());

        if(part=='customer'){
            //while(vgrp_customerAdds.numElements>0) hideout.addElement(vgrp_customerAdds.getElementAt(0));
            
            if(tip_customerTypeID > -1) type = customerTypesList[tip_customerTypeID];
            part1='customer';
            part2='';
        }
        if(part=='counterpart'){
            /*while(vgrp_counterpartAdds.numElements>0) hideout.addElement(vgrp_counterpartAdds.getElementAt(0));
            
            if(tip_counterpartTypeID.selectedIndex>-1) type = counterpartTypesList[tip_counterpartTypeID.selectedIndex];
            part1='counterpart';
            part2='';*/
        }
        if(part=='counterpart_2'){
            /*while(vgrp_counterpartAdds_2.numElements>0) hideout.addElement(vgrp_counterpartAdds_2.getElementAt(0));
            
            if(tip_counterpartTypeID_2.selectedIndex>-1){
                type = counterpartTypesList[tip_counterpartTypeID_2.selectedIndex];
                if(counterpartCount<2) addCounterpart();
            }
            part1='counterpart';
            part2='_2';*/
        }
        if(part=='counterpart_3'){
            /*while(vgrp_counterpartAdds_3.numElements>0) hideout.addElement(vgrp_counterpartAdds_3.getElementAt(0));
            
            if(tip_counterpartTypeID_3.selectedIndex>-1){
                type = counterpartTypesList[tip_counterpartTypeID_3.selectedIndex];
                if(counterpartCount<3) addCounterpart();
            }
            part1='counterpart';
            part2='_3';*/
        }
        
        
        if(type){
            
            if(type == 4){ //bicyle
                /*hideout.addElement(this['hgrp_'+part1+'CarPlate'+part2]);
                (this['tip_'+part1+'CarTypeID'+part2] as DropDownList).dataProvider = new ArrayCollection(['','Bicicletta']);
                if(!itemExists){
                    (this['tip_'+part1+'CarTypeID'+part2] as DropDownList).selectedIndex = 0;
                }else{
                    if(part=='customer') (this['tip_'+part1+'CarTypeID'+part2] as DropDownList).selectedIndex = itemObject.startingValues.practice_customerCarTypeID;
                    if(part=='counterpart') (this['tip_'+part1+'CarTypeID'+part2] as DropDownList).selectedIndex = itemObject.startingValues.practice_counterpartCarTypeID;
                    if(part=='counterpart_2') (this['tip_'+part1+'CarTypeID'+part2] as DropDownList).selectedIndex = itemObject.startingValues.practice_counterpartCarTypeID_2;
                    if(part=='counterpart_3') (this['tip_'+part1+'CarTypeID'+part2] as DropDownList).selectedIndex = itemObject.startingValues.practice_counterpartCarTypeID_3;
                }*/
            } else {
                /*this['hgrp_'+part1+'VehicleData'+part2].addElement(this['hgrp_'+part1+'CarPlate'+part2]);
                (this['tip_'+part1+'CarTypeID'+part2] as DropDownList).dataProvider  = C_Globals.VEHICLE_TYPES_LIST;
                if(!itemExists){
                    (this['tip_'+part1+'CarTypeID'+part2] as DropDownList).selectedIndex = -1;
                }else{
                    if(part=='customer') (this['tip_'+part1+'CarTypeID'+part2] as DropDownList).selectedIndex = itemObject.startingValues.practice_customerCarTypeID;
                    if(part=='counterpart') (this['tip_'+part1+'CarTypeID'+part2] as DropDownList).selectedIndex = itemObject.startingValues.practice_counterpartCarTypeID;
                    if(part=='counterpart_2') (this['tip_'+part1+'CarTypeID'+part2] as DropDownList).selectedIndex = itemObject.startingValues.practice_counterpartCarTypeID_2;
                    if(part=='counterpart_3') (this['tip_'+part1+'CarTypeID'+part2] as DropDownList).selectedIndex = itemObject.startingValues.practice_counterpartCarTypeID_3;
                }*/
            }
            if(type == 4){ //bicycle
                /*itemObject.getFieldByName(part1+'CarTypeID'+part2).isNeeded = true;
                itemObject.getFieldByName(part1+'CarModel'+part2).isNeeded = true;
                itemObject.getFieldByName(part1+'CarPlate'+part2).isNeeded = false;
                itemObject.getFieldByName(part1+'InsuranceID'+part2).isNeeded = false;*/
            }else if(type == 5 || type == 6){ //plated
                /*itemObject.getFieldByName(part1+'CarTypeID'+part2).isNeeded = true;
                itemObject.getFieldByName(part1+'CarModel'+part2).isNeeded = true;
                itemObject.getFieldByName(part1+'CarPlate'+part2).isNeeded = true;*/
            } else {
                /*itemObject.getFieldByName(part1+'CarTypeID'+part2).isNeeded = false;
                itemObject.getFieldByName(part1+'CarModel'+part2).isNeeded = false;
                itemObject.getFieldByName(part1+'CarPlate'+part2).isNeeded = false;
                itemObject.getFieldByName(part1+'InsuranceID'+part2).isNeeded = false;*/
            }
            
            var personTypeIdsList;
            
            switch(type){
                case 1: // DANNEGGIATO
                    personTypeIdsList = [1];
                    if(part=='customer') personTypeIdsList = [1,11,12,13,14];
                    break;
                case 2: // DANNEGGIATO MALASANITA'
                    personTypeIdsList = [2,12,13,14];
                    break;
                case 3: // PEDONE
                    personTypeIdsList = [1,12,13,14];
                    break;
                case 4: // CICLISTA
                    personTypeIdsList = [3,5,12,13,14,15,16];
                    
                    //this['vgrp_'+part1+'Adds'+part2].addElement(this['hgrp_'+part1+'Vehicle'+part2]);
                    break;
                case 5: // TARGATO PF
                    personTypeIdsList = [3,5,6,12,13,14,15,16];
                    
                    /*this['vgrp_'+part1+'Adds'+part2].addElement(this['hgrp_'+part1+'Vehicle'+part2]);
                    this['vgrp_'+part1+'Adds'+part2].addElement(this['hgrp_'+part1+'Insurance'+part2]);
                    itemObject.getFieldByName(part1+'InsuranceID'+part2).isNeeded = false;*/
                    break;
                case 6: // TARGATO PG
                    personTypeIdsList = [4,5,6,12,13,14,15,16];
                    
                    /*this['vgrp_'+part1+'Adds'+part2].addElement(this['hgrp_'+part1+'Vehicle'+part2]);
                    this['vgrp_'+part1+'Adds'+part2].addElement(this['hgrp_'+part1+'Insurance'+part2]);
                    itemObject.getFieldByName(part1+'InsuranceID'+part2).isNeeded = false;*/
                    break;
                case 7: // PF
                    personTypeIdsList = [8,12,13,14];
                    if(part1=='customer') personTypeIdsList = [8,10];
                    
                    /*this['vgrp_'+part+'Adds'].addElement(this['hgrp_'+part+'Insurance']);
                    itemObject.getFieldByName(part+'InsuranceID').isNeeded = false;*/
                    break;
                case 8: //PG
                    personTypeIdsList = [9];
                    
                    /*this['vgrp_'+part1+'Adds'+part2].addElement(this['hgrp_'+part1+'Insurance'+part2]);
                    itemObject.getFieldByName(part1+'InsuranceID'+part2).isNeeded = false;*/
                    break;
                case 9: // ASSICURAZIONE
                    personTypeIdsList = new Array();
                    /*this['vgrp_'+part1+'Adds'+part2].addElement(this['hgrp_'+part1+'Insurance'+part2]);
                    itemObject.getFieldByName(part1+'InsuranceID'+part2).isNeeded = true;*/
                    break;
                case 10: // PROPRIETA' PRIVATA PF
                    personTypeIdsList = [3,15,16];
                    break;
                case 11: // PROPRIETA' PRIVATA PG
                    personTypeIdsList = [4,15,16];
                    break;
                case 12: // TRASPORTATO
                    personTypeIdsList = [6,12,13,14];
                    break;
                case 13: // CITANTE
                    personTypeIdsList = [17,18];
                    break;
                case 14: // CITATO
                    personTypeIdsList = [17,18,19];
                    break;
                case 15: // CONTRAENTE
                    personTypeIdsList = [20,21];
                    break;
                case 16: // CONCEDENTE
                    personTypeIdsList = [22];
                    break;
            }
            
            customerPersonTypesList = [{id:0,label:""}];
            for(var j=0; j<personTypeIdsList.length; j++){
                customerPersonTypesList.push({id: personTypeIdsList[j],label:PRACTICE_PERSON_TYPES_LIST[personTypeIdsList[j]]});
            }

            $("#customerPersonTypeID").html("");
            $.each(customerPersonTypesList, function( index, value ) {
                $("#customerPersonTypeID").append('<option value="'+value.id+'">'+value.label+'</option>');
            });
        }
    }

    function checkManagementType(){
        var tip_typeID = Number($("#typeID").val());
        var tip_managementTypeID = Number($("#managementTypeID").val());

        if(tip_typeID == 1 && (tip_managementTypeID == 1 || tip_managementTypeID == 2)){
            $("#hgrp_complaint").show();
        }else{
            $("#hgrp_complaint").hide();
        }
    }
    function checkManagementClType(){}
    function checkManagementAbType(){}

    function checkManager(){
        var val = $("#managerID").val();
        var agencyusers = [];

        $(archiveManagers).each(function( key, value ) {
            if(val == value.agency_ID){
                agencyusers = value.users;
            }
        });

        $('#managerUserID').html("");
        
        if(agencyusers){
            $(agencyusers).each(function( key, value ) {
                $('#managerUserID').append('<option value='+value.user_ID+'>'+value.user_name+'</option>')
            });
        }
    }

    $("#customerPersonTypeID").change(function(){
        if($(this).val() != "") $("#addPersonBtn").attr('disabled',false);
        else $("#addPersonBtn").attr('disabled',true);
    });

    var hgrp_gotAccidentInsuranceShow;

    var i=0;

    $("#addPersonBtn").click(function(){
        $("#vgrp_customerPeople").show();

        var practiceTypeID = Number($("#typeID").val());
        if(practiceTypeID == 4){ //RE
            hgrp_gotAccidentInsuranceShow = "none";
        }

        var typeID = Number($("#customerPersonTypeID").val());

        switch(PRACTICE_PERSON_DAMAGE_TYPES_LIST[typeID]){
            case 'M': ///// MATERIALE
                /*tip_statusTypeID.text = '1';
                tip_typeID.text = itemObject.typeID.toString();
                lbl_statusTitle.text = 'STATO DANNO MATERIALE';
                lbl_insuranceStatusTitle.text = 'STATO DANNO MATERIALE (POLIZZA)';*/
                $("#lbl_insuranceTypeName").html('POLIZZA KASKO ' + PRACTICE_PERSON_TYPES_LIST[typeID]);
                
               /* grp_hideout.addElement(hgrp_coroner);
                grp_hideout.addElement(hgrp_insuranceCoroner);
                grp_hideout.addElement(hgrp_insuranceCustomerCoroner);
                grp_hideout.addElement(hgrp_insuranceInsuranceCoroner);
                grp_hideout.addElement(vgrp_specialists);
                grp_hideout.addElement(vgrp_specialistAdd);
                grp_hideout.addElement(hgrp_tribunal);
                grp_hideout.addElement(hgrp_judge);
                
                
                grp_hideout.addElement(tip_relationshipID);*/

                gotAccidentInsuranceLabel = "ha una polizza kasko"
                break;
            
            case 'P': ///// FISICO
                /*tip_statusTypeID.text = '2';
                lbl_statusTitle.text = 'STATO DANNO FISICO';
                lbl_insuranceStatusTitle.text = 'STATO DANNO FISICO (POLIZZA)';*/

                $("#lbl_insuranceTypeName").html('POLIZZA INFORT. ' + PRACTICE_PERSON_TYPES_LIST[typeID]);
                
               /* grp_hideout.addElement(hgrp_surveyor);
                grp_hideout.addElement(hgrp_bodywork);
                grp_hideout.addElement(hgrp_insuranceSurveyor);
                grp_hideout.addElement(hgrp_insuranceBodywork);
                grp_hideout.addElement(hgrp_tribunal);
                grp_hideout.addElement(hgrp_judge);
                
                grp_hideout.addElement(tip_relationshipID);*/
                gotAccidentInsuranceLabel = "ha una polizza infortuni";
                break;
            
            case 'D': ///// MORTALE
                /*tip_statusTypeID.text = '3';
                lbl_statusTitle.text = 'STATO DANNO MORTALE';
                lbl_insuranceStatusTitle.text = 'STATO DANNO MORTALE (POLIZZA)';*/
                $("#lbl_insuranceTypeName").html('POLIZZA INFORT. ' + PRACTICE_PERSON_TYPES_LIST[typeID]);
                
                /*grp_hideout.addElement(hgrp_surveyor);
                grp_hideout.addElement(hgrp_bodywork);
                grp_hideout.addElement(hgrp_insuranceSurveyor);
                grp_hideout.addElement(hgrp_insuranceBodywork);
                grp_hideout.addElement(hgrp_tribunal);
                grp_hideout.addElement(hgrp_judge);
                
                grp_hideout.addElement(tip_relationshipID);*/
                break;
            
            case 'DC': ///// MORTALE (CONGIUNTO)
                /*tip_statusTypeID.text = '3';
                lbl_statusTitle.text = 'STATO DANNO MORALE';
                
                btn_damageCount.enabled = false;
                
                grp_hideout.addElement(hgrp_surveyor);
                grp_hideout.addElement(hgrp_bodywork);
                grp_hideout.addElement(hgrp_insuranceSurveyor);
                grp_hideout.addElement(hgrp_insuranceBodywork);
                grp_hideout.addElement(hgrp_tribunal);
                grp_hideout.addElement(hgrp_judge);*/
                
                hgrp_gotAccidentInsuranceShow = "none";
                break;
            
            case 'CL': ///// CONSULENZA LEGALE
                /*tip_statusTypeID.text = '4';
                lbl_statusTitle.text = 'PROCEDIMENTO';
                
                btn_damageCount.enabled = false;
                
                grp_hideout.addElement(hgrp_insurancePoint);
                grp_hideout.addElement(hgrp_coroner);
                grp_hideout.addElement(hgrp_insuranceCoroner);
                grp_hideout.addElement(hgrp_liquidator);
                grp_hideout.addElement(hgrp_surveyor);
                grp_hideout.addElement(hgrp_bodywork);
                grp_hideout.addElement(vgrp_specialists);
                grp_hideout.addElement(vgrp_specialistAdd);
                
                
                grp_hideout.addElement(tip_relationshipID);*/
                hgrp_gotAccidentInsuranceShow = "none";
                break;
            
            case 'AB': ///// ECONOMICO
                /*tip_statusTypeID.text = '5';
                lbl_statusTitle.text = 'STATO DANNO ECONOMICO';
                
                btn_damageCount.enabled = false;
                
                grp_hideout.addElement(hgrp_insurancePoint);
                grp_hideout.addElement(hgrp_coroner);
                grp_hideout.addElement(hgrp_insuranceCoroner);
                grp_hideout.addElement(hgrp_liquidator);
                grp_hideout.addElement(hgrp_surveyor);
                grp_hideout.addElement(hgrp_bodywork);
                grp_hideout.addElement(vgrp_specialists);
                grp_hideout.addElement(vgrp_specialistAdd);
                
                
                grp_hideout.addElement(tip_relationshipID);*/
                hgrp_gotAccidentInsuranceShow = "none";
                break;
        }

        var clientData = [{
            ID: i,
            lbl_typeName : PRACTICE_PERSON_TYPES_LIST[$("#customerPersonTypeID").val()],
            hgrp_gotAccidentInsuranceShow: hgrp_gotAccidentInsuranceShow,
            gotAccidentInsuranceLabel: gotAccidentInsuranceLabel
        }];

        $("#clientTemplate").tmpl(clientData).appendTo("#vgrp_customerPeople");
        /*console.log($("#customerPersonTypeID").val());
        if(PRACTICE_PERSON_PG_LIST[$("#customerPersonTypeID").val()]=='G'){
            console.log("yes");
        } */

        $("#deletePracticeCustomerBtn"+i).on('click', function(){
            var id = $(this).attr('rel');
            if(confirm('Una volta eliminato questo elemento non potrà essere più recuperato!\n\nContinuare comunque?\n\n')){
                console.log(id);
                $("#customer"+id).remove();
            }
        });

        $("#customerListBtn"+i).on('click',function(){
            console.log("asd");
            var table1 = $('#customersListTable'+i).DataTable({
                processing: true,
                serverSide: true,
                ajax: GET_CUSTOMERS_URL,
                columns: [
                    { data: 'customer_name', name: 'customer_name' },
                    { data: 'customer_email', name: 'customer_email' }
                ],
                bLengthChange: false,
                language: {
                    searchPlaceholder: 'Search...',
                    sSearch: '',
                    lengthMenu: '_MENU_ items/page',
                },
                paging: false
            });

            $('#customersListTable'+i+' tbody').on('dblclick', 'tr', function () {
                var data = table1.row( this ).data();
                $("input[name=customer_name"+i+"]").val(data.customer_name);
                $("#customerID").val(data.customer_ID);
                $('#customersListTable'+i+' tbody').html("");
                $('#modalCustomerList'+i).modal('toggle');
                table1.destroy();
                $('#customersListTable'+i+' tbody').off('dblclick');
            });
        });

        i++;
    });
    
    

    function setAlarm(type){
        var alarmType;
        var alertText;
        var alertText2;
        var alertDescription;
        
        var newAlarmDate;

        var typeID_val = $("#typeID").val()

        if(type == "request"){
            var managementTypeID_val = $("#managementTypeID").val();
            if(typeID_val == 1){
                if(managementTypeID_val == 1){
                    if($("#complaintDate").val() !== ""){
                        var complaintDate = $("#complaintDate").val().split("/");
                        newAlarmDate = new Date(complaintDate[2],complaintDate[1]-1,complaintDate[0]);
                        if(newAlarmDate) newAlarmDate.setDate(newAlarmDate.getDate() + 60);
                        alarmType = " (60 giorni dopo la data di denuncia)";
                        alertText2 = " la scadenza dei Termini di Offerta";
                        alertDescription = "Scadenza Termini di Offerta";
                    }
                } else if(managementTypeID_val == 2){
                    if($("#complaintDate").val() !== ""){
                        var complaintDate = $("#complaintDate").val().split("/");
                        newAlarmDate = new Date(complaintDate[2],complaintDate[1]-1,complaintDate[0]);
                        if(newAlarmDate) newAlarmDate.setDate(newAlarmDate.getDate() + 30);
                        alarmType = " (30 giorni dopo la data di denuncia)";
                        alertText2 = " la scadenza dei Termini di Offerta";
                        alertDescription = "Scadenza Termini di Offerta";
                    }
                } else if(managementTypeID_val == 3){
                    if($("#requestDate").val() !== ""){
                        var complaintDate = $("#requestDate").val().split("/");
                        newAlarmDate = new Date(complaintDate[2],complaintDate[1]-1,complaintDate[0]);
                        if(newAlarmDate) newAlarmDate.setDate(newAlarmDate.getDate() + 2);
                        alarmType = " (2 giorni dopo la data di richiesta)";
                        alertText2 = " scadenza richiesta Perito ad Agenzia di Polizza";
                        alertDescription = "Scadenza richiesta Perito ad Agenzia di Polizza";
                    }
                }
            }
            
        } else if(type == "delivery"){
            if(typeID_val == 1){
                if($("#deliveryDate").val() !== ""){
                    var deliveryDate = $("#deliveryDate").val().split("/");
                    newAlarmDate = new Date(deliveryDate[2],deliveryDate[1]-1,deliveryDate[0]);
                     if(newAlarmDate) newAlarmDate.setDate(newAlarmDate.getDate() + 60);
                    alarmType = " (60 giorni dopo la data di ricevimento della richiesta)";
                    alertText2 = " la scadenza termini per Citazione";
                    alertDescription = "Scadenza termini per Citazione";
                }
            }
        }

        if(newAlarmDate){
            alertText = "Attivare l'Allarme al"
                + "\n"+newAlarmDate.getDate()+"/"+(newAlarmDate.getMonth()+1)+"/"+newAlarmDate.getFullYear()+alarmType
                + "\ncome predefinito per"+alertText2+"?"
                + "\n\nPremere 'No' per impostarlo manualmente in seguito.\n\n";
        
            if(newAlarmDate.getDay() == 6){
                alertText += "ATTENZIONE: il "+newAlarmDate.getDate()+"/"+(newAlarmDate.getMonth()+1)+"/"+newAlarmDate.getFullYear()+" è sabato.\n\n";
            }
            if(newAlarmDate.getDay() == 0){
                alertText += "ATTENZIONE: il "+newAlarmDate.getDate()+"/"+(newAlarmDate.getMonth()+1)+"/"+newAlarmDate.getFullYear()+" è domenica.\n\n";
            }

            if(confirm(alertText)){

                if(type == "request"){
                    $("#requestDateAlarm").attr('disabled',false);
                    $("#requestDateAlarm").find('span').html("on");
                    $("#requestDateAlarm").removeClass("btn-info").addClass('btn-success');
                } else if(type == "delivery"){
                    $("#deliveryDateAlarm").attr('disabled',false);
                    $("#deliveryDateAlarm").find('span').html("on");
                    $("#deliveryDateAlarm").removeClass("btn-info").addClass('btn-success');
                }
            }
        }
    }

    $("#getterListBtn").click(function(){
        var table = $('#gettersListTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: GET_GETTERS_URL,
            columns: [
                { data: 'getter_name', name: 'getter_name' },
                { data: 'getter_email', name: 'getter_email' }
            ],
            bLengthChange: false,
            language: {
                searchPlaceholder: 'Search...',
                sSearch: '',
                lengthMenu: '_MENU_ items/page',
            },
            paging: false
        });

        $('#gettersListTable tbody').on('dblclick', 'tr', function () {
            var data = table.row( this ).data();
            $("#getter_name").val(data.getter_name);
            $("#getterID").val(data.getter_ID);
            $('#gettersListTable tbody').html("");
            $('#modalGetterList').modal('toggle');
            table.destroy();
            $('#gettersListTable tbody').off('dblclick');
        });
    });
});