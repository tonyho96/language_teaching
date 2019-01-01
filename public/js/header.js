$(document).ready(function(){
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

    if (window.location.href.indexOf("settings/profile") > 0) {
        var nav = $("#lesson-header");
        $(window).scroll(function () {
  
            if ($(this).scrollTop() > 125) {
                nav.addClass("f-nav");
            } else {
                nav.removeClass("f-nav");
            }
        });
    }

    if (window.location.href.indexOf("/teacher") > 0) {
        var nav = $("#panel-scrolling-phone");
        $(window).scroll(function () {
            if ($(this).scrollTop() > 0) {
                // nav.addClass("b-nav");
            } else {
                // nav.removeClass("b-nav");
            }
        });
      }
});

function onClickCommunity() {
    $("#community-panel").toggle();
    $("#lession-panel").hide();
}

function onClickLession() {
    $("#lession-panel").toggle();
    $("#community-panel").hide();
}

function onClickMessage() {
    // $("#message-panel").show();
    $("#message-parent").show();
    
}
function closeMessageDialog() {
    $("#message-panel").hide();
}
function onClickShowLanguage() {
    $("#english-list-panel").toggle();
}

function navigateToScreen(selectedScreen) {

    $("#aboutTabNavigation").removeClass("tab-highlight-border");
    $("#servicesTabNavigation").removeClass("tab-highlight-border");
    $("#reviewsTabNavigation").removeClass("tab-highlight-border");
    
    if (selectedScreen === 'services') {
        var position = $("#information-tutorialing").offset().top;
        $("body, html").animate({
            scrollTop: position - 100
        });
        $("#servicesTabNavigation").addClass("tab-highlight-border");
    }
    if (selectedScreen === 'reviews') {
        var position = $("#reviews").offset().top;
        $("body, html").animate({
            scrollTop: position - 100
        });
        $("#reviewsTabNavigation").addClass("tab-highlight-border");
    }

}

function onClickAccount() {
    window.location.replace("http://teaching.test/settings/account");

    $("#account-setting-menu").addClass("account-setting-selected");
    $("#notification-setting-menu").removeClass("account-setting-selected");
}

function onClickNotification() {
    window.location.replace("http://teaching.test/settings/notification");
    
    $("#notification-setting-menu").addClass("account-setting-selected");
    $("#account-setting-menu").removeClass("account-setting-selected");
}


function onClickEditEmail() {
    $("#edit-email-panel").show();
    $("#entered-email").hide();
}

function onCancelEditEmail() {
    $("#edit-email-panel").hide();
    $("#entered-email").show();
}

function onClickEditPassword() {
    $("#edit-password-panel").show();
    $("#entered-password").hide();
}

function onCancelEditPassword() {
    $("#edit-password-panel").hide();
    $("#entered-password").show();
}

function onClickEditLanguage() {
    $("#edit-language-panel").show();
    $("#entered-language").hide();
}

function onCancelEditLanguage() {
    $("#edit-language-panel").hide();
    $("#entered-language").show();
}

function onClickEditEmailLanguage() {
    $("#edit-email-language-panel").show();
    $("#entered-email-language").hide();
}

function onCancelEditEmailLanguage() {
    $("#edit-email-language-panel").hide();
    $("#entered-email-language").show();
}

function onClickEditTimeZone() {
    $("#edit-timezone-panel").show();
    $("#entered-timezone").hide();
}

function onCancelEditTimeZone() {
    $("#edit-timezone-panel").hide();
    $("#entered-timezone").show();
}

function onSelectTimeFormat(timeFormat) {
    if (timeFormat === '12h') {
        $("#12h-time-format").addClass("time-format-selected");
        $("#24h-time-format").removeClass("time-format-selected"); 
    } else {
        $("#12h-time-format").removeClass("time-format-selected");
        $("#24h-time-format").addClass("time-format-selected"); 
    }

}

function onShowTeacherSchedule() {
    // $("#modal-parent").addClass("modal-backdrop fade in");
    // $("#modal-parent").css("opacity", ".8");


    $(".schedule-lession-modal").show();
	$("body").css("overflow", "hidden");
    $("#modal-parent").show();
    $("#modal-parent").addClass("modal-parent modal-backdrop fade in");
}

