$(function() {
    var status = "";
    $('#myonoffswitch').change(function() {
        status = $(this).prop('checked')
        var log = "";
        if (status == true) {
            log = 'ON';
        }
        else{
            log = 'OFF';
        }
        $.ajax({
            url: "livechat/proses.php",
            type: "POST",
            data: {
              status : status
            },
            cache : false,
            success: function(){
                $('#console-event').html('Live Chat Status : ' + log);
            },
            error: function(){
                alert("AJAX FAIL");
            }
        });
    });
   

})