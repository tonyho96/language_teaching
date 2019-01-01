$(document).ready(function() {

    
});


function onSelectDiscussionsMenu(selected) {
    $("#browse-by-language").removeClass("selected");
    $("#my-discussions").removeClass("selected");
    $("#my-commented").removeClass("selected");

    $("#browse-by-language-div").hide();
    $("#my-discussions-div").hide();
    $("#my-commented-div").hide();

    $("#filter-language").show();

    if (selected === 'browse-by-language') {
        $("#browse-by-language").addClass("selected");
        $("#browse-by-language-div").show();
    } else if (selected === 'my-discussions') {
        $("#my-discussions").addClass("selected");
        $("#my-discussions-div").show();
        $("#filter-language").hide();

    } else if (selected === 'my-commented') {
        $("#my-commented").addClass("selected");
        $("#my-commented-div").show();
        $("#filter-language").hide();
        
    }
}

