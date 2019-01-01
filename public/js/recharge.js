$(document).ready(function() {

    $(window).scroll(function(){
        if($(this).scrollTop()>=80){
            $("#teacherProfileNav").show();
        }
        else {
            $("#teacherProfileNav").hide();
        }

        if($(this).scrollTop()>=200){
            $("#teacher-nav-menu").addClass("fix-menu-teacher");
        }
        else {
            $("#teacher-nav-menu").removeClass("fix-menu-teacher");
        } 
    });

    $(document).mouseup(function(e) {
        var container = $("#logout-panel");

        if (!container.is(e.target) && container.has(e.target).length === 0) {
            container.hide();
        }
    });

    if (window.location.href.indexOf("/recharge") > 0) {
        var nav = $("#lesson-header");
        var help_button = $("#help-button");    


        $(window).scroll(function () {
            
            if ($(this).scrollTop() > 125) {
                nav.addClass("f-nav");
            } else {
                nav.removeClass("f-nav");
            }

        });
    }
});


function onClickAddCredits() {
    var value = parseFloat($("#count-value").val());
    var sum = parseFloat($("#total-payment").text());
    $("#count-value").val(value + 10);
    $("#itaki-credit").text(value + 10);
    $("#itaki-credit-order").text(value + 10);
    
    $("#total-payment").text(sum + 10);
}

function onClickSubCredits() {
    var value = parseFloat($("#count-value").val());
    var sum = parseFloat($("#total-payment").text());

    $("#count-value").val(value - 10);
    $("#itaki-credit").text(value - 10);
    $("#itaki-credit-order").text(value - 10);
    $("#total-payment").text(sum + 10);
}

function onClickAddCoupon() {
    $("#add-a-coupon-right").toggle();
    $("#coupon").toggle();
}

function onShowItakiCredit() {
    $("#content-panel-xs").toggle();

    $("#show-itaki-credit").hide();
    $("#hide-itaki-credit").show();
}

function onHideItakiCredit() {
    $("#content-panel-xs").toggle();

    $("#show-itaki-credit").show();
    $("#hide-itaki-credit").hide();
}

function onClickGoToPay() {
    window.location.replace("http://languageteaching.test/checkout");
}

function onClickShowSummary() {
    $("#show-summary-icon").hide();
    $("#hide-summary-icon").show();

    $("#summary-credit-payment").show();

}

function onClickHideSummary() {
    $("#show-summary-icon").show();
    $("#hide-summary-icon").hide();

    $("#summary-credit-payment").hide();
}