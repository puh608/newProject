$(document).ready(function(){
    $('.fc-datepicker').datepicker({
      showOtherMonths: true,
      selectOtherMonths: true,
      dateFormat: 'dd/mm/yy'
    });

    $("#gotAccidentInsurance").click(function(){
        checkGotAccidentInsurance();
    });

    $("#customerPersonTypeID").change(function(){
        onCreationComplete();
    });

    function onCreationComplete(){
        
       
        /*tip_typeID.text = itemObject.typeID.toString();
        lbl_typeName.text = C_Globals.PRACTICE_PERSON_TYPES_LIST[itemObject.typeID];*/
        
        
        
        /*if(itemObject.typeID!=15 && itemObject.typeID!=16){ //TITOLARE DEL CREDITO
            grp_hideout.addElement(hgrp_realCreditOwner);
        }*/
        
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

                $("#gotAccidentInsuranceLabel").html("ha una polizza kasko")
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
                $("#gotAccidentInsuranceLabel").html("ha una polizza infortuni")
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
                
                $("#hgrp_gotAccidentInsurance").hide();
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
                $("#hgrp_gotAccidentInsurance").hide();
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
                $("#hgrp_gotAccidentInsurance").hide();
                break;
           
            default:
                /*itemObject.getFieldByName('statusTypeID').isNeeded = false;
                itemObject.getFieldByName('statusCategoryID').isNeeded = false;
                itemObject.getFieldByName('statusUpdateDate').isNeeded = false;*/
                
                
                /*grp_hideout.addElement(tip_relationshipID);
                grp_hideout.addElement(hgrp_documents);
                grp_hideout.addElement(vgrp_damageStatus);
                grp_hideout.addElement(vgrp_contacts);*/
                break;
        }
        
        /*if(PRACTICE_PERSON_PG_LIST[typeID] == 'G'){  //p. giuridica
            tip_customerID.dataProvider = archiveCompanies;
            tip_customerID.labelField = 'company_name';
            itemObject.getFieldByName('customerID').label = 'Rag. Sociale';
        }else {
            tip_customerID.dataProvider = archiveCustomers;
            tip_customerID.labelField = 'customer_name';
            itemObject.getFieldByName('customerID').label = 'Nome';
        }
        if(itemExists) itemObject.getFieldByName('customerID').setValue(tip_customerID,itemObject.startingValues.practiceCustomer_customerID);
        
        itemObject.resetModuleLabels();
        
        checkFolderPath();
        checkGotAccidentInsurance();
        checkStatus();*/
    }

    onCreationComplete();

    

    function checkGotAccidentInsurance(){
        var checked = $("#gotAccidentInsurance").prop('checked');
        if(!checked){
            $("#hgrp_insurance").hide();
        } else {
            $("#hgrp_insurance").show();
        }
    }
});