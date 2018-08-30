<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Laracast Vue</title>

        <!-- Bulma -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css">
        <!-- Fonts -->

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <style>
            body { padding-top : 40px}
        </style>
    </head>
    <body>
        <div id="app" class="container">
            <tabs>

                <tab name="About Us" :selected="true">
                    <h1>Here is content for the about us tab.</h1>
                </tab>

                <tab name="About Our Culture">
                    <h1>Here is content for the about our culture tab.</h1>
                </tab>

                <tab name="About Our Vision">
                    <h1>Here is content for the about our vision tab.</h1>
                </tab>

            </tabs>
        </div>
    </body>
</html>
<script src="js/app.js"></script>