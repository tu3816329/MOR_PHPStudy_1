<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercise 3</title>
    </head>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#form').submit(function (event) {
                event.preventDefault();
                var form = $(this).serialize();
                $.ajax({
                    url: "http://localhost/Project/Wed6_5_19/Controller/Exc_3_Controller.php",
                    method: "POST",
                    data: form,
                    success: function (result, status) {
                        var rs = JSON.parse(result);
                        if (rs.status !== undefined && rs.status !== "200") {
                            $('#rgResult').html("<span style='color:red'>" + rs.msg + "</span>");
                        } else {
                            $('#rgResult').html(rs.msg);
                        }
                    }
                });
            });
            $('#btShow').click(function () {
                $.ajax({
                    url: "http://localhost/Project/Wed6_5_19/Controller/Exc_3_Controller.php",
                    method: "POST",
                    data: {
                        btAction: $('#btShow').val(), rdSort: $("[name='sort']:checked").val()
                    },
                    success: function (result, status) {

                        $('#result').html(result);
                    }
                })
            });
        });

    </script>
    <body>
        <div id="register">
            <form method="POST" id="form">
                <table border="0">
                    <tbody>
                        <tr>
                            <td>Name</td>
                            <td> <input type="text" name="txtName" value="" /> </td>
                        </tr>
                        <tr>
                            <td>Date Of Birth</td>
                            <td> <input type="date" name="txtDate" value="" /> </td>
                        </tr>
                    </tbody>
                </table>
                <input type="hidden" name="btAction" value="Register"/>

                <input type="submit" value="Register"/>
            </form>
        </div>
        <div id="rgResult"></div>
        <div>
            <br>
            <input type="radio" name="sort" checked="checked" value="sort by birthday"/>Sort By Birth Day <br>
            <input type="radio" name="sort" value="sort by registered day" />Sort By Registered Day<br>
            <input type="button" id="btShow" value="Show Result"/>
        </div>
        <div id="result">
        </div>


    </body>
</html>
