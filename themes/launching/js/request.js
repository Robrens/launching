$(document).ready(function () {
    $("#mail_form").submit(function (e) {
        console.log("plop");
        var email = $("#newsletter_email").val();
        $.ajax({
            method: "post",
            url: "http://launching/",
            data: {"email" : email},
            success: function (response) {
                $("#exampleModal").modal("hide")
                $("#newsletter_email").val("")
            }
        });
        $("#form").hide();
        $("h2").css("margin-bottom", "30%");
        e.preventDefault();
        
    });
});