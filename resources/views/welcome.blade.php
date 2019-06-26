<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Simple Chat App</title>

        <script src="//{{ Request::getHost() }}:6001/socket.io/socket.io.js"></script>
    </head>
    <body>
        <div class="content">
            <div id="app">
                <chat-box></chat-box>
            </div>
        </div>

        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
