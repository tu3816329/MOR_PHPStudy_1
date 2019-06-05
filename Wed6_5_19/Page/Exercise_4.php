<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercise 4</title>
    </head>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script>
        function previewImage(event) {
            var img = document.getElementById('previewImage');
            img.src = URL.createObjectURL(event.target.files[0]);
        }
        $(document).ready(function () {
            $('#form').submit(function (event) {
                event.preventDefault();
                var form = $(this).serialize();
                $.ajax({
                    url: "http://localhost/Project/Wed6_5_19/Controller/Exc_4_Controller.php",
                    type: "POST",
                    processData: false,
                    contentType: false,
                    cache: false,
                    data: new FormData(this),
                    success: function (result, status) {
                        $('#result').html(result);
                    }
                });
            });
            $('#formShow').submit(function (event) {
                event.preventDefault();
                var form = $(this).serialize();
                $.ajax({
                    url: "http://localhost/Project/Wed6_5_19/Controller/Exc_4_Controller.php",
                    type: "POST",
                    processData: false,
                    contentType: false,
                    cache: false,
                    data: new FormData(this),
                    success: function (result, status) {
                        $('#rsShow').html(result);
                    }
                });
            });
        });
    </script>
    <body>
        <h1>Upload image</h1>
        <div>
            <img src="#" id="previewImage" width="400px" height="400px"/>
        </div>
        <form action="../Controller/Exc_4_Controller.php" method="POST" id="form">
            Username: <input type="text" name="txtUsername" value=""  required="required" /><br>
            Upload your image: <input type="file" onchange="previewImage(event)" name="fImg" id = "fImg" required/>
            <input type="hidden" name="btAction" value="Save"/><br>
            <input type="submit" value="Save" />
        </form>
        <div id="result">            
        </div>
        <h1>Show Image Of User</h1>

        <form action="../Controller/Exc_4_Controller.php" method="POST" id="formShow">
            Username: <input type="text" name="txtUsername" value=""  required="required" /><br>
            <input type="hidden" name="btAction" value="Show"/><br>
            <input type="submit" value="Show Image" /><br>            
        </form>
        <div id="rsShow">

        </div>
    </body>
</html>
