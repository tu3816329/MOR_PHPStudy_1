/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function () {
    checkLogin();
    $('#loginForm').submit(function (event) {
        event.preventDefault();
        $.ajax({           
            url: "../Controller/LoginController.php",
            method: "POST",
            data: $('#loginForm').serialize(),
            success: function (result) {
                try {
                    var rs = JSON.parse(result);
                    if (rs.status !== undefined && rs.status === true) {
                        window.location.href = "http://localhost/Project/Thu6_6_19/Page/Home.php";
                    } else {
                        $('#errMsg').html(rs.msg);
                    }
                } catch (e) {
                    $('#errMsg').html(e.toString() + "_" + result);
                }
            }
        });

    });
    function checkLogin() {
        if (typeof $.cookie('user') !== undefined && typeof $.cookie('authen') !== undefined && $.cookie('authen') === "1") {
            window.location.href = "http://localhost/Project/Thu6_6_19/Page/Home.php";
        }
    }
});


