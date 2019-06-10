<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Copy Vnexpress</title>

        <!-- Styles -->
        <style>
            html, body {
              background-image: url("http://eco-greensaigon.com.vn/style/ecogreensaigon/uploads/products/MKT_Tong-the-01.jpg?width=1920&height=800&mode=crop");
                /* background-color: #6FDF18; */
                background-size: cover;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100%;
                margin: 0;
                overflow: scroll;
            }
            ::-webkit-scrollbar {
                display: none;
            }
            .full-height {
                height: 100%;

                overflow: scroll;
            }

            .flex-center {
                background-color: #fff;
                min-width: 400px;
                align-items: baseline;
                align-content:center;
                margin-left: 20%;
                margin-right: 20%;

            }
            .header {
              height: 100px;
              width: 100%;
              background: #fff;

            }
            .logo{
              margin-top: 20px;
              margin-left: 20px;
              height: 90px;
              min-width: 40px;
            }
            .menuBar{
              height: 30px;
              margin-top: 30px;
              border-bottom: solid;
            }
            .menuBar ul, ul li{
              /* text-decoration: none; */
              margin: 0px;
              list-style: none;
              padding: 2px;
              display: inline;
              width: 100%;
            }
            .menuBar ul>li>a{
              display: inline-block;
              min-width: 60px
              max-width: 100px;
              text-decoration: none;
              color:black;
            }
            .menuBar ul li a:hover{

                background-color: #D0D6CA;
            }
            .menuBar li:hover{
                background-color: #D0D6CA;
            }
            @yield('extraStyle')
        </style>
    </head>
    <body>

      <div class="container full-height flex-center">
      <div class="header">
        <a href="/Study_Laravel/public/">
        <img src="https://s.vnecdn.net/vnexpress/restruct/i/v75/graphics/img_logo_vne_web.gif" class="logo" />
        </a>
      </div>
      <div class="menuBar">
          <ul>
            <li><a href="/Study_Laravel/public/"><label> Video </lable></a></li>
            <li><a href="/Study_Laravel/public/"><label> Thời sự </lable></a></li>
            <li><a href="/Study_Laravel/public/"><label> Góc nhìn </lable></a></li>
            <li><a href="/Study_Laravel/public/"><label> Thế giới </lable></a></li>
            <li><a href="/Study_Laravel/public/"><label> Kinh doanh </lable></a></li>
            <li><a href="/Study_Laravel/public/"><label> Giải trí </lable></a></li>
            <li><a href="/Study_Laravel/public/"><label> Thể thao </lable></a></li>
            <li><a href="/Study_Laravel/public/"><label> Pháp luật </lable></a></li>
            <li><a href="/Study_Laravel/public/"><label> Giáo dục </lable></a></li>
            <li><a href="/Study_Laravel/public/"><label> Sức khỏe </lable></a></li>
            <li><a href="/Study_Laravel/public/"><label> Đời sống </lable></a></li>
            <li><a href="/Study_Laravel/public/"><label> Du lịch </lable></a></li>
            <li><a href="/Study_Laravel/public/"><label> Khoa học </lable></a></li>
            <li><a href="/Study_Laravel/public/"><label> Số hóa </lable></a></li>
            <li><a href="/Study_Laravel/public/"><label> Xe </lable></a></li>
            <li><a href="/Study_Laravel/public/"><label> Ý kiến </lable></a></li>
            <li><a href="/Study_Laravel/public/"><label> Tâm sự </lable></a></li>
            <li><a href="/Study_Laravel/public/"><label> Cười </lable></a></li>
          </ul>
      </div>
        <div class="position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    @yield('content')
                </div>
            </div>
          </div>
        </div>
    </body>
    <script>
    @yield('script');
    </script>
</html>
