<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width,initial-scale=1"/>
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/favicon/android-icon-192x192.png">
    <link rel="apple-touch-icon" sizes="57x57" href="/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-icon-180x180.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/favicon/ms-icon-144x144.png">
    <link rel="manifest" href="/favicon/manifest.json">
    <meta name="theme-color" content="#ffffff">
    <title>Pulse Gym</title>
    <style>.preloader-page {
            position: fixed;
            z-index: 1001;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            background: #070713;
            border-radius: inherit;
            -webkit-transition-duration: .3s;
            transition-duration: .3s;
            -webkit-transition-property: opacity;
            transition-property: opacity;
            box-sizing: border-box
        }

        .preloader-page svg {
            width: 200px;
            height: 200px;
            margin-bottom: 30px;
            -webkit-animation: pulse 1.5s infinite ease-in-out both;
            -o-animation: pulse 1.5s infinite ease-in-out both;
            -ms-animation: pulse 1.5s infinite ease-in-out both;
            -moz-animation: pulse 1.5s infinite ease-in-out both;
            animation: pulse 1.5s infinite ease-in-out both;
            box-sizing: border-box
        }

        @-webkit-keyframes pulse {
            0% {
                -webkit-transform: scale(.9);
                opacity: .2
            }
            50% {
                -webkit-transform: scale(1);
                opacity: 1
            }
            100% {
                -webkit-transform: scale(.9);
                opacity: .2
            }
        }

        @keyframes pulse {
            0% {
                transform: scale(.9);
                opacity: .2
            }
            50% {
                transform: scale(1);
                opacity: 1
            }
            100% {
                transform: scale(.9);
                opacity: .2
            }
        }</style>
    <script defer="defer" src="/static/js/main.js?v={{ time() }}"></script>
    <link href="/static/css/main.css?v={{ time() }}" rel="stylesheet">
</head>
<body>
<noscript>You need to enable JavaScript to run this app.</noscript>
<div id="root"></div>
<script>
    window.setting = {!! \Illuminate\Support\Facades\File::get(storage_path('app/settings.json')) !!}
</script>
</body>
</html>
