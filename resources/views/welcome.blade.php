<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
{{--                <div class="title">{!!$name!!}</div>--}}
                <div class="title">laravel5.2</div>
                <form action="">
                     <?php echo csrf_token();?>
                </form>
            </div>
        </div>
    </body>
</html>
