<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }
            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
    <form method="POST" action="/save-file" enctype="multipart/form-data">
        {{ csrf_field() }}
        Name
        <input type="text" name="name">
        Upload
        <input type="file" name="file"/>
        Description
        <textarea name="description"></textarea>
        <input type="submit">
    </form>
    <br><br>
    <div>
        @foreach($data as $file)
            File name :<a href="{{$file['url']}}">{{$file['name']}}</a><br>
            File url  :{{$file['file']}}<br>
            <br><br>
        @endforeach
    </div>


    </body>
</html>
