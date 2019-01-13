function hide_all(classe){
    $(classe).each(function(){
        $(this).hide();
    });
}

function show_all(classe){
    $(classe).each(function(){
        $(this).show();
    });
}

$(function(){
    hide_all(".stage");
    hide_all(".projet");
    
    var values_list = {
        "#python" : 80,
        "#javascript": 70,
        "#html": 50,
        "#php": 55,
        "#vba": 70,
        "#office": 85,
        "#Java" : 50,
        "#R" : 55,
        "#SQL" : 60,
    };
    
    $.each(values_list, function( key, value ) {
        var data = [{
            value: value,
            color: "#1abc9c"
        },
        {
            value : 100 - value,
            color : "#ecf0f1"
        }]
        var myDoughnut = new Chart($(key)[0].getContext("2d")).Doughnut(data);
    });
    
    $("#show_stage").click(function(){
        if ($(this).prop("checked")) {
            show_all(".stage");
        } else {
            hide_all(".stage");
        }
    });
    
    $("#show_projet").click(function(){
        if ($(this).prop("checked")) {
            show_all(".projet");
        } else {
            hide_all(".projet");
        }
    });
});