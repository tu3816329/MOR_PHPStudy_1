/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function () {
    checkLogin();
    loadData();
    $('#btLogout').click(function (e) {
        e.preventDefault();
        $.removeCookie('authen', {path: "/"});
        $.removeCookie('user', {path: "/"});
        window.location.href = "http://localhost/Project/Thu6_6_19/Page/Login.php";
    });
    function checkLogin() {
        if (typeof $.cookie('user') === undefined || typeof $.cookie('authen') === undefined || $.cookie('authen') === "0") {
            window.location.href = "http://localhost/Project/Thu6_6_19/Page/Login.php";
        }
    }
    function loadData() {
        var table = $('#dataTable').dataTable({
            "ajax": {
                url: "../Controller/HomeController.php?btAction=getAll",
                method: "GET", "dataSrc": ""
            }, columns: [
                {data: "fullname"},
                {data: "email"}
            ]
        });
        if (typeof $.cookie('user') !== undefined && typeof $.cookie('authen') !== undefined && $.cookie('authen') === "1") {
            $.ajax({
                url: "../Controller/HomeController.php?btAction=getUser",
                method: "GET",
                success: function (result) {
                    try {
                        var rs = JSON.parse(result);
                        $('#uName').html(rs.username);
                        $('#uImage').attr('src', window.location + "/../../Resource/Upload/" + rs.avatar);
                    } catch (e) {
                    }

                }
            });
        }
    }
});