function onHideTeacherSchedule() {
    $(".schedule-lession-modal").hide();
	$("body").css("overflow", "auto");
    $("#modal-parent").removeClass("modal-parent modal-backdrop fade in");
}

function onSelectCourse() {
    $("#choose-course").show();
    $("#checkout-price-panel").show();
    $("#select-schedule-lesson").hide();
    $("#back-to-schedule-lession").show();

    $("#language-courses-select").addClass("language-courses-selected");
    $("#language-courses-div").css("background", "#ccc")
    $("#language-courses-div").css("color", "black")

    $("#lession-option-select").css("background", "#ff4338");
    $("#lession-option-div").addClass("lession-selected");
    $("#lession-option-div").css("color", "white");
	$(".back-to-schedule-lession").show();

}

function onBackToScheduleLession() {
    $("#choose-course").hide();
    $("#checkout-price-panel").hide();
    $("#select-schedule-lesson").show();

    $("#language-courses-select").removeClass("language-courses-selected");
    $("#language-courses-div").css("background", "#ff4338");
    $("#language-courses-div").css("color", "white")

    $("#lession-option-div").removeClass("lession-selected");
    $("#lession-option-select").css("background", "#ccc");
    $("#lession-option-div").css("color", "black");
	$(".back-to-schedule-lession").hide();
}

function selectPriceOption(item) {
    var items = $(".price-item-block");
    $.each(items, function(key, value) {
        items[key].style.color = "#333";
    });

    var checks = $(".check");
    $.each(checks, function(key, value) {
        checks[key].style.backgroundColor = "transparent";
        checks[key].style.color = "transparent";
    });

    item.style.color = "green";
    var selectedItem = item.getElementsByClassName("check");
    selectedItem[0].style.backgroundColor = "#4cb64c";
    selectedItem[0].style.color = "white";
}

function selectSingleLessonOption(item) {
    var items = $(".single-lesson-item-block");
    $.each(items, function(key, value) {
        items[key].style.color = "#333";
    });

    var checks = $(".single-check");
    $.each(checks, function(key, value) {
        checks[key].style.backgroundColor = "transparent";
        checks[key].style.color = "transparent";
    });

    item.style.color = "green";
    var selectedItem = item.getElementsByClassName("single-check");
    selectedItem[0].style.backgroundColor = "#4cb64c";
    selectedItem[0].style.color = "white";
}

function onShowMessageDialog() {
    // $("#message-parent").show();
}


function onCloseMessageDialog() {
    $("#message-parent").hide();
}

function deleteMessageOfPerson() {
    $("#delete-message-box").toggle();
}

function onClickTeacherCardMenu(view, index) {
    

    $("#availability-content" + index).hide();
    $("#video-content" + index).hide();
    $("#intro-content" + index).hide();

    $("#avai-li-menu" + index).removeClass("avai-video-intro-selelected");
    $("#videos-li-menu" + index).removeClass("avai-video-intro-selelected");
    $("#intro-li-menu" + index).removeClass("avai-video-intro-selelected");
    

    if (view === 'Availability') {
        $("#availability-content" + index).show();
        $("#avai-li-menu" + index).addClass("avai-video-intro-selelected");

    } else if (view === 'Video') {
        $("#video-content" + index).show();
        $("#videos-li-menu" + index).addClass("avai-video-intro-selelected");
        
    } else {
        $("#intro-content" + index).show();
        $("#intro-li-menu" + index).addClass("avai-video-intro-selelected");
        
    }
}

function addTeacherToFavorites (imgId) {
    $("#" + imgId).attr("src", "/front/images/heart-full.svg");
}


function onClickReadMoreTeacherDescription() {
    $("#read-more-item").hide();
    $("#show-less-item").show();

    $("#teacher-introduction-item").removeClass("show-more-inactive");

}

function onClickShowLessTeacherDescription() {
    $("#show-less-item").hide();
    $("#read-more-item").show();

    $("#teacher-introduction-item").addClass("show-more-inactive");
}

function onClickContactTeachers() {
    window.location.replace("http://languageteaching.test/contacts/teacher");
}

function onSelectActionRequire() {
    $("#noti-action-required").addClass("btn-noti-active")
    $("#noti-other").removeClass("btn-noti-active")
}

function onSelectOthers() {
    $("#noti-action-required").removeClass("btn-noti-active")
    $("#noti-other").addClass("btn-noti-active")
}