






function CommonConstant(){}

CommonConstant.prototype.MSG_TRY_AGAIN = "Loading is in progress. Please try again";
CommonConstant.prototype.MSG_SEL_PERIOD = "Please select period";
CommonConstant.prototype.MSG_END_OF_LINE = ".";
CommonConstant.prototype.MSG_BUTTON_VALUE = "OK";
CommonConstant.prototype.MSG_SEL_RATE_CHECKBOX = "As the reference foreign currency exchange rate that indicated in transaction initiation has been changed, please confirm the final exchange rate and transaction amount";

CommonConstant.prototype.MSG_THE = "The ";
CommonConstant.prototype.MSG_IS_INVALID = "is invalid";
CommonConstant.prototype.MSG_INVALID_USER_ID_LEN = "Sorry, the Net Banking Account No. / Username and / or Password entered is invalid. Please enter again";
CommonConstant.prototype.MSG_INVALID_USER_ID = "Sorry, the Net Banking Account No. / Username and / or Password entered is invalid. Please enter again";
CommonConstant.prototype.MSG_INVALID_PASSWORD_LEN = "Sorry, the Net Banking Account No. / Username and / or Password entered is invalid. Please enter again";
CommonConstant.prototype.MSG_INVALID_PASSWORD = "Sorry, the Net Banking Account No. / Username and / or Password entered is invalid. Please enter again";
CommonConstant.prototype.MSG_INVALID_TEXT_CONTENT="&nbsp;field contains invalid character(s)";
CommonConstant.prototype.MSG_MISSING_APPLY_FORM="Apply Form not available";

CommonConstant.prototype.MSG_MISSING_SELECT_TEMPLATE_FIELD = "Please select Save Template";


CommonConstant.prototype.MSG_ACCESS_CONTROL="Account Access Denied";

CommonConstant.prototype.MSG_INVALID_AMT_LENGTH_TT="Maximum ";
CommonConstant.prototype.MSG_INVALID_AMT_LENGTH2_TT="Maximum ";
CommonConstant.prototype.MSG_BROWSER_CONCURRENT="Browser can not concurrent ";

//field title
CommonConstant.prototype.FLD_SEL_CURRENCY = "Please select currency"; //remove
CommonConstant.prototype.FLD_SEL_ACCT = "Please select account";
CommonConstant.prototype.FLD_SEL_CHARGE_PARTY = "Please select charge party";
CommonConstant.prototype.FLD_SEL_ACCT_CURRENCY = "Account Currency";
CommonConstant.prototype.FLD_SEL_CURR = "Currency";


//field name
CommonConstant.prototype.FLD_APPLY_PAYEE="'Payee'";
CommonConstant.prototype.FLD_CONTACT_STAFF="'Contact Staff'";
CommonConstant.prototype.FLD_CONTACT_PERSON="'Contact Person'";
CommonConstant.prototype.FLD_DEP_ACCT2="'To Account'";
CommonConstant.prototype.FLD_DELIVERY_ADDR="'Delivery Address'";
CommonConstant.prototype.FLD_DELIVERY_METHOD="'Delivery Method'";
CommonConstant.prototype.FLD_DRAWN_ON_CITY="'Drawn On City'";
CommonConstant.prototype.FLD_EMAIL_ADDR="'E-mail Address'";
CommonConstant.prototype.FLD_PHONE1="'Contact Number'";
CommonConstant.prototype.FLD_CO_AMT="'Cashier's Order Amount'";
CommonConstant.prototype.FLD_DD_AMT="'Demand Draft Amount'";
CommonConstant.prototype.FLD_PHONE2="Contact Number (Office)";
CommonConstant.prototype.FLD_PHONE3="Contact Number (Mobile)";
CommonConstant.prototype.FLD_BENE_ADDR="'Beneficiary Banker Address'";
CommonConstant.prototype.FLD_MSG="'Message'";

//--------- Constant for General Error Checking -------------------------------

//General Error Message used by checking.js
CommonConstant.prototype.MSG_MISSING_INPUT_FIELD = "Please enter ";
CommonConstant.prototype.MSG_MISSING_SELECT_FIELD = "Please select ";
CommonConstant.prototype.MSG_INVALID_FIELD_CONTENT = "";
CommonConstant.prototype.MSG_INVALID_FIELD_CONTENT_APPEND = "&nbsp;should be in numbers";
CommonConstant.prototype.MSG_INVALID_AMT_LENGTH="Maximum ";
CommonConstant.prototype.MSG_INVALID_AMT_LENGTH2="Maximum ";
CommonConstant.prototype.MSG_INVALID_INTEGRAL_PART="&nbsp;digits before decimal point for ";
CommonConstant.prototype.MSG_AMT_WITH_COMMA="&nbsp;must be in numerical symbols without 'Comma'";
CommonConstant.prototype.MSG_INVALID_DECIMAL_PLACES="&nbsp;digits after decimal point for ";
CommonConstant.prototype.MSG_INVALID_DIGIT=" &nbsp;digits";
CommonConstant.prototype.MSG_NOT_ALLOW_INTEGRAL_PART="Integral part must be zero in ";
CommonConstant.prototype.MSG_NOT_ALLOW_DECIMAL_PLACES="Decimal place is not allowed in ";
CommonConstant.prototype.MSG_INVALID_INTEGRAL_PART_CHECK_FORM="&nbsp;digits before decimal point";
CommonConstant.prototype.MSG_INVALID_DECIMAL_PLACES_CHECK_FORM="&nbsp;digits after decimal point";
CommonConstant.prototype.MSG_SEL_ACCT="Please select Account";
CommonConstant.prototype.MSG_TEMPLATE_LISTBOX_NOT_FILL="Template list box not fill";
CommonConstant.prototype.MSG_USER_NOT_AUTHORIZED="User not authorized";
CommonConstant.prototype.TEXTAREA_MAX_LENGTH1="The length of";
CommonConstant.prototype.TEXTAREA_MAX_LENGTH2="can not more than";
CommonConstant.prototype.TEXTAREA_MAX_LENGTH3="characters";
//--------- For change password reminder ------------------
CommonConstant.prototype.MSG_CHANGE_PASSWORD = "Please change the password for the first time login";
CommonConstant.prototype.MSG_FACTOR_CHG_PWD_FIRST = "Please change the password before the alpha password";


CommonConstant.prototype.MSG_SYSTEM_ERROR = "An unexpected error has occurred. Please contact us and report the following error code: ";
CommonConstant.prototype.MSG_INVALID_DECIMAL = "&nbsp;- decimal value is not allowed";

//--------- For template ------------------
CommonConstant.prototype.MSG_TEMPLATE_SIGNATURE_MISMATCH = "Template signature mismatch";
//--------- For Alert Error solution ------------------
CommonConstant.prototype.MSG_ERROR_E1001_SOLUTION_REFER = "We apologize that the page cannot be loaded successfully. Please click <a href='#' onclick='openFAQWindow(\"acb33\");return false;'><span style='font-size:12px;'>here</span></a> to browse the solution.";
//--------- For Enhancement of the security control ------------------
CommonConstant.prototype.MSG_ENHANCEMENT_SECURITY_CONTROL = "<h3 style='text-align: center;'><u>Enhancement of the security measures <br>of Net Banking services</u></h3><span style='text-align: justify;'>To enhance the security measures of Net Banking services, please visit any of our branches to register the \"Multiple Authorization Module Joint Account Net Banking\". Should you have any queries, please feel free to contact your account opening branch or call our e-Banking Support Hotline at (852) 2541-9206.</span>";

var CONST = new CommonConstant();