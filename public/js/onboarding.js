$(document).ready(function(){
    // ONlY show 1st step
    // $("#step1").hide();  
    $("#step2").hide();
    $("#step3").hide();
    $("#step4").hide();
    $("#step5").hide();
    $("#step6").hide();
    $("#step6_1").hide();
    $("#step7").hide();
    $("#step8").hide();
    
    activeCheckbox();

    function activeCheckbox() {
        $( "input[type=radio]" ).on( "click", function() {
            
        });
    
    }

});



function onClickStep1() {
    // var x = document.forms["OnBoardingForm"]["language_id"].value;
    var x = $('#language_id').val();
    if (x == "") {
        alert("Please choose language!");
    }
    else{
        $("#step1").hide();
        $("#step2").fadeIn('slow');
    }

}

function onClickStep2() {
    // var x = document.forms["OnBoardingForm"]["time_zones"].value;
    // var y = document.forms["OnBoardingForm"]["location_id"].value;
    var x = $('#time_zones').val();
    var y = $('#location_id').val();
    console.log(x, y);
    if (x == "" || y =="") {
        alert("Please choose country!");
    }
    else{
        $("#step2").hide();
        $("#step3").fadeIn('slow');
    }


}

function onClickStep3() {

    // var x = document.forms["OnBoardingForm"]["other_language_id"].value;
    // var y = document.forms["OnBoardingForm"]["language_level"].value;

    var x = $('#other_language_id').val();
    var y = $('input[name="language_level"]:checked').val() || '';
    if (x == "" || y =="") {
        alert("Please choose current level!");
    }
    else{
        $("#step3").hide();
        $("#step4").fadeIn('slow');
    }

}
function onClickStep4() {
    $("#step4").hide();
    $("#step5").fadeIn('slow');
}
function onClickStep5() {

    // var x = document.forms["OnBoardingForm"]["teacher_type"].value;
    var x = $('input[name="teacher_type"]:checked').val() || '';
    if (x == "") {
        alert("Please choose Professional Teacher or Community Tutor!");
    }
    else{
        $("#step5").hide();
        $("#step6").fadeIn('slow');
    }

}
function onClickStep6() {

    // var x = document.forms["OnBoardingForm"]["student_profile_status"].value;
    var x = $('input[name="student_profile_status"]:checked').val() || '';
    if (x == "") {
        alert("Please choose Yes or No!");
    }
    else{
        $("#step6").hide();
        // $("#step6_1").fadeIn('slow');
        //Không có step 6 trên trang italki.com
        $("#step7").fadeIn('slow');
    }

}
// function onClickStep6_1() {
//
//     // var x = document.forms["OnBoardingForm"]["teacher_location_id"].value;
//     var x = $('input[name="teacher_location_id"]:checked').val() || '';
//     if (x == "") {
//         alert("Please select a value!");
//     }
//     else{
//         $("#step6_1").hide();
//         $("#step7").fadeIn('slow');
//     }
//
// }
function onClickStep7() {

    // var x = document.forms["OnBoardingForm"]["subject_id"].value;
    var x = $('input[name="subject_id"]:checked').val() || '';
    if (x == "") {
        alert("Please select a value!");
    }
    else{
        $("#step7").hide();
        $("#step8").fadeIn('slow');
    }

}

function onClickStep8() {
    window.location.replace("http://languageteaching.test/teachers");
}

function onClickLogout() {
    // Detect device
    if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) === true) {
        // Mobile
        $("#menu-after-login-xs").toggle();
    } else {
        // Desktop
        $("#logout-panel").toggle();
    }
}

function onShowAccountSetting() {
    $("#profile-setting-panel").show();
    $("#profile-setting-panel").addClass("auto-height-phone");

    $("#show-accout-setting-panel-icon").hide();
    $("#hide-accout-setting-panel-icon").show();
}

function onHideAccountSetting() {
    $("#profile-setting-panel").hide();
    $("#profile-setting-panel").removeClass("auto-height-phone");

    $("#show-accout-setting-panel-icon").show();
    $("#hide-accout-setting-panel-icon").hide();
}

function onShowContactSetting() {
    $("#contact-setting-panel").toggle();
    $("#contact-setting-panel").addClass("auto-height-phone");
    
    $("#show-contact-setting-panel-icon").hide();
    $("#hide-contact-setting-panel-icon").show();
}

function onHideContactSetting() {
    $("#contact-setting-panel").removeClass("auto-height-phone");
    $("#contact-setting-panel").toggle();

    $("#show-contact-setting-panel-icon").show();
    $("#hide-contact-setting-panel-icon").hide();
}

function onShowCommunitySetting() {
    $("#community-setting-panel").toggle();
    $("#community-setting-panel").addClass("auto-height-phone");
    
    $("#show-community-setting-panel-icon").hide();
    $("#hide-community-setting-panel-icon").show();
}


function onHideCommunitySetting() {
    $("#community-setting-panel").removeClass("auto-height-phone");
    $("#community-setting-panel").toggle();

    $("#show-community-setting-panel-icon").show();
    $("#hide-community-setting-panel-icon").hide();
}