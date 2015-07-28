var SignUp = {
    check: function (id) {
        if ($.trim($("#" + id)[0].value) == '') {
            $("#" + id)[0].focus();
            $("#" + id + "_alert").slideDown("slow");

            return false;
        }
        else if (id == "password" && $.trim($("#" + id)[0].value).length < 8 ) {
            $("#" + id)[0].focus();
            $("#" + id + "_alert").slideDown("slow");

            return false;
        }
        else
        {
            $("#" + id + "_alert").slideUp("slow");
        };

        return true;
    },
    validate: function () {
        if (SignUp.check("username") == false) {
            return false;
        }
        if (SignUp.check("email") == false) {
            return false;
        }
        if (SignUp.check("password") == false) {
            return false;
        }
        if ($("#password")[0].value != $("#repeatPassword")[0].value) {
            $("#repeatPassword")[0].focus();
            $("#repeatPassword_alert").slideDown("slow");

            return false;
        }
        $("#signupForm")[0].submit();
    }
}

$(document).ready(function () {
    $("#signupForm .alert").hide();
});
