$(function(){
    $("#submit_mail").click(function(){
        event.preventDefault();
        var data = {
            "name" : $("#name").val(),
            "mail" : $("#mail").val(),
            "content" : $("#content").val(),
            "g-recaptcha-response" : grecaptcha.getResponse()
        };
        
        $.post("../../webservices/email_me.php", data)
          .done(function( cback ) {
            let result = JSON.parse(cback);
            $("#submit_mail").notify(result["content"], result["status"], {position:"right middle"});
            $('#name').val('');
            $('#mail').val('');
            $('#content').val('');
          })
          .fail(function( cback ) {
            $("#submit_mail").notify("Oops, something went wrong... Sorry :(", {className: "error", position:"right middle"});
            $('#name').val('');
            $('#mail').val('');
            $('#content').val('');
          });
    });
    
});