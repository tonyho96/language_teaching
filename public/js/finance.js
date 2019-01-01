$(document).ready(function() {

    initializeDatePicker();

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
});


function onSelectFinanceMenu(selected) {
    $("#student-wallet-detail").removeClass("selected");
    $("#create-purchase-history").removeClass("selected");
    $("#my-coupons").removeClass("selected");
    $("#btn-download").show();
    $("#left-search").removeClass("col-sm-10");
    $("#table-student-credit").show();
     $("#coupon-history-content").hide();

    if (selected === 'student-wallet-detail') {
        $("#student-wallet-detail").addClass("selected");

        // Change from sm-10 to sm-8
        $("#left-search").addClass("col-sm-8");
    
    } else if (selected === 'create-purchase-history') {
        // Hide DOWNLOAD button
        $("#btn-download").hide();
        $("#create-purchase-history").addClass("selected");

        // Change from sm-8 to sm-10
        $("#left-search").removeClass("col-sm-8");
        $("#left-search").addClass("col-sm-10");
    
    } else if (selected === 'my-coupons') {
    
        $("#my-coupons").addClass("selected");
        
        $("#first-second-menu").hide();
        // $("#first-second-content").hide();
        $("#coupon-history-content").show();
        $("#table-student-credit").hide();
    } else {

    }
}


function initializeDatePicker() {
    $("#start-date-picker").datepicker();
    $("#end-date-picker").datepicker();   
}


function onSelectCouponMenu(selected) {
    $("#coupon-menu").removeClass("selected");
    $("#history-menu").removeClass("selected");
       
    if (selected === 'coupon') {
        $("#coupon-menu").addClass("selected");
    } else {
        $("#history-menu").addClass("selected");
    }
}