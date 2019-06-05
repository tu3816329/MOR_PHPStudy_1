<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>Exercise 2</title>
    </head>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script>
        function calculateDate(val) {
            $.ajax({
                type: 'POST',
                url: "http://localhost/Project/Wed6_5_19/Controller/Exc_2_Controller.php",
                dataType:'text',
                data: {
                    date: val
                }, success: function (result, status) {
                    $('#result').html(result);
                }
            });
        }
    </script>
    <body>
        Enter Date Of Birth : <input type='date' id='dateOfBirth' onchange='calculateDate(this.value)' />        
        <div id="result"></div>
    </body>
</html>
