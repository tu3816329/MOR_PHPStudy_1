
$(document).ready(function () {
    $('#RegisterForm').submit(function (event) {
        event.preventDefault();
        $.ajax({
            url: "../Controller/RegisterController.php",
            type: "POST",
            data: $('#RegisterForm').serialize(),
            success: function (result, status) {
                try {
                    var rs=JSON.parse(result);
                    if (rs.status !== undefined && rs.status === true) {
                        window.location.href = "http://localhost/Project/Thu6_6_19/Page/Login.php";
                    } else {                        
                        $('#errMsg').html(rs.msg);
                    }
                } catch (e) {
                    $('#errMsg').html(e.toString() + "_" + result);
                }
            }
        });

    });

});


