$(document).ready(function() {

    // Only scroll in Lesson page
    if (window.location.href.indexOf("lessons") > 0) {
      var nav = $("#lesson-header");
      $(window).scroll(function () {

          if ($(this).scrollTop() > 125) {
              nav.addClass("f-nav");
          } else {
              nav.removeClass("f-nav");
          }
      });
    } 
});

function onSelectLessonMenu(item) {
    $("#lessons").hide();
    $("#packages").hide();
    $("#problems").hide();
    $("#calendar").hide();

    $("#lessons-menu").removeClass("account-setting-selected");
    $("#packages-menu").removeClass("account-setting-selected");
    $("#problems-menu").removeClass("account-setting-selected");
    $("#calendar-menu").removeClass("account-setting-selected");

    $("#session-search-head").show();

    if (item === 'lessons') {
        $("#lessons").show();
        $("#lessons-menu").addClass("account-setting-selected");

    } else if (item === 'packages') {
        $("#packages").show();
        $("#packages-menu").addClass("account-setting-selected");
        
    } else if (item === 'problems') {
        $("#problems").show();
        $("#problems-menu").addClass("account-setting-selected");
    } else {
        $("#calendar").show();
        $("#calendar-menu").addClass("account-setting-selected");
        $("#session-search-head").hide();
        initializeCalendarView();
    }

}

function initializeCalendarView() {
    $('#calendar-item').fullCalendar({
        header: {
          left: 'prev,next today',
          center: 'title',
          right: 'month,agendaWeek,agendaDay,listMonth'
        },
        defaultDate: '2018-09-12',
        navLinks: true, // can click day/week names to navigate views
        businessHours: true, // display business hours
        editable: true,
        events: [
          {
            title: 'Business Lunch',
            start: '2018-09-03T13:00:00',
            constraint: 'businessHours'
          },
          {
            title: 'Meeting',
            start: '2018-09-13T11:00:00',
            constraint: 'availableForMeeting', // defined below
            color: '#257e4a'
          },
          {
            title: 'Conference',
            start: '2018-09-18',
            end: '2018-09-20'
          },
          {
            title: 'Party',
            start: '2018-09-29T20:00:00'
          },
  
          // areas where "Meeting" must be dropped
          {
            id: 'availableForMeeting',
            start: '2018-09-11T10:00:00',
            end: '2018-09-11T16:00:00',
            rendering: 'background'
          },
          {
            id: 'availableForMeeting',
            start: '2018-09-13T10:00:00',
            end: '2018-09-13T16:00:00',
            rendering: 'background'
          },
  
          // red areas where no events can be dropped
          {
            start: '2018-09-24',
            end: '2018-09-28',
            overlap: false,
            rendering: 'background',
            color: '#ff9f89'
          },
          {
            start: '2018-09-06',
            end: '2018-09-08',
            overlap: false,
            rendering: 'background',
            color: '#ff9f89'
          }
        ]
      });
  
}