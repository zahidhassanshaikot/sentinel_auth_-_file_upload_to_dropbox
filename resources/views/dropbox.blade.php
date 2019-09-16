<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
 
        <title>Upload to Dropbox</title>
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
 
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
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
            .title {
                font-size: 84px;
            }
            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                @if($errors->any())
                <h4>{{$errors->first()}}</h4>
                @endif
                <div class="title m-b-md">
                    Upload file to dropbox
                    <form enctype="multipart/form-data" method="post" action="upload_to_dropbox">
                            <input type="hidden" value="{{csrf_token()}}" name="_token" />
                            <input type="file" name="upload_file" />
                            <input type="submit" value="Upload to Dropbox" />
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>