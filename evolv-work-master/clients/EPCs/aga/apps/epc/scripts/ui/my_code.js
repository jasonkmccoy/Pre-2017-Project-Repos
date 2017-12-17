/// <reference path="jquery-1.3.2-vsdoc.js" />

// validate mandatory fields are completed
function VerifyMandatoryFieldsAreComplete(e) {

    // check standard required fields
    $(".required").each(function() {
        var txtValue = jQuery.trim($(this).val());
        if (txtValue == "") {
            $(this).css("background-color", "rgb(193,219,236)");
            e.preventDefault();
        } else {
            $(this).css("background-color", "white");
        }
    });
    
    // check state field
    var txtState = $("#txtState :selected").text();
    if (txtState == "Choose a state") {
        $("#txtState").css("background-color", "rgb(193,219,236)");
        e.preventDefault();
    } else {
        $("#txtState").css("background-color", "white");
    }

    // check country field
    var txtCountry = $("#txtCountry :selected").text();
    if (txtCountry == "Choose a country") {
        $("#txtCountry").css("background-color", "rgb(193,219,236)");
        e.preventDefault();
    } else {
        $("#txtCountry").css("background-color", "white");
    }

    // check company type field
    var txtCompanyType = $("#txtCompanyType :selected").text();
    if (txtCompanyType == "Choose a company type") {
        $("#txtCompanyType").css("background-color", "rgb(193,219,236)");
        e.preventDefault();
    } else {
        $("#txtCompanyType").css("background-color", "white");
    }

}

// global opt-out
function globalOptOut(e) {

    $(':input').attr('checked', false);
    $(':input#chkOptOut').attr('checked', true);

}

function uncheckGlobalOptOut(e) {

    if (this.id != 'chkOptOut') {
        $(':input#chkOptOut').attr('checked', false);
    }

}
