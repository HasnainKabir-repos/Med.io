$(document).ready(function(){
    $('#category').change(function(){
        var cat = 'category=' + $(this).val();
        getService($(this).val());
        console.log(cat);
        $.post('../Med.io/PHP/test_portal.inc.php', cat, processResponse);
    });

    function processResponse(data){
        $('#servicesInfo').html(data);
    }
});


function getService(val) {
	$.ajax({
	type: "POST",
	url: "./PHP/test_portal.inc2.php",
	data:'category='+val,
        success: function(data){
            console.log(data);
            $('#serviceName').html(data);
        }
	});
}


var datePicker = document.getElementById("test-date");
datePicker.min = getDate();
datePicker.max = getDate(7);

function getDate(days){
    let date;

    if(days != undefined){
        date  =  new Date(Date.now() + days *24*60*60*1000);
    }else{
        date = new Date();
    }

    const offset = date.getTimezoneOffset();

    date  = new Date(date.getTime() - (offset*60*1000));
    return date.toISOString().split('T')[0];
}