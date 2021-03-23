<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.6.18/dist/css/uikit.min.css" />
    <title>PayTour</title>
    <style>
        html {
            font-size: 1.2rem;
            font-weight: 300;
            line-height: 1.55;
            -webkit-text-size-adjust: 100%;
            color: #444;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            text-rendering: optimizeLegibility;
        }

        body {
            font-family: 'Nunito', sans-serif;
        }

        .uk-section-primary,
        .uk-button-primary {
            background: #7E50D3;
        }

        .uk-button-primary:hover {
            background: #5c34a7;
            box-shadow: 0 2px 3px
        }
    </style>
</head>

<body class="uk-background-muted">
    @include('layouts.header')
    <div class="uk-container uk-container-small">
        <div class="uk-padding">
            @yield('content')
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.6.18/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.6.18/dist/js/uikit-icons.min.js"></script>
</body>

</html>
