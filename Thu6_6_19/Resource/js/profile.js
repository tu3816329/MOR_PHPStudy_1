/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function () {
    checkLogin();
    loadData();

    $('#btEdit').click(function (e) {
        e.preventDefault();
//        alert($('#btEdit').html())
        if ($('#btEdit').text() === "Edit") {
            $('#pFullname').attr('readonly', false);
            $('#pEmail').attr('readonly', false);
            $('#pBirthday').attr('readonly', false);
            $('#pFullname').focus();
            $('#btEdit').html("Save");
        } else if ($('#btEdit').html() === "Save") {
            $('#pFullname').attr('readonly', true);
            $('#pEmail').attr('readonly', true);
            $('#pBirthday').attr('readonly', true);
            $.ajax({
                url: "http://localhost/Project/Thu6_6_19/Controller/ProfileController.php",
                type: "POST",
                data: {
                    "btAction": "Update", "fullname": $('#pFullname').val(), "email": $('#pEmail').val(), "birthday": $('#pBirthday').val()
                }, success: function (result) {
                    try {
                        var rs = JSON.parse(result);
                        if (rs.status == true) {                            
                            $('#btEdit').html("Edit");
                            location.reload();
                        } else {
                            alert(rs.msg);
                        }
                    } catch (e) {
                        alert(e + "_" + result);
                    }
                }
            })

        }
//        window.location.href = "http://localhost/Project/Thu6_6_19/Page/Login.php";
    });

    $('#btDelete').click(function (e) {
        e.preventDefault();
        $.ajax({
            url: "http://localhost/Project/Thu6_6_19/Controller/ProfileController.php",
            type: "POST",
            data: {
                "btAction": "Delete"
            }, success: function (result) {
                try {
                    var rs = JSON.parse(result);
                    if (rs.status == true) {
                        $.removeCookie('authen', {path: "/"});
                        $.removeCookie('user', {path: "/"});
                        window.location.href = "http://localhost/Project/Thu6_6_19/Page/Login.php";
                    } else {
                        alert(rs.msg);
                    }
                } catch (e) {
                    alert(e + "_" + result);
                }

            }
        });
    });
    $('#btLogout').click(function (e) {
        e.preventDefault();
        $.removeCookie('authen', {path: "/"});
        $.removeCookie('user', {path: "/"});
        window.location.href = "http://localhost/Project/Thu6_6_19/Page/Login.php";
    });

    $('#pImage').click(function (e) {
        $('#imgupload').trigger('click');
    });
    $('#imgupload').change(function (e) {
        $('#imgForm').trigger('submit');
    });
    $('#imgForm').submit(function (e) {
        e.preventDefault();
        $.ajax({
            url: "http://localhost/Project/Thu6_6_19/Controller/ProfileController.php",
            type: "POST",
            processData: false,
            contentType: false,
            cache: false,
            data: new FormData(this),
            success: function (result, status) {
                try {
                    var rs = JSON.parse(result);
                    if (rs.status == true) {
                        $('#pImage').attr('src', window.location.replace('#', "") + "/../../Resource/Upload/" + rs.msg);
                        $('#uImage').attr('src', window.location.replace('#', "") + "/../../Resource/Upload/" + rs.msg);
                        location.reload();
                    } else {
                        alert(rs.msg);
                    }
                } catch (e) {

                    alert(e + "_" + result);
                }
            }
        });
    });
    function checkLogin() {
        if (typeof $.cookie('user') === undefined || typeof $.cookie('authen') === undefined || $.cookie('authen') === "0") {
            window.location.href = "http://localhost/Project/Thu6_6_19/Page/Login.php";
        }
    }
    function loadData() {
        if (typeof $.cookie('user') !== undefined && typeof $.cookie('authen') !== undefined && $.cookie('authen') === "1") {
            $.ajax({
                url: "../Controller/ProfileController.php?btAction=getUser",
                method: "GET",
                success: function (result) {
                    try {
                        var rs = JSON.parse(result);
                        $('#uName').html(rs.username);
                        $('#uImage').attr('src', window.location.replace('#', "") + "/../../Resource/Upload/" + rs.avatar);
                        $('#pUsername').html("Welcome <b>" + rs.username + "<b>");
                        $('#pImage').attr('src', window.location.replace('#', "") + "/../../Resource/Upload/" + rs.avatar);
                        $('#pFullname').attr('value', rs.fullname);
                        $('#pEmail').attr('value', rs.email);
                        $('#pBirthday').attr('value', rs.birthday);
                    } catch (e) {

                    }
                }
            });
        }
    }
});




